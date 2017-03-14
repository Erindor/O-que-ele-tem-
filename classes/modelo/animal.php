<?php

class Animal{
    private $id;
    private $tipo;
    
    function __construct(){
    }
    
    public function setID($id){
        $this->id = $id;
    }
    
    public function getID(){
        return $this->id;
    }
    
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
}


?>