<?php
require_once("../inc/conexao.php");
require_once("../inc/funcoes.php");

$nome  = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO seguranca_tbUsuarios (nome, login, senha) VALUES (?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("sss", $nome, $login, $senha);

if ($stmt->execute()) {
    salvar_log($sql, "usuarios_insert.txt"); // salva o log da query (opcional)
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
