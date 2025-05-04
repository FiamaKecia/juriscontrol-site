<?php
$servername = "juridicodev.mysql.dbaas.com.br";
$username   = "juridicodev";
$password   = "ff988542071Ff@";
$dbname     = "juridicodev";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
