<?php

include_once "../modelo/pergunta.php";

class PerguntaDAO{

public function __construct(){}


    public function recuperarPerguntasCategoria($id_categoria){
        include_once "conexao.php";
        
        $colecao = array();
        $comandoSQL = "SELECT * FROM Pergunta WHERE Categoria_idCategoria =". $id_categoria; 
        
        $resultado = mysqli_query($conn, $comandoSQL);
        
        while ($row = mysqli_fetch_assoc($resultado)){
            
            $p = new Pergunta();
            $p->setID($row['idPergunta']);
            $p->setPergunta($row['pergunta']);
            $p->setSolucao($row['solucao']);
            $p->setCategoria($row['Categoria_idCategoria']);
            
            $colecao[] = $p;
        }
        
        mysqli_close($conn);
        return $colecao;
    }
}

?>