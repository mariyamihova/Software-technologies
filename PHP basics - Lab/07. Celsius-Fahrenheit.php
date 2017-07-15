<?php
function celsiusToFahrenheit(float $celsius):float
{
    return $celsius*1.8+32;
}
function fahrenheitToCelsius(float $fahrenheit): float
{
    return ($fahrenheit-32)/1.8;
}
$messageAfterCelsius="";
if (isset($_GET['cel'])){
    $cel=floatval(($_GET['cel']));
    $fah=celsiusToFahrenheit($cel);
    $messageAfterCelsius="$cel &deg;C=$fah &deg;F";
}
$messageAfterFahrenheit="";
if (isset($_GET['fah'])){
    $fah=floatval(($_GET['fah']));
    $cel=fahrenheitToCelsius($fah);
    $messageAfterFahrenheit="$fah &deg;F= $cel &deg;C";
}
?>
<form>
    Celsius: <input type="number" name="cel"/>
    <input type="submit" value="Convert"/>
    <?=$messageAfterCelsius?>
</form>
<form>
    Fahrenheit: <input type="number" name="fah"/>
    <input type="submit" value="Convert"/>
    <?=$messageAfterFahrenheit?>
</form>