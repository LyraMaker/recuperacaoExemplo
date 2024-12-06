<?php

class ExibirTodos{
    public function responder(){
        $alunos = (new AlunoBanco())->listarAlunos(); 
        require __DIR__."/../View/home.php";
    }
}