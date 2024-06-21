<?php
/* 
tipos de datos : 
enterero (int/integer) numeros sin decimal
decimales (float/double) numeros con decimales 
cadena de caracteres o string 
boleano = true (1) o flse (0)
null 
array (coleccion de datos )
objetos
*/
//las variables nunca puede tener al incio un 1 o tener -
//solo se acepta_


$numero=100;
$decimal=10.5;// no se usa la coma solo el punto
$texto="soy el texto";
$verdadero=true;
$null=null;
// echo gettype($numero); //saber que tipo de datos es 

//con esa funcion pudeo saber que valor esta dando mi variable o que
//que esta haciedno alguna funcion
$mi_nombre="victor mesias";
// var_dump($mi_nombre);


// puedo pasar una variable a un string con commilas dobles , com commilas simples se muestra como texto todo 
//ejemplo:
$ej="Astudillo campoverde";
echo "Victor Mesias $ej";