<?php


//Bucles anidados de forma independiente
print "<br><b>BUCLE INDEPENDENTES</b>"."<br>";
for ($inicio=1; $inicio < 5 ; $inicio++) { //Bucle exterior

    print "<b>Vamos por la iteracción (bucle exterior): ".$inicio."</b><br>";

    for ($inicio2=0; $inicio2 < 5 ; $inicio2++) {  //Bucle interior

        
        print "Vamos por la iteracción inicio2 (bucle interior): ".$inicio2."<br>";
    }
}

//Bucles anidados de forma dependiente

print "<br><b>BUCLE DEPENDIENTE</b>"."<br>";
for ($varexterior=0; $varexterior < 5 ; $varexterior++) { 
    
    print "<b>Muestro variable exterior: ".$varexterior."</b><br>";

    for ($varinterior=0; $varinterior < $varexterior ; $varinterior++) { 

        print "Muestro variable interior: ".$varinterior."<br>";

    }
}



#ARRAYS

print "<br><h3>ARRAY 'ESTÁNDAR'</h3>"."<br>";


#Forma 1:

$numerosP = array(2,4,6,8,10);

print_r($numerosP);
echo "<br>";
print "Muestro lo que hay en la posición 0: ".$numerosP[0]."<br>";

$cuentaNumerosP=count($numerosP);
print "Valor de Cuenta Array: ".$cuentaNumerosP."<br><br>";


for ($i=0; $i < $cuentaNumerosP; $i++) { 
    print "Muestro lo que hay en la posición ".$i." : ".$numerosP[$i]."<br>";
}
echo "<br>";
#Forma 2:

$numerosI = [1,3,5,7,9];

print_r($numerosI);
echo "<br>";


#ARRAYS ASOCIATIVOS

print "<br><h3>ARRAY ASOCIATIVOS</h3>"."<br>";

$potencias2=[ 1=>2 , 2=>4 ,3 =>8];
$capitales= array("Andalucia"=> "Sevilla", 
"Madrid" => "Madrid",
 "Aragón"=>"Zaragoza",
  "Baleares" =>"Palma de Mallorca");

print_r($potencias2);
echo "<br>";
print_r($capitales);
echo "<br>";

//Añadir elementos a un array

$capitales["Cataluña"]="Barcelona";

print_r($capitales);
echo "<br>";

$capitales["Andalucia"]="Almeria";

print_r($capitales);
echo "<br>";

$cuentaLetras=strlen($capitales["Andalucia"]);
echo $cuentaLetras;

$notasAsignaturasMigue=["LMI"=>0,
"FOL"=>10,
"PAR"=>9,
"ISO"=>0,
"FH"=>0,
"BD"=>4];

print_r($notasAsignaturasMigue);

//Unión de Arrays

echo "<br>";

$coches1= array("Seat","Renault","Dacia");
$coches2= ["BMW","Audi"];

print_r($coches1);
echo "<br>";
print_r($coches2);
echo "<br> Unión de arrays <br>";

$union1con2=$coches1+$coches2;
print_r($union1con2);
echo "<br>";

$union2con1=$coches2+$coches1;
print_r($union2con1);
echo "<br>";


//Borrar elemento

$coches3= array("Seat","Renault","Dacia","BMW","Audi");
print_r($coches3);
echo "<br>";
unset($coches3[5]);


print_r($coches3);
echo "<br>";
$cuentaCoches=count($coches3);
echo $cuentaCoches;

print $coches3[]="Ferrari";
print_r($coches3);
echo "<br>";

//Copiar matrices

$copiaCapitales = $capitales;
$copiaCapitales["Andalucia"]="Córdoba";
print_r($copiaCapitales);
echo "<br>";

$colores1=["Verde","Azul","Amarillo","Rojo"];
$colores2=["Verde","Azul","Amarillo","Rojo","Blanco"];
echo "<br>";

$resultadoDiferencia= array_diff($colores2,$colores1);
$resultadoUnion=array_merge($colores2,$colores1);
$resultadoInterseccion=array_intersect($colores2,$colores1);

array_push($colores2,"Púrpura","Marrón","Celeste");
sort($colores2);
print_r($resultadoDiferencia);
echo "<br>";
print_r($resultadoUnion);
echo "<br>";
print_r($resultadoInterseccion);
echo "<br>";
print_r($colores2);
echo "<br>";
print_r($colores2);


?>