<?php 

function fahrenheit($celsius = 33)
{
    // ( °C × 9/5) + 32 = °F

    $fah = ($celsius * 9 / 5) + 32;
    
    return $fah."° Fahrenheit";

}

echo fahrenheit()."<br>";

function celsuis($fahrem = 90)
{
    // ( °F − 32) × 5/9 = °C


    $cel = ($fahrem - 32) * 5 / 9;
    
    return $cel."° Celsius";

}

echo celsuis(91.4);
