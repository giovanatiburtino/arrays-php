<?php

    // Com a função extract podemos criar variáveis rapidamente de arrays associativos
    // O nome da chave será o nome da variável;

    $arr = [
        "cor" => "vermelho",
        "forma" => "retângular",
        "material" => "aço"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Giovana";

    // Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita

    $pessoa = [
        "nome" => "Ana",
        "idade" => 21
    ];

    echo "$nome <br>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";
?>