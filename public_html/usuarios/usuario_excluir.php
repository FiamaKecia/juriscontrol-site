<?php

include_once '../inc/funcoes.php';
require_once '../inc/conexao.php';

$retorno = "Erro desconhecido.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = intval($_POST["pUsuario_id"]);

    try {
        // Log da exclusão
        salvar_log("DELETE FROM seguranca_tbUsuarios WHERE usuario_id = $usuario_id", 'excluir.sql');

        // Comando preparado
        $sql_delete = $conexao->prepare("DELETE FROM seguranca_tbUsuarios WHERE usuario_id = ?");
        $sql_delete->bind_param("i", $usuario_id);

        if ($sql_delete->execute()) {
            $retorno = "Usuário excluído com sucesso!";
        } else {
            $retorno = "Erro ao excluir: " . $sql_delete->error;
        }

        $sql_delete->close();
        $conexao->close();

    } catch (Exception $e) {
        $retorno = "Erro ao excluir: " . $e->getMessage();
    }
}

echo $retorno;
