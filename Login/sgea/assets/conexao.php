<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ongaumigos";

// Cria uma conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conexao->connect_error);
}
?>