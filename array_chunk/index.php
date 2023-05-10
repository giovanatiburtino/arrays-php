<?php

    // Podemos dividir um array grande em diversos arrays de número de elementos iguais

    $arr = range(1, 20);

    print_r(array_chunk($arr, 4))// Passamos o array como argumento e o número de elementos que cada array deve ter

?>  