<?php

    $pessoa = ["Giovana", 21, "Programadora", "Castanho"];

    print_r($pessoa);
    echo "<br>";

    // Criar varias variáveis a partir da descontrução de um array
    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDosOlhos <br>";

?>