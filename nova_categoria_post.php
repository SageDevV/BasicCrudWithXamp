<?php 
$nome = $_POST ['nome'];
echo $nome;

$conexao = new PDO('sqlite:dw.db'); //Estabelece conexao
$query = "INSERT INTO categoria (nome) VALUES ('$nome')"; //monta o script
$conexao->exec($query); //executa query

header('Location: categoria.php'); //redirect para o php

?>