<?php

    $arr = [2, 1, 334, 32, 123, 63, 99, 4];

    sort($arr); // Podemos ordernar um em ordem crescente array através da função sort

    print_r($arr);
    echo "<br>";

    // Para ordernar em forma descrecente podemos utilizar o rsort
    
    $arr2 = [2, 1, 334, 32, 123, 63, 99, 4];

    rsort($arr2);
    echo "<br>";

    $nomes = ["Maria", "Ana", "Aaron", "José", "Matheus"];

    sort($nomes);

    print_r($nomes);
    echo "<br>";

?>  