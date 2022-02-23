<?php


$correo=$_GET["entrada_email"];
//filter_var (Lo que quereis comprobar, El tipo del filtro)
if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo "Correo válido";
  }else{

    echo "Correo NO válido";
  }


?>
