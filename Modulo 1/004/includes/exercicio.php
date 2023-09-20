<?php 

function reajuste($salario = 1000)
{
    return $salario * 1.15;
}

$reajuste = reajuste().",00";
echo $reajuste;
