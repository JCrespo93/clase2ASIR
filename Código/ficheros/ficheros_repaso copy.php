<?php

//GENERACION DE TICKETS

for ($i=0; $i < 3 ; $i++) {
    $nombreFichero="Incidencia ";
    $ext=".txt";
    $res=$nombreFichero.$i.$ext;

    

    $fichero= fopen($res,"a");
    if ($fichero == false) {
    echo "Error no se ha creado";
    } else {
    echo "Se ha creado correctamente";
    fclose($fichero);
}
}


    





//Crear un fichero



?>