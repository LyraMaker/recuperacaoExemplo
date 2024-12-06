<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Tabela de Alunos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Tabela de Alunos</h2>
    <table>
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>P1</th>
            <th>P2</th>
        </tr>
        <tr>
            <?php if (isset($alunos)): ?>
                <?php foreach ($alunos as $valor): ?>
        <tr>
            <td><?= $valor['matricula'] ?></td>
            <td><?= $valor['nome'] ?></td>
            <td><?= $valor['p1'] ?></td>
            <td><?= $valor['p2'] ?></td>
        </tr>
    <?php endforeach ?>
<?php endif ?>
</body>

</html>