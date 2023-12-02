<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Prueba desde mi maquina</h2>

<?php
var_dump(10.01);
var_dump(
    is_numeric("3E5"),
    is_float(3E5)
);
$valor = "35";
var_dump($valor * 1);

if (10 == '10') {
    echo "<hr>Si, es igual";
}

if (10 === 10) {
    echo "<hr>Si, es exactamente igual";
}

echo "<hr>";

$x = 9876;
var_dump($x,is_numeric($x));
$x = "9876";
var_dump($x,is_numeric($x));
$x = "98.76" + 1000;
var_dump($x,is_numeric($x));

echo "<hr>";

var_dump($x);

echo "<hr>";
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
// Convierta una cadena a entero
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?>    
</body>
</html>

