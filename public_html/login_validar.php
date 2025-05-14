<?php
include_once 'inc/funcoes.php';
require_once 'inc/conexao.php';

$retorno = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vLogin = $_POST["pLogin"];
    $vSenha = $_POST["pSenha"];
    
    $sql = "SELECT COUNT(*) AS existe FROM seguranca_tbUsuarios WHERE login = '$vLogin' AND senha = '$vSenha'";
    salvar_log($sql);
    
    $sql_login = $conexao->prepare("SELECT COUNT(*) AS existe FROM seguranca_tbUsuarios WHERE login = ? AND senha = ?");
    $sql_login->bind_param("ss", $vLogin, $vSenha);
    $sql_login->execute();
    $sql_login->bind_result($existe);

    while ($sql_login->fetch()) {
        if ($existe > 0) {
            $retorno = 1;
        } else {
            $retorno = 0;
        }
    }

    $sql_login->close();
    $conexao->close();
    
    echo $retorno;
}
