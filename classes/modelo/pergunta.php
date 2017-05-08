<?php

class Pergunta{
    
    private $id;
    private $pergunta;
    private $solucao;
    private $categoria;
    
    
    public function __construct(){
    }
    
    public function setID ($id){
        $this->id = $id;
    }
    
    public function getID(){
        return $this->id;
    }
    
    public function setPergunta($pergunta){
        $this->pergunta = $pergunta;
    }
    
    public function getPergunta(){
        return $this->pergunta;
    }
    
    public function setSolucao($solucao){
        $this->solucao = $solucao;
    }
    
    public function getSolucao(){
        return $this->solucao;
    }
    
    public function setCategoria($id_categoria){
        $this->categoria = $id_categoria;
    }
    
    public function getCategoria(){
        return $this->categoria;
    }
    
    public function imprimirPergunta(){
        echo "<p class='titulo' id='perguntaExibida'>";
        echo $this->getPergunta();
        echo "</p>";
    }
    
}



?>