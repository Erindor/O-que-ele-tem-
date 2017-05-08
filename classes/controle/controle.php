<?php
include "../DAO/perguntasDAO.php";
include "../view/perguntasView.php";

class Controle{
    private $perguntas;
    
    public function recuperarPerguntas($categoria){
        
        $p = new PerguntaDAO();
        
        $categoria_id = null;
        
        switch ($categoria){
        case "olhos":
            $categoria_id = 1;
            break;
        case "respiracao":
            $categoria_id = 2;
            break;
        case "pele":
            $categoria_id = 3;
            break;
        case "estomago":
            $categoria_id = 4;
            break;
        case "ouvido":
            $categoria_id = 5;
            break;
        case "nariz":
            $categoria_id = 6;
            break;
        case "sanitario":
            $categoria_id = 7;
            break;
        }
        $perguntas = $p->recuperarPerguntasCategoria($categoria_id);
        
        return $perguntas;
    }
    
    
    public function getPerguntas (){
        return $this->perguntas;
    }
    
    
    public function proximaPergunta($perguntas){
        
        foreach($perguntas as $p){
            $pergunta_selecionada = $p;
            break;
        }
        return $pergunta_selecionada;
    }
}




?>