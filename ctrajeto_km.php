<?php
$tempo = $_POST['tempo'];
$vm = $_POST['vm'];

if (is_numeric($tempo) && is_numeric($vm) && $tempo > 0 && $vm > 0) {
    $distancia = $tempo * $vm;
    $quant_litros = $distancia / 13;
} else {
    die ("<div style='color: red; font-family: Arial, Helvetica, sans-serif; text-align: center;
    margin-top: 20px;'>
            <h2>Erro: Insira valores numéricos válidos!</h2>
            <a href='javascript:history.back()' style='color:blue;'>Voltar<a/>        
        </div)");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charaset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da Viagem</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 350px;
            }

            h2 {
                color: #333;
            }

            p {
                font-size: 18px;
                margin: 10px 0;
            }

            .result {
                font-weight: bold;
                color: #28a745;
            }

            .back-button {
                display: inline-block;
                margin-top: 15px;
                padding: 8px 15px;
                background: #007bff;
                color: white;
                text-decoration: none;
                border-radius: 4px;
            }

            .back-button:hover {
                background: #0056b3
            }

        </style>
    </head>

    <body>
        <div class="container">
            <h2>Detalhes da Viagem</h2>
            <p> &#x1F697; <strong>Velocidade média:</strong> <span class="result">
                <?= $vm ?> km/h</span></p>
            <p> &#x23F3; <strong>Tempo gasto:</strong> <span class="result">
                <?= $tempo ?> horas</span></p>
            <p> &#x1F4CF; <strong>Distância percorrida:</strong> <span class="result">
                <?= $distancia ?> km</span></p>
            <p> &#x26FD; <strong>Litros utilizados: </strong> <span class="result">
                <?= number_format($quant_litros, 2) ?> L </span></p>   
            <a href="javascript:history.back()" class="back-button"> &#x25C0; Voltar </a>
        </div>
    </body>  
    </html>
       