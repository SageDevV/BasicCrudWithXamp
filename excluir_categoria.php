<?php
$id = $_GET['id'];
echo "id: $id";

$conexao = new PDO('sqlite:dw.db'); //Estabelece conexao
$query = "DELETE FROM categoria WHERE id = $id"; //monta o script
$conexao->exec($query); //executa sql

header('Location: categoria.php'); //redirect para o php
