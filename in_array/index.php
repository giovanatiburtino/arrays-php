<?php

    // A função in_array verifica se um item passando por parâmetro está no array
    
    $arr = ["banana", "maçã", "uva", "batata", "mamão"];

    if(in_array("batata", $arr)){
        echo "Há o item batata no array";
    } else {
        echo "Não há o item batata no array";
    }
    
    // O retorno é true se encontrar o item e falso se não encontrar

?>