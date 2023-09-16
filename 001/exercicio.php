<?php

function changeValue()
{
    $valueA = 999;
    $valueB = 555;
    $temp = "";

    echo "Valor de 'a': $valueA<br>";
    echo "Valor de 'b': $valueB<br>";

    if (empty($temp)) {
        $temp = $valueA;
        $valueA = $valueB;
        $valueB = $temp;
    } else {
        echo $temp;
    }

    return "Valor de 'a': $valueA <br>Valor de 'b':  $valueB";
}

echo changeValue();
