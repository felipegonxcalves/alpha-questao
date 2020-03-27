<?php

$conexao = require __DIR__ . "/db_config.php";
require __DIR__ . "/functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // chamo o model e salvo no banco
    // redirectiono para a view
    $dataRequest = $_POST;
    $ide_entrevistado = $_SESSION['DATA_USER']['ideentrevistado'];

    foreach ($dataRequest['check_per_1'] as $resposta){
        $data_insert = [
            'ideentrevistado' => $ide_entrevistado,
            'nro_questao' => $dataRequest['nro_questao'],
            'desresposta' => $resposta

        ];
        insertQuestion($data_insert, $conexao);
    }

    renderQuestion($dataRequest['prox_questao']);
}