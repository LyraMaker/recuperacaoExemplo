<?php

class AlunoBanco{
    public $banco;

    public function __construct()
    {
        require __DIR__.'/../Database/Banco.php';
        $this->banco = $banco;
    }

    public function listarAlunos(){
        $pdo = $this->banco;

        $sql = "SELECT * FROM ALUNO";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function listarAluno($id){
        $pdo = $this->banco;

        $sql = "SELECT * FROM ALUNO WHERE matricula = :id";

        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam("id",$id);
        $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
}