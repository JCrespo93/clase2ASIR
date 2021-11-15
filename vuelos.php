<?php 
//Recogida de datos
//Comprobamos si la variable infovuelo1 e infovuelo2 es creada si es que el formulario es enviado
if(isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])){
    
    $opcion=$_POST["herramienta"];
    
    $infov1=$_POST["infovuelo1"];
        $codigov1=$infov1["codigo1"];
        $ciudadorigenv1=$infov1["ciudadorigen1"];
        $ciudaddestinov1=$infov1["ciudaddestino1"];
        $preciov1=$infov1["precio1"];
        $fechav1=$infov1["fecha1"];

    $infov2=$_POST["infovuelo2"];
        $codigov2=$infov2["codigo2"];
        $ciudadorigenv2=$infov2["ciudadorigen2"];
        $ciudaddestinov2=$infov2["ciudaddestino2"];
        $preciov2=$infov2["precio2"];
        $fechav2=$infov2["fecha2"];
    
    echo "<b>Vuelo 1: </b>";
    print_r($infov1);
    echo "<br>";
    echo "<b>Vuelo 2: </b>";
    print_r($infov2);
    echo "<br>";

    
    

    function unirVuelos($infov1,$infov2){

        $resUnir=array_merge($infov1,$infov2);
        echo "<b>Vuelos unidos: </b><br>";
        print_r($resUnir);
    }

    function diffVuelos($infov1,$infov2){

        $resDiff=array_diff($infov1,$infov2);
        echo "<b>Diferencia entre vuelos: </b><br>";
        print_r($resDiff);     
    }

    function ordenaVuelos($infov1,$infov2){

        $resOrdena=array_merge($infov1,$infov2);
        echo "<b>Datos de los vuelos ordenado: </b>";
        sort($resOrdena);
        
        
    }
    
    function intersecVuelos($infov1,$infov2){

        $resIntersec=array_intersect($infov1,$infov2);
        echo "<b>Datos en común: </b>";
        print_r($resIntersec);
        
    }

    switch ($opcion) {
        case 'union':
            unirVuelos($infov1,$infov2);
            break;

        case 'diff':
            diffVuelos($infov1,$infov2);
            break;

        case 'sort':
            ordenaVuelos($infov1);
            break;
    
        case 'intersec':
            intersecVuelos($infov1,$infov2);
             break; 

        default:
            
            break;
    }

}
?>