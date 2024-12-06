<?php

class ExibirAluno{
    public function responder(){
        $alunos = (new AlunoBanco())->listarAluno($_POST['matricula']); 
        require __DIR__."/../View/home-para-um.php";
    }
}