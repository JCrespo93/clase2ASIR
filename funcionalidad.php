<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

#EJERCICIO 1:

echo "<h3>EJERCICIO 1: Nuevas funcionalidades</h3>"."<br>";

$numero1=25;

$raiz=sqrt($numero1);

echo "Raiz cuadrada: ".$raiz."<br>";

$numero2=2;

$cuadrado=$numero2*$numero2;
$cubo=$numero2*$numero2*$numero2;

echo "Elevado al cuadrado: ".$cuadrado."<br>";
echo "Elevado al cubo: ".$cubo."<br>";

$base=2;
$exp=4;


$resultadoexpon=pow($base,$exp);

echo "El número ".$base." con exponente ".$exp." su resultado es: ".$resultadoexpon."<br>";

#EJERCICIO 2:

echo "<h3>EJERCICIO 2: Fibonacci</h3>"."<br>";

$base1 = 0;
$base2 = 1;
$contador = 0;
$parada=8;

while ($contador <= $parada){
    echo " ".$base1;
    $base3 = $base2 + $base1;
    $base1 = $base2;
    $base2 = $base3;
    $contador = $contador + 1;
}


?>

</body>
</html>