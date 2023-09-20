<?php 

function custoCarroAoConsumidor()
{
    $custoFabrica = 10.000;
    $pDistribuidor = 0.28;
    $pImposto = 0.45;

    $custoFim = $custoFabrica + ($custoFabrica * $pDistribuidor) + ($custoFabrica * $pImposto);

    return number_format($custoFim,3).",00";
}

echo custoCarroAoConsumidor();
