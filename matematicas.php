<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
</head>
<body>

<?php

echo "Ejemplo de bucle while"."<br>";

$numero=0;

while ($numero <= 10) {
    # Paso 1: Mostrar mi número
    echo "Mi número es: ".$numero."<br>";
    #Paso 2: Actualizar la variable número
    #$numero++;  = #$numero=$numero+1;
    $numero++;
  
}

echo "Ejemplo de bucle while"."<br>";

$numero1=0;
$aleatorio = rand(0,100);

while ($numero1 <= $aleatorio) {
    # Paso 1: Mostrar mi número
    echo "Mi número aleatorio es: ".$aleatorio."<br>";
    echo "Mi número es: ".$numero1."<br>";
    #Paso 2: Actualizar la variable número
    #$numero++;  = #$numero=$numero+1;
    #$numero1=$numero1+5;
    #$numero++
    $numero1++;
  
}

echo "Mi cuenta ha terminado. "."<br>";


echo "<br>"."Ejemplo for "."<br>";

for ($cuenta=0; $cuenta < 10; $cuenta++) { 
    # Acción
    print "Imprime la cuenta: ".$cuenta."<br>";
}


$nombre="Jose Angel";
function persona($nombre,$edad){

    echo "Su nombre es : ".$nombre;

    if ($edad%2==0) {

        echo " y su edad es par";

        # code...
    } else{

        echo "y su edad es impar";
    }
}

persona("Miguel",25);
persona("Manuel",23);
persona("Adán",22);
persona("Manule",257);

echo"<br>"."<br>"."<br>";

$alumnos = array("Nacho","Gonzalo","Javi","Adán","Manuel","Iván");

echo count($alumnos)."<br>";

$selectAleatorio = rand(0,5);

echo "El alumno es: ".$alumnos[$selectAleatorio]."<br>";


$numero2="Buenas tardes";

function esNumero($numero){

if (is_int($numero)) {
    echo "Es numero";
} else {
    echo "No es numero";
}
esNumero(3);
?>
</body>
</html>