<?php

    // Com a função shuffle podemos reorganizar os itens em ordem aleatória

    $arr = range(1, 20);

    shuffle($arr);

    print_r($arr);
    echo "<br>";

?>