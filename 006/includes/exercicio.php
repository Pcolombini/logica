<?php 

$meses = trim(intval(filter_var($_GET['numero'],FILTER_SANITIZE_NUMBER_INT)));

function nMeses($meses)
{
    return $meses * 30;
}

$totalDias = nMeses($meses);
