<?php

$datosrecogidos=$_GET["texto1"];


<input type="radio" name="Seleccion" id="" value="1">

echo readfile("pruebafichero.txt");
echo "<br>";

echo filesize("pruebafichero.txt");
echo "<br>";
echo "<br>";

//APERTURA Y LECTURA DE UN FICHERO

//ABRO EL FICHERO EN UNA DIR DE MEMORIA
$fichero = fopen("pruebafichero.txt","r") or die ("Fallo al abrir el fichero");
//OBTENGO EL TAMAÑO DEL FICHERO
$pesofichero=filesize("pruebafichero.txt");

/*REPRESENTO POR PANTALLA EL CONTENIDO, 
le doy el recurso $fichero y su peso $pesofichero
*/
echo fread($fichero,$pesofichero);
/* Una vez he terminado de representarlo cierro el recurso */
fclose($fichero);

//Escribir

$fichero = fopen("pruebafichero.txt","w") or die ("Fallo al abrir el fichero");

$nuevotexto="Que te gustan las VARIABLES";
$nuevotexto2=$datosrecogidos;
fwrite($fichero,$nuevotexto);

fclose($fichero);

echo "La informacionasds asasdada"














?>
