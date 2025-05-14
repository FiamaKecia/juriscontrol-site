<?php
$servername = "juridicodev.mysql.dbaas.com.br";
$username   = "juridicodev";
$password   = "ff988542071Ff@";
$dbname     = "juridicodev";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Define o charset para evitar problemas com acentuação
$conexao->set_charset("utf8mb4");

// Verifica a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>

