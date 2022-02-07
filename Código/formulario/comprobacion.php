<?php

if ( ! empty($_POST)) {
    if (isset($_POST["txtNombre"]) && isset($_POST["txtApellidos"])) 
    {
        echo "Por favor, introduzca información. Nombre y apellidos";
        
    }else {
        echo "Nombre: ".$_POST["txtNombre"]."<br>";
        echo "Apellidos: ".$_POST["txtApellidos"]."<br>";
        
    }
} else {
    echo "Por favor, introduzca información. Formulario vacio";
}




?>