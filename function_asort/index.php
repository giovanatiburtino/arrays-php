<?php 

    // Para ordernar em ordem crescente pelo valor das chaves, podemos usar asort
    
    $arr = [
        "Giovana" => 21,
        "Pedro" => 18,
        "Ana" => 20,
        "Joaquim" => 24
    ];

    asort($arr);

    // Ordem decrescente

    $arr2 = [
        "Giovana" => 21,
        "Pedro" => 18,
        "Ana" => 20,
        "Joaquim" => 24
    ];

    arsort($arr2);

    print_r($arr2);
    echo "<br>";

    // Se quisermos ordenar o array pelas chaves, utilizamos o valor ksort
    
    ksort($arr2);

    print_r($arr2);
    echo "<br>";

    // Ordem decrescente pelas chaves

    krsort($arr2);

    print_r($arr2);
    echo "<br>";
?>