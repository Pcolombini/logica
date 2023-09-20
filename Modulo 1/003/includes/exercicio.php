<?php 

$valor = trim(intval(filter_var($_POST['valor'],FILTER_VALIDATE_INT)));

// var_dump($valor);
echo "<br>";

$meses = trim(intval(filter_var($_POST['meses'],FILTER_VALIDATE_INT)));
// var_dump($meses);

function emprestimo($valor,$meses)
{
    $C = $valor;
    $i = 0.04;
    $n = $meses;

    $J = $C * $i * $n;
    

    return number_format($J);

}

$emprestimo = emprestimo($valor,$meses);

echo "Valor dos juros em $meses meses: $emprestimo";

