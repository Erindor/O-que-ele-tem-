<?php
include_once "controle.php";

if ($_POST["opcao"] == "sim")
    echo "sim";
else{
    
    $controle = new Controle();
    
    
    echo "tudo certo";
}
    


?>