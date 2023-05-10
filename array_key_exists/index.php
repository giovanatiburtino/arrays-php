<?php

    // Com a função array_key_exists podemos verificar se há um valor em um respectiva key de um array
    $arr = [
        "nome" => "Giovana",
        "idade" => 21
    ];

    // Podemos fazer essa checagem em um if

    if(array_key_exists("nome", $arr)){
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe! <br>";
    }

    // Outra função que podemos utilizar para este fim é o isset

    if(isset($arr["nome"])){
        echo "A chave existe! <br>";
    } else {
        echo "A chave não existe! <br>";
    }
    
?>
