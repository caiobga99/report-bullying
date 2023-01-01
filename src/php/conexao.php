<?php

$porta = "localhost";
$nomeDoBanco = "database reportbullying";
$usuarioBanco = "root";
$senhaBanco = "root";

$conexao = new PDO("mysql:host=$porta;
dbname=$nomeDoBanco", $usuarioBanco,
$senhaBanco);

$isLogged = true;
?>