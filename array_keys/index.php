<?php

    // Com a função array_keys recebemos um array apenas com as chaves de um array;

    $carro = [
        "marca" => "BMW",
        "motor" => "2.4",
        "teto_solar" => true,
        "câmbio" => "Manual",
        "portas" => 4
    ];

    $chaves = array_keys($carro);

    print_r($chaves);
    echo "<br>";

    // Com a função array_values recebemos um array apenas com os valores de um array;

    $valores = array_values($carro);

    print_r($valores);
    echo "<br>";
    
?>