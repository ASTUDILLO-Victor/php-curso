<?php

//CUANDO EN VIAMOS POR POST SE ENVIA POR SERVIDOR Y MO POR EL URL COMO EL METODO GET 
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$age=$_POST["age"];

echo "gracias por ver el curso ".$name." ".$lastname."<br>";
echo "Año de naciemitno ".$age."<br>";
echo"Edad : ".(2024-$age)."<br>";
