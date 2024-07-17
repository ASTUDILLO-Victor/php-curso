<?php

/*
switch es como el if solo que mas limpio 
*/
$dia=9;
switch($dia){
    case 1:
        echo"lunes\n";
        case "lunes":
            echo"bonito lunes \n";
            break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miercoles";
        break;
    case 4:
        echo "jueves";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sabado";
        break;
    case 7:
        echo "domingo";
        break;
    default:
        echo "no es un dia de la semana ";
}



?>