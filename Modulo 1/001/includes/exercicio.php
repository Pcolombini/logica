<?php

$a = trim(intval(filter_var($_GET['numeroUm'], FILTER_SANITIZE_NUMBER_INT)));
$b = trim(intval(filter_var($_GET['numeroDois'], FILTER_SANITIZE_NUMBER_INT)));
// $vezes = trim(intval(filter_input($_GET['multiplicacao'],FILTER_SANITIZE_NUMBER_INT)));
// $dividir = trim(intval(filter_input($_GET['divisao'],FILTER_SANITIZE_NUMBER_INT)));

function somar($a, $b)
{
    return $a + $b;
}
function subtrair($a, $b)
{
    return $a - $b;
}
function multiplcar($a, $b)
{
    return $a * $b;
}
function divisao($a, $b)
{
    if ($a == 0 and $b == 0) {
        try {
            throw new Exception("");
        } catch (Exception $e) {
            $e->getMessage();
        }
    } else {
        $c = ($a/$b);
    }

    return number_format($c, 1);
}



$somar = somar($a, $b);
$diminuir = subtrair($a, $b);
$vezes = multiplcar($a, $b);
$dividir = divisao($a, $b);
