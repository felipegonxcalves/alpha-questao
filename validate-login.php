<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $conexao = require __DIR__ . '/db_config.php';
    require __DIR__ . '/functions.php';

    $dataRequest = $_POST;


    $user = getUserByCpf($dataRequest['cpf'], $conexao);

    if ($user['stsativo'] == null){
        header("Location: login.php");
        exit;
    }
    else{
        $_SESSION['DATA_USER'] = $user;
        header("Location: questao01.php");
        exit;
    }
}

