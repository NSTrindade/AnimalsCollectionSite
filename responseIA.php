<?php
// responseIA.php

// 1. Receber dados
$data = json_decode(file_get_contents("php://input"));

if (!isset($data->text) || empty($data->text)) {
    echo "Erro: Nenhum texto foi enviado.";
    exit;
}

$text = $data->text;


$apiKey = 'chave_api'; 


$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=" . $apiKey;

// 4. Preparar dados
$dataToSend = [
    "contents" => [
        [
            "parts" => [
                ["text" => $text]
            ]
        ]
    ]
];

// 5. Conexão cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataToSend));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo 'Erro no cURL: ' . curl_error($ch);
} else {
    curl_close($ch);

    if ($httpCode === 200) {
        $decodedResponse = json_decode($response, true);
        if (isset($decodedResponse['candidates'][0]['content']['parts'][0]['text'])) {
            echo $decodedResponse['candidates'][0]['content']['parts'][0]['text'];
        } else {
            echo "Resposta recebida, mas sem texto: " . $response;
        }
    } else {
        // Se der erro 404 novamente, mostramos a mensagem
        echo "Erro da API ($httpCode): " . $response;
    }
}
?>
