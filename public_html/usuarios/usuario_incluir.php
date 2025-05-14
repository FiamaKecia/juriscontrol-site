<?php

include_once '../inc/funcoes.php';
require_once '../inc/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nome = $_POST["pNome"];
    $login = $_POST["pLogin"];
    $senha = $_POST["pSenha"];

    try 
    {
        salvar_log("INSERT INTO seguranca_tbUsuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')", 'incluir.sql');
        
        $sql_insert = $conexao->prepare("INSERT INTO seguranca_tbUsuarios (nome, login, senha) VALUES (?, ?, ?)");
        $sql_insert->bind_param("sss", $nome, $login, $senha);

        if ($sql_insert->execute()) 
        {
            $retorno = "Usuário inserido com sucesso!";
        } 
        else 
        {
            $retorno = "Erro: " . $sql_insert->error;
        }

        $sql_insert->close();
        $conexao->close();

    } 
    catch (Exception $e) 
    {
        $retorno = "Erro ao cadastrar: " . $e->getMessage();
    }
}

echo $retorno;
