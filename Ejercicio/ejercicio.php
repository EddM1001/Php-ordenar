<?php
$a = $_POST['caja1'];
$b = $_POST['caja2'];
$c = $_POST['caja3'];
$d = $_POST['caja4'];
$e = $_POST['caja5'];

$valores = array($a,$b,$c,$d,$e);
$suma = 0;
$numero = 0;
$promedio = 0;
sort($valores);
$cantidad = count($valores);
foreach ($valores as $numero)
{
    $suma += $numero;
}

for($i = 0; $i < $cantidad; $i++)
{
    $m = $i+1;
    echo "<center></center>";
    echo "<center><br> La pisicion $m es $valores[$i] <br> </center>";
}

echo "<center> <h3><br> La suma total es $suma </h3></center>";
$promedio = $suma/$cantidad;
echo "<center> <h3>El promedio obtenido es: $promedio <br> </h3></center>";
?>