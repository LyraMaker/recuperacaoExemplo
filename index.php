<form action="./index.php?acao=exibir-um" method="post">
    <input type="text" name="matricula" placeholder="Digite uma matrícula para buscar">
    <input type="submit" value="Enviar">
</form>
<a href="./index.php?acao=exibir-todos">Listar todos</a>
<?php

require __DIR__ . "/app/Controller/ExibirAluno.php";
require __DIR__ . "/app/Controller/ExibirTodos.php";
require __DIR__ . "/app/Model/AlunoBanco.php";

if (isset($_GET['acao'])) {
    if ($_GET['acao'] == "exibir-um") {
        (new ExibirAluno())->responder();
    }
    if ($_GET['acao'] == "exibir-todos") {
        (new ExibirTodos())->responder();
    }
}
?>

