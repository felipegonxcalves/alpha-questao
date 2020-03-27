<?php
session_start();

function getUserByCpf($cpf, $conn)
{
    $sql = "CALL spselidecandidato(?)";
        $smtp = $conn->prepare($sql);
        $smtp->bindValue(1, $cpf);
        $smtp->execute();
        $user = $smtp->fetch();
    return $user;
}

function validateAuth()
{
    if (!isset($_SESSION['DATA_USER'])){
        header("Location: login.php");exit;
    }
}

function insertQuestion($data, $conn)
{
//        var_dump($data);
    $sql = "CALL spinsresposta2(?, ?, ?)";
    $smtp = $conn->prepare($sql);
    $smtp->bindValue(1, $data['ideentrevistado']);
    $smtp->bindValue(2, $data['nro_questao']);
    $smtp->bindValue(3, $data['desresposta']);
    $smtp->execute();

    return $smtp;
}

function renderQuestion($questao)
{
    header("Location: {$questao}.php");exit;
}