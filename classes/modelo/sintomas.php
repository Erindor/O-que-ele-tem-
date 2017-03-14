<?php

class Sintomas{
    
    private $id;
    private $nome;
    private $especifico; //ID da doença especifica deste sintoma
    private $doencas = array();    //sintomas está em varias doencas
    
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
    
    public function setEspecifico($especifico){
        $this->especifico = $especifico;
    }
    
    public function getEspecifico(){
        return $this->especifico;
    }
    
    //retorna array com as doencas
    public function getDoencas(){
        return $this->doencas;
    }
    
    public function addDoenca($doenca){
        if(!in_array($doenca, $this->sintoma)){
            $this->doencas[] = $doenca;
            $doenca->addSintoma($this);
        }
    }
    
    public function removerDoenca($doenca){
        foreach ($this->doencas as $d) {
            if ($d == $doenca){
                unset($this->doencas[$d->getID]);
                $doenca->removerSintoma($this);
            }
        }
    }
}



?>