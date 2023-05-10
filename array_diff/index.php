<?php

    // Podemos verificar qual a diferença entre dois ou mais arrays através do array_diff

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];

    $diff = array_diff($arr1, $arr2); // Podemos passar uma quantidade indeterminada de argumentos

    print_r($diff);
    echo "<br>";

    $diff2 = array_diff($arr2, $arr1); // Verifica-se o primeiro argumento em relação ao segundo

    print_r($diff2);
    echo "<br>";
?>