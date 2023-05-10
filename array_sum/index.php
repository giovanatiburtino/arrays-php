<?php

    // Para somar os itens de um array utilizamos array_sum, ela retorna a soma de todos os elementos númericos do array 


    $arr = [2, 4, 34, 324, 12, 32, 9, "teste"];

    $soma = array_sum($arr); // a função ignora todas as strings do array

    print_r($arr);
    echo "<br>";
    echo $soma;
?>