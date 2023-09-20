<?php 

function positivo($numero)
{
    $positivo = "Número positivo!";
    $negativo = "Número negativo!";

    if ($numero < 0) {
        return $negativo;
    } else {
        return $positivo;
    }
}

$retorno = positivo(-4);
