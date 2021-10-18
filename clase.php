<!DOCTYPE html>
<html>
<head>
   
    <title>Ejemplo</title>
</head>
<body>

    <form method="post">

Nombre: <input type="text" name="enombre"><br>
Apellidos: <input type="text" name="eapellidos"><br>
email: <input type="text" name="ecorreo"><br>
<input type="submit">
</form>

<?php
#PASO1: Elegir un metodo, en nuestro ejemplo POST 


#PASO 2: Recoger del formulario los datos
$nombrerecogido=$_POST["enombre"];
$apellidosrecogido=$_POST["eapellidos"];
$correorecogido=$_POST["ecorreo"];

OPTION ONCLICK


#PASO 3: Representar/USAR LA INFORMACIÓN

echo "Su nombre es ".$nombrerecogido." ".$apellidosrecogido." y su correo es :".$correorecogido."<br>";

?>
    
</body>
</html>