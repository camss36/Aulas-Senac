<?php

function enviarArquivo($error, $size, $name, $tmp_name) {

    if($error)
        die("Falha ao enviar arquivo, selecione uma PDF");

    if($size > 2097152)
    //1 kb = 1024 bytes
    //1 MB= 1.048.576 bytes (para o cálculo funcionar multiplicar este valor com
    //a quantidade de MB que você quer )
        die("Arquivo muito grande!! Max: 2MB"); 

    $pasta = "uploads/";
    $nomeDoArquivo = $name;
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != "pdf" && $extensao != 'docx')
        die("Tipo de arquivo não aceito");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($tmp_name, $path);
    if ($deu_certo) {
        return $path;
    } else
        return false;
}
?>