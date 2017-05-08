<!DOCTYPE html>
<html class="solucao">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link href='//fonts.googleapis.com/css?family=Grand Hotel' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/www/bootstrap/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/www/bootstrap/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="/www/bootstrap/css/bootstrap-theme.min.css" type="text/css" />
  <link rel="stylesheet" href="/www/bootstrap/css/bootstrap-theme.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../www/css/style1.css" />
  <link rel="stylesheet" href="../www/css/animate.css" type="text/css" />
  
  <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  
</head>
</head>

<body class="solucao">
    <?php include_once "../www/template/menu.php" ?>
    
    
    <div class="container-fluid">
        
        <div class="row tituloSolucao">
            <h1 class="tituloSolucao">Orelhas de Cachorro Infeccionadas: Otite Canina</h1> <br/>
            <small> Por: Pietro Carminati Pelissari </small>
        </div>
        
        <div class="row espacamento-topo">
            
            <div class="col-sm-6 texto" data-scroll-reveal="enter left, over 3s">
                <p>A infecção das orelhas do cachorro é uma inflamação de um canal da orelha. É uma das<br> 
                  doenças de cachorro mais comuns, alguns falam que cerca de 20% dos cachorros possuem<br>
                  algum tipo de otite.
                <p/>
                    <h1  class="submenu"> Causas:</h1>
                    <ul type=disc>
                    <li>Doença é gerada por bactérias.</li>
                    <li>Parasitas.</li>
                    <li>Germes e/ou fungos que se alojam no ouvido do cão.</li>
                    <li>Anormalidades hormonais (como o hipotiroidismo).</li>
                    <li>Alergias.</li>
                    <li>Algum tipo de trauma no local.</li>
                    </ul>
                <p/>
                
                <br/>
            </div>
            
            <div class="col-sm-6" data-scroll-reveal="enter right, over 2s">
                <img src="/www/img/orelhaInfeccionada.jpg" class="img-responsive img-rounded sombra" style="width:500px">
            </div>
        </div>
        
        <hr class="linha"/>
       
        <div class="row espacamento-topo">
            <div class="col-sm-12 texto"  data-scroll-reveal="over 3s">
                <p> <h1  class="submenu"> O que devo fazer? </h1>
                    <p>Para evitar que seu cão pegue inflamação nos ouvidos a coisa mais sábia a fazer é limpar
                      regularmente as orelhas dele. Caso o cão já esteja com os ouvidos inflamados, alguns
                      veterinários preferem que você não tente fazer a limpeza das orelhas sozinho, pois isso
                      pode piorar a inflamação.<br>
                      Limpe as orelhas do cão pingando uma loção especial para limpar ouvidos de cachorro
                      dentro do ouvido. A solução de limpeza ajuda a diluir a sujeira do ouvido do cão.<br>
                      Depois passe um algodão para tirar a sujeira do ouvido. Caso necessário, repita o
                      procedimento para tirar a sujeira que sobrou. Depois seque com uma toalha limpa e
                      seca as orelhas do cão.
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 mapa" data-scroll-reveal="enter left, over 3s" >
                Sugerimos a você, caso queira, que agende um horario no Hospital Veterinario da UVV. Um lugar qualificado e com preço diferenciado, pois se trata de um hospital-escola e parte dos custos são financiados por projetos de pesquisa.
                <div>
                <?php include_once"../www/template/map.php" ?>
                </div>
             </div>
        
        </div>
</body>

<script type="text/javascript" src="/www/js/scrollReveal.js"></script>
<script type="text/javascript">
window.scrollReveal = new scrollReveal();
</script>

</html>