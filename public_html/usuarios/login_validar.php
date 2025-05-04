<?php
session_start();

// Inclui o arquivo de conexão com o banco
require_once("../inc/conexao.php");

// Recebe dados do formulário AJAX
$login = $_POST['login'];
$senhaDigitada = $_POST['senha'];

// Consulta o usuário
$sql = "SELECT * FROM seguranca_tbUsuarios WHERE login = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se encontrou o usuário
if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    // Comparação direta (melhorar com password_verify futuramente)
    if ($usuario['senha'] === $senhaDigitada) {
        $_SESSION['usuario_id'] = $usuario['usuario_id'];
        $_SESSION['nome'] = $usuario['nome'];
        echo "1"; // Login válido
    } else {
        echo "0"; // Senha incorreta
    }
} else {
    echo "0"; // Usuário não encontrado
}

$stmt->close();
$conexao->close();
?>
