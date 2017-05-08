<?php
class Categoria{
    private $id;
    private $nome;
    private $descricao;
    
    
    public function __construct(){
    }
    
    public function $setID($id){
        $this->id = $id;
    }
    
    public function $getID(){
        return $this-id;
    }
    
    public function $setNome($nome){
        $this->nome = $nome;
    }
    
    public function $getNome(){
        return $this->nome;
    }
    
    public function $setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
    public function $getDescricao(){
        return $this->descricao;
    }
}



?>