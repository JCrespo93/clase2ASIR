<?php


echo GRAVEDAD;
echo "Laa vida sigue";




/* 
#CONSTANTES

$pi=pi();

echo "Numero Pi: " .$pi."<br>";

define("GRAVEDAD",9.8);

echo "Constante de la Gravedad: ".GRAVEDAD;

echo "<br>";

#ARRAYS Y TRATAMIENTO
$numeros= array(2,4,8,7,10,GRAVEDAD);
print_r($numeros);


$cantidad_numeros=count($numeros);
//shuffle($numeros);
echo "<br>";
//echo "cuenta: " .$cantidad_numeros."<br>";
print_r($numeros);
echo "<br>";

for ($i=0; $i <$cantidad_numeros ; $i++) { 
    echo "VALOR DE LA POSICIÓN ".$i.": ".$numeros[$i]."<br>";
}
echo "<br> For each <br>";
foreach ($numeros as $numerito) {
    echo $numerito."<br/>";
    
}

$provincias =array(
"Andalucia"=>"Sevilla",
"Madrid"=>"Madrid",
"Aragon"=>"Zaragoza",
"Pais Vasco"=>"Bilbao"
);

print_r($provincias);
echo "<br/>";

foreach ($provincias as $provincita => $capitalita) {

    echo "La comunidad autonoma ".$provincita ." su capital es ".$capitalita."<br/>";
}


//AÑADIR VALORES EN ARRAYS NORMALES (SE AÑADE AL FINAL)

$numeros[]=3;

//MODDIFICAR UN VALOR DEL ARRAY

$numeros[5]=3;

echo "<br>";
foreach ($numeros as $numerito) {
    echo $numerito."<br/>";
    
}

//ELIMINAR UN VALOR DE UN ARRAY

unset($numeros[6]);

echo "<br>";
foreach ($numeros as $numerito) {
    echo $numerito."<br/>";
    
}

#ARRAY MULTIMENSIONALES

$ásir= array(
    array("Nombre"=>"Naaacho","Frase"=>"Gusano Morris"),
    array("Nombre"=>"Manule","Frase"=>"Ere tela de grasioso Capi"),
    array("Nombre"=>"Kerry","Frase"=>"au au au"),
    array("Nombre"=>"Migue","Frase"=>"Ke ezoh, chi chi")
); 

print_r($ásir);
echo "<br>";
foreach ($ásir as $alumno) {
    echo "Frase tipica de ".$alumno["Nombre"].": ".$alumno["Frase"]."<br>";

}


//FUNCIONES

$numero1=10;
$numero2=4;

function suma($numero1, $numero2){
    $res=$numero1+$numero2;
    echo $res;

}


suma($numero1,$numero2);


//FUNCIONES CON RETORNO

$numero1=10;
$numero2=4;

function sumar($numero1, $numero2){
    $res=$numero1+$numero2;
    return $res;

}


$sumado=sumar($numero1,$numero2);
echo $sumado;

echo "<br>";

echo GRAVEDAD;

$redon=round(GRAVEDAD);

echo $redon;


/*
$manule="Cafelaso de arvellana";

$migue=0;

$pako=true;


$dato1=$_POST["datito1"];
$dato2=$_GET["datito2"];


#CONDICIONALES
 
if (condition) {
    # code...
} else {
    # code...
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

#BUCLES

while ($a <= 10) {
    # code...
}

for ($i=0; $i < ; $i++) { 
    # code...
}

*/

?>