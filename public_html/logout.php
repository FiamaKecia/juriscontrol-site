<?php
session_start();

// Destrói todas as variáveis da sessão
$_SESSION = array();

// Encerra a sessão
session_destroy();

// Redireciona para a tela de login
header("Location: login.php");
exit();

