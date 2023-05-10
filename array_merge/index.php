<?php

    // Podemos unir arrays, a ação também é conhecida como merge

    $arr1 = [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.1, 44.5, 43.3];
    $arr4 = ["teste", "string"];

    $arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [0,1]); // Aceita como argumento um número indeterminado de arrays

    print_r($arrMerge);
    echo "<br>";

?>