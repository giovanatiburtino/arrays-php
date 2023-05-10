<?php

    // Com a função compact podemos criar um array a partir de variáveis;

    $marca = "BMW";
    $motor = "3.0";
    $tetoSolar = true;
    $portas = 4;

    // Passamos para a função o nome das variáveis em string e então um novo array é criado

    $carro = compact("marca", "motor", "tetoSolar", "portas");

    print_r($carro);
    echo "<br>";

    // Exercicio

    $raca = "Border collie";
    $nome = "Duke";
    $idade = 3;
    $cor = "Branco";

    $cachorro = compact("raca", "nome", "idade", "cor");

    print_r($cachorro);
    echo "<br>";

    foreach($cachorro as $caracteristicas => $value){

        echo "$caracteristicas: $value <br>";
    }
?>