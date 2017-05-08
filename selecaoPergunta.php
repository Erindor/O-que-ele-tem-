<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="www/bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="www/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="www/bootstrap/css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="www/bootstrap/css/bootstrap-theme.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="www/css/style1.css" />
        <link rel="stylesheet" href="www/css/animate.css" type="text/css" />
        <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <script type="text/javascript" src="/www/js/requisicaoAjax.js" /> </script>
        <script type="text/javascript" src="/www/js/pergunta.js" />  </script>
        <script type="text/javascript" src="/www/js/exibirPerguntas.js" />  </script>
        <script>
           $(document).ready(function(){
              $("#pergunta_selecionada").hide();
           });
        </script>
    </head>
    
    <body id="perguntas" class="fundoPatas">
        <?php include_once "www/template/menu.php" ?>    
        
        <div id="selecionar_categorias" class="container fundoBranco">
           
           <div class="row">
              <div class="col-sm-12">
              <hr/><p class="titulo"> Qual o problema do seu cãozinho? </p> <hr/>
              </div>
           </div>
           
            <div class="row selecaoCat">
               <div class="espacamento">
                  <div class="col-sm-3 espacamento"> <a> <img src="/www/img/bt_olhos.png" id="polhos" class="img-responsive tamanho_botao" title="Problema nos olhos"/>  </a> </div>
                  <div class="col-sm-3 espacamento"> <img src="/www/img/bt_resp.png" id="presp" class="img-responsive tamanho_botao" title="Problema na respiração"/>    </div>
                  <div class="col-sm-3 espacamento"> <img src="/www/img/bt_pele.png" id="ppele" class="img-responsive tamanho_botao" title="Problema na pele"/>    </div>
                  <div class="col-sm-3 espacamento"> <img src="/www/img/bt_est.png" id="pesto" class="img-responsive tamanho_botao" title="Problema no estômago"/>     </div>
               </div>
            </div>
            
            <div class="row selecaoCat">
               <div class="espacamento">
                  <div class="col-sm-3 espacamento"> <img src="/www/img/bt_ouvido.png" id="pouv" class="img-responsive tamanho_botao" title="Problema nos ouvidos"/>      </div>
                  <div class="col-sm-3 espacamento"> <img src="/www/img/bt_nariz.png" id="pnas" class="img-responsive tamanho_botao" title="Problema no nariz"/>       </div>
                  <div class="col-sm-3 espacamento"> <img src="/www/img/bt_hab.png" id="phabsan" class="img-responsive tamanho_botao" title="Problema nos hábitos sanitários"/>      </div>
               </div>
            </div>
        </div>
        
          <div id="pergunta_selecionada" class="container" style="border-color: #497c53; border-radius: 10px; margin-top:150px;  background-color: rgba(255,255,255,0.8); border-style: solid">
              <?php include_once "www/template/imprimirPergunta.php"; ?>
          </div>
        
        
         <?php include_once "www/template/footer.php" ?>
    </body>
    
</html>