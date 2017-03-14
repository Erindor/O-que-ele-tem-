<?php

class Doenca{
    
    private $id;
    private $nome;
    private $sintomas = array(); // uma doenca tem varios sintomas
    
    function __construct(){
    }
    
    public function setID($id){
        $this->id = $id;
    }
    
    public function getID(){
        return $this->id;
    }
    
    public function setTipo($nome){
        $this->nome = $nome;
    }
    
    public function getTipo(){
        return $this->nome;
    }
    
    public function addSintoma($sintoma){
        if(!in_array($sintoma, $this->sintomas)){
            $this->sintomas[] = $sintoma;
            $sintoma->addDoenca($this);
        }
    }
    
    //remova o sintoma do array
    public function removerSintoma($sintoma){
        foreach ($this->sintoma as $s) {
            if ($s == $sintoma){
                unset($this->sintomas[$s->getID]);
                $sintoma->removerDoenca($this);
            }
        }
    }
}



?>