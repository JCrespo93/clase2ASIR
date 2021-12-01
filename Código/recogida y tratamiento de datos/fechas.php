<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio fechas
    </title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fechas</h2>

<p>Vamos aprender a tratar fechas en php y funcionalidades</p>
<br>


<?php

echo "Vamos a trabajar con fechas"."<br>";
echo "Hoy es: ".date("l")."<br>";
echo "Dime la fecha actual: ".date("Y/n/j")."<br>";
echo "Dime la fecha actual: ".date("j/n/Y")."<br>";

$hora = date("H");

echo "Ejercicio ejemplo if"."<br>"."<br>"."<br>";

if($hora<"15"){
    echo "Lo siento, sigo en clases."."<br>";
    echo "Hora: ".$hora;

}else{
    echo "Estoy en mi casa"."<br>";


}

echo "<br>"."<br>"."Ejercicio ejemplo if-else"."<br>"."<br>";



$segundos = date("s");

if($segundos<"10"){
    echo "Primeros 10 segundos"."<br>";
    echo "Segundos: ".$segundos;
}elseif($segundos>"50"){
    echo "Ultimos 10 segundos"."<br>";
    echo "Segundos: ".$segundos;
}else{
    echo "Segundos intermedios"."<br>";
    echo "Segundos: ".$segundos;
}

echo "<br>"."<br>"."Ejercicio ejemplo switch"."<br>"."<br>";


$colores ="Naranja";

switch ($colores) {
    case 'Rojo':
        echo "La sangre es de color: ".$colores."<br>";
        break;

    case 'Verde':
        echo "La hierba es de color: ".$colores."<br>";
        break;
    case 'Amarillo':
        echo "El Sol es de color: ".$colores."<br>";
        break;
     case 'Azul':
        echo "El mar es de color: ".$colores."<br>";
        break;
    default:
        echo "El color: ".$colores." no está registrado en la base de datos"."<br>";
        break;
}


#EJERCICIO: Realizar un script que que dependiendo del dia que sea me muestre el horario de asignaturas del dia actual y dependiendo de la hora me diga la asignatura en la que estoy. Si es fin de semana me indique el dia del fin de semana.
?>


<a href="inicio.html">Volver a la página principal</a>
</body>
</html>