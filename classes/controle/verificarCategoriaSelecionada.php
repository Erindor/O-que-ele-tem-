<?php
include_once "controle.php";

// verificar botao clicado
if (isset ($_POST["enviar"])){
    
    $categoria = $_POST["categoria"];
    
    $controle = new Controle();
    $perguntas = $controle->recuperarPerguntas($categoria);
    $pergunta_atual = $controle->proximaPergunta($perguntas);
    array_shift($perguntas);
}
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../www/bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../../www/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../../www/bootstrap/css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="../../www/bootstrap/css/bootstrap-theme.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../../www/css/style1.css" />
        <link rel="stylesheet" href="../../www/css/animate.css" type="text/css" />
  
         <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
         
         
         
         <script>
             
             $(document).ready(function(){
                 $("#bt_sim").click(function(){
                     $.ajax({type: "POST",
                             url: "/classes/controle/verificarBotaoClicado.php",
                             data: {opcao : "sim"},
                             success: function (result){
                                alert(result);
                             }
                     });
                 });
                 
                 
                 $("#bt_nao").click(function(){
                     $.ajax({type: "POST",
                             url: "/classes/controle/verificarBotaoClicado.php",
                             data: {opcao : "nao"},
                             success: function (result){
                                alert(result);
                             }
                     });
                 });
                 
             });
             
         </script>
  
    </head>
    
    <body id="perguntas" style="background:none">
        <?php include_once "../../www/template/menu.php"; ?>
        <div class="container" style="border-color: red; border-style: solid">
            
           <?php
                $pergunta_atual->imprimirPergunta();
           ?>
           
           <div id="botoes" style="text-align:center">
               
             <form action="verificarBotaoClicado.php" method="post">
                   <input type="button" class="btn btn-success" id="bt_sim" value="sim"/>
                   <input type="button" class="btn btn-danger" style="margin-left: 10px" id="bt_nao" value="N&atilde;o">
             </form>
           </div>
           
         </div>
        
        <?php include_once "../../www/template/footer.php" ?>
    </body>
    
</html>