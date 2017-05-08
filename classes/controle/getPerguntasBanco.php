<?php
header ('Content-type: text/html; charset=iso-8859-1');
include_once "controle.php";
$categoria = $_POST["categoria"];

$controle = new Controle();
$perguntas = $controle->recuperarPerguntas($categoria);

$result = "";

foreach ($perguntas as $p){
    $result = $result. "#". $p->getID() . "!". $p->getPergunta() ."!". $p->getSolucao();
}

print_r($result);
?>