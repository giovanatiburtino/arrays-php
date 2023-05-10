<?php

    // Com a função array_slice podemos resgatar uma faixa de elemntos de um array;
    // Passamos 3 parâmetros: o array, índice inicial e quantos elementos resgatar a partir do índice

    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

    $slice1 = array_slice($arr, 1, 3);

    print_r($slice);
    echo "<br>";

    $slice2 = array_slice($arr, 1); // Ao omitir quantos elementos resgatar, ele irá resgatar do índice inicial até o final do array

    print_r($slice);
    echo "<br>";

?>