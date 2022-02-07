<?php

//Comprobación de si existe el fichero

if (file_exists("../telaa.txt") == true) {
    echo "El fichero existe";
} else {
    echo "No está el fichero";
}


//Crear un fichero

$fichero= fopen("miguelito.txt","a");
if ($fichero == false) {
    echo "Error no se ha creado";
} else {
    echo "Se ha creado correctamente";
}



fclose($fichero);

$miguel=fopen("miguelito.txt","w+");
if ($miguel == false) {
    echo "Error no se ha creado";
} else {
    //Escribimos en el fichero
    fwrite($miguel,"Miguel Romero Pérez\r\n");
    fwrite($miguel,"Manuel Martinez Barranco");
    fflush($miguel);
}
fclose($miguel);

//Leer el fichero
echo "<br>";
echo readfile("miguelito.txt");
echo "<br>";
$peso_archivo = filesize("miguelito.txt");

$miguel=fopen("miguelito.txt","a+");
echo fread($miguel,$peso_archivo);
fclose($miguel);



?>