<?php 

function plusTen($numero = 4)
{
    if ($numero > 10) {
        return 'Número maior que 10';
    } elseif ($numero == 10) {
        return 'Número igual a 10';
    } else {
        return 'Número menor que 10';
    }
}

$retorno = plusTen(11);
