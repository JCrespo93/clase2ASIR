<?php


#Funcionalidades de la calculadora
function suma($num1,$num2){
    $res= $num1 + $num2;
    print "El resultado de la suma es ".$res."<br>";
}

function resta($num1,$num2){
    $res= $num1 - $num2;
    print "El resultado de la resta es ".$res."<br>";
}

function multiplicacion($num1,$num2){
    $res= $num1 * $num2;
    print "El resultado de la multiplicación es ".$res."<br>";
}

function division($num1,$num2){
    $res= $num1 / $num2;
    print "El resultado de la división es ".$res."<br>";
}

function modulo($num1,$num2){
    $res= $num1 % $num2;
    print "El resultado del módulo es ".$res."<br>";
}

function raiz($num1){
    $res=sqrt($num1);
    print "Raiz cuadrada: ".$res."<br>";
}

function cuadrado($num1){
    $res=pow($num1,2);
    print "Elevado al cuadrado: ".$res."<br>";
}

function cubo($num1){
    $res=pow($num1,3);
    print "Elevado al cubo: ".$res."<br>";
}

function exponente($num1,$num2){
    $res=pow($num1,$num2);
    print "El número ".$num1." con exponente ".$num2." su resultado es: ".$res."<br>";
}

function fibonacci($num1){
    $base1 = 0;
    $base2 = 1;
    $contador = 0;

    while ($contador < $num1){
        print " ".$base1;
        $base3 = $base2 + $base1;
        $base1 = $base2;
        $base2 = $base3;
        $contador = $contador + 1;
    }

}


?>