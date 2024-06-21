<?php
//CUADNO UTILIZAMOS GET SE ENVIA LOS DATOS POR LA URL Y ESTO NO ES MUY SEGURO 
//EL SIGUIENTE METODO POST ES EL MAS RECOMENDADO Y SE UTILIZA DE LA MISMA MANERA
$name=$_GET["name"];
$lastname=$_GET["lastname"];
$age=$_GET["age"];

echo "gracias por ver el curso ".$name." ".$lastname."<br>";
echo "Año de naciemitno ".$age."<br>";
echo"Edad : ".(2024-$age)."<br>";
