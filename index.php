<?php

    $arr = [];

    print_r($arr);
    echo "<br>";

    $arr[0] = 10;

    print_r($arr);
    echo "<br>";

    $arr[1] = 15;

    print_r($arr);
    echo "<br>";

    $arr[5] = 25;

    print_r($arr);
    echo "<br>";

    // Modificar valores

    $arr[1] += 55;

    print_r($arr);
    echo "<br>";

    // Criando array associativo

    $arrAssociativo = [];

    $arrAssociativo["carro"] = "BMW";

    print_r($arrAssociativo);
    echo "<br>";

    $arrAssociativo["aviao"] = "Boeing";

    print_r($arrAssociativo);
    echo "<br>";

    // Podemos adicionar valor ao fim de um array utilizando a atribuição sem determinar um índice
  
    $adicionandoValorAoFim = [1, 2, 3];

    $adicionandoValorAoFim[] = 4;

    print_r($adicionandoValorAoFim);
    echo "<br>";

    // Podemos utilizar a função range para criar um array de forma rápida

    $arrRange1 = range(1, 10);

    print_r($arrRange1);
    echo "<br>";

    $arrRange2 = range(1, 1000, 100);

    print_r($arrRange2);
    echo "<br>";

    // Acessando o Array multidimensional

    $arr = [
        [1, 2, 3],
        [2, 4, 6]
    ];

    echo $arr[0][1] . "<br>"; // acessando primeiro array e segundo elemento

    echo count($arr); // quantidade de arrays dentro do array
    echo count($arr[0]); // quantidade de elementos do primeiro array
?>