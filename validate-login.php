<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $conexao = require __DIR__ . '/db_config.php';
    require __DIR__ . '/functions.php';

    $dataRequest = $_POST;

    if (isset($_SESSION['MESSAGE'])){
        unset($_SESSION['MESSAGE']);
    }

    $user = getUserByCpf($dataRequest['cpf'], $conexao);

    if ($user['stsativo'] == null){
        $_SESSION['MESSAGE'] = "Cpf inválido";
        header("Location: login.php");
        exit;
    }
    else{
        $_SESSION['DATA_USER'] = $user;
        header('Location: ' . $user["desquestao"] );
        exit;
    }
}

