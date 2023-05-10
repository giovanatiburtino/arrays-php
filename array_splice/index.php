<?php
    // Podemos remover elementos de um array com a função splice;
    // Passamos como parâmetro o array, índice inicial e quantos elementos remover

    $arr = [1, 2, 3, 4, 5, 6];

    $removidos = array_splice($arr, 1, 2); // a partir do índice 1, remover 2 elementos

    print_r($arr);
    echo "<br>";

    print_r($removidos);
    echo "<br>";

    $arr2 = [1, 2, 3, 4, 5, 6];

    $removidos2 = array_splice($arr2, 3); // ao não especificar indice final, removerá todos a partir do índice 3

    print_r($arr2);
    echo "<br>";

    print_r($removidos2);
    echo "<br>";

    $arr3 = [1, 2, 3, 4, 5, 6];

    $removidos3 = array_splice($arr3, 1, -1); // remover até o penultimo item

    print_r($removidos3);
    echo "<br>";
?>