<?php


#ARRAY NORMALES

$numeros = array(8, 3, 7, 1);

$suspensos = array("Migue","Kerry");

$coches= array("Ferrari","Seat","BMW","Opel","Mercedes");


echo $suspensos[0];
echo $numeros[3];
echo $coches[1];



$cuentaCoches= count($coches);


echo "Número de coches".$cuentaCoches."<br>";

$aleatorio=rand(0,4);


echo "Coche aleatorio:".$coches[$aleatorio]."<br>";

$parada=0;

while ($parada < 5) {
    
    $aleatorio=rand(0,4);
    echo $coches[$aleatorio]."<br>";
    $parada++;
    

}
#ARRAY ASOCIATIVOS

$alumno = array("Nombre" => "Migue",
                "Apellidos"=>"Kerry",
                "Edad" =>23,
                "estaAprobado"=>false);

echo"El alumno es: " .$alumno["Nombre"].$alumno["Apellidos"].$alumno["Edad"];

?>