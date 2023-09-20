<?php

$numero = trim(intval($_POST['numero']));

function impar($numero)
{
    if ($numero % 2 == 0) {
        return 0;
    } else {
        return 1;
    }
}

$impar = impar($numero);
