<?php

/*
varias condiciones en una 
con operadores logicos 
el primero AND
 */
$edad= 18;
$edad2=64;
$edad_ofi=20;
// verificar si esta en edad de trabjar 
if ($edad_ofi>=$edad and $edad_ofi <= $edad2) {
        echo'esta edad es correta para trabjar';
}else{
    echo "no puede trabajar ";
}


//OR 

$pais="mexico";

if ($pais =="mexico" or $pais =="ecuador" or $pais =="colombia") 
{
    echo "se habla español";
    # code...
}

// !

$x="colombia";

if ($x !="colombia") {
    echo"esta en otro pais que no es colombia";
}else{
    echo"esta en colombia";
}


?>