<?php

    // a função array_reduce tem como objetivo reduzir um array a apenas um valor;
    // Podemos passar uma segunda função parâmetro, para algum processo ser executado;

    $arr = [1, 2, 4, 19, 234, 12, 34, 5, 12]; // a = 1 b = 2, a = 3 b = 19 e assim por diante

    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma"); // Podemos passar uma segunda função como parâmetro, para algum processo ser executado

    echo "$resultado <br>";

    function subtracao($a, $b){
        return $a - $b;
    }

    $resultadoSub = array_reduce($arr, "subtracao");

    echo "$resultadoSub <br>";

    
?>