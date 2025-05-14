<?php

if (!function_exists('alert')) {
    function alert($msg) {
        echo "<script>alert('$msg');</script>";
    }
}

if (!function_exists('salvar_log')) {
    function salvar_log($sql, $nome = '1.txt') {
        // Ajusta para o diretório correto (logs dentro do public_html)
        $nome = $_SERVER['DOCUMENT_ROOT'].'/juriscontrol-site/public_html/logs/'.$nome;
        $file = fopen($nome, 'a+');
        fwrite($file, $sql . PHP_EOL);
        fclose($file);
    }
}

