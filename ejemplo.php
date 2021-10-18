<!DOCTYPE html>
<html>
<body>

<form method="POST">
Nombre: <input type="text" name="enombre"><br>
Correo: <input type="text" name="eemail"><br>
<input type="submit">
</form>

<?php

$nombrerecogido= $_POST["enombre"];
$correorecogido= $_POST["eemail"];

echo "Hola ".$nombrerecogido."<br>"; 
echo "Hola ".$correorecogido."<br>"; 



?>
</body>
</html> 