<?php 
include 'funciones.php';

#Recogida de datos

$num1=$_POST["operando1"];
$num2=$_POST["operando2"];
$selector=$_POST["operador"];



switch ($selector) {
    case 'suma':
        suma($num1,$num2);
         break;
        
    case 'resta':
        resta($num1,$num2);
         break;
    
    case 'multiplicion':
        multiplicacion($num1,$num2);
         break;
    
    case 'division':
        division($num1,$num2);
        break;
    
        case 'modulo':
            modulo($num1,$num2);
            break;
      
        case 'expo':
            exponente($num1,$num2);
            break;

        case 'raiz':
            raiz($num1);
            break;
        
        case 'cuadrado':
            cuadrado($num1);
            break;
        
        case 'cubo':
            cubo($num1);
            break;
        
        case 'fibo':
            fibonacci($num1);
            break;

        default:
            # code...
            break;
}
 
?>