<?php
if (!function_exists('alert')) {
    function alert($msg) {
        echo "<script>alert('$msg');</script>";
    }
}

if (!function_exists('salvar_log')) {
    function salvar_log($sql, $nome = 'log_sql.txt') {
        $file = fopen($nome, 'w');
        fwrite($file, $sql);
        fclose($file);
    }
}
