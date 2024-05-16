<?php
include_once ( "Viaje.php");
include_once("PasajerosEspeciales.php");
include_once("PasajerosVip.php");
include_once("Pasajeros.php");


function seleccionarOpcion(){

    do{
        echo "\n\n";
        echo "Menú de opciones:\n";
        echo "1) ingresar pasajero normal\n";
        echo "2) ingresar pasajero especial\n";
        echo "3) ingresar pasajero VIP \n";
        echo "4) ver datos de viaje \n";
        echo "5) Salir\n";
        echo "Ingrese su opción: ";
        $opcion = trim(fgets(STDIN));

        $opcionValida = false;
        if($opcion >= 1 && $opcion <= 5){
            $opcionValida = true; 
        } else{
            echo("Por favor, seleccione una opcion valida (1 al 5)");
        }
    }while($opcionValida = false);
    return $opcion;
}

//PROGRAMA PRINCIPAL

//datos del viaje
echo "ingrese costo de viaje: ";
$costVia=trim(fgets(STDIN));
echo "ingrese la cantidad de asientos: ";
$cantAsi=trim(fgets(STDIN));

//objetos
$objViaje= new viaje([],$costVia,0,$cantAsi);

do{
$opcion = seleccionarOpcion();
switch ($opcion){
    case 1:
        $hay=$objViaje->hayPasajesDisponible();
        if($hay){
        echo "Ingrese el nombre del pasajero: ";
        $n=trim(fgets(STDIN));
        echo "Ingrese el numero de asiento: ";
        $a=trim(fgets(STDIN));
        echo "Ingrese el numero de ticket: ";
        $t=trim(fgets(STDIN));
       $objPasajero=new Pasajeros($n,$a,$t);
       $precioViaje=$objViaje->venderPasaje($objPasajero);
        echo "el precio del pasaje es de: ".$precioViaje ." pesos";
        }else{
            echo "no hay mas asientos en el viaje";
        }

    break;

    case 2:
        $hay=$objViaje->hayPasajesDisponible();
        if($hay){
        echo "Ingrese el nombre del pasajero: ";
        $n=trim(fgets(STDIN));
        echo "Ingrese el numero de asiento: ";
        $a=trim(fgets(STDIN));
        echo "Ingrese el numero de ticket: ";
        $t=trim(fgets(STDIN));

        echo "¿el pasajero necesita silla ed ruedas? (si=1 , no=0): ";
        $silla=trim(fgets(STDIN));
        echo "¿el pasajero necesita asistencia para subir al micro? (si=1 , no=0): ";
        $asis=trim(fgets(STDIN));
        echo "¿el pasajero necesita comida especial? (si=1 , no=0): ";
        $comida=trim(fgets(STDIN));

       $objPasajero=new PasajeroEspecial($n,$a,$t,$silla,$asis,$comida);
       $precioViaje=$objViaje->venderPasaje($objPasajero);
      echo "el precio del pasaje es de: ".$precioViaje ." pesos";
       }else{
        echo "no hay mas asientos en el viaje";}
       
    break;   

    case 3:
        $hay=$objViaje->hayPasajesDisponible();
        if($hay){
        echo "Ingrese el nombre del pasajero: ";
        $n=trim(fgets(STDIN));
        echo "Ingrese el numero de asiento: ";
        $a=trim(fgets(STDIN));
        echo "Ingrese el numero de ticket: ";
        $t=trim(fgets(STDIN));

        echo "Ingrese viajes frecuentes: ";
        $viaFre=trim(fgets(STDIN));
        echo "Ingrese las millas: ";
        $m=trim(fgets(STDIN));

       $objPasajero=new PasajeroVip($n,$a,$t,$viaFre,$m);
       $precioViaje=$objViaje->venderPasaje($objPasajero);
       echo "el precio del pasaje es de: ".$precioViaje ." pesos";
       }else{
        echo "no hay mas asientos en el viaje";
       }
    
    break;  

    
    case 4:
        echo $objViaje;
    break;  

 
}
}while($opcion!= 5);

