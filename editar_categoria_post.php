<?php
    $id = $_GET['id'];
    $nome = $_POST['nome'];

    $conexao = new PDO('sqlite:dw.db');
    $query = "UPDATE categoria SET nome = '$nome' WHERE id = $id";
    $conexao->exec($query);
    header('Location: categoria.php');