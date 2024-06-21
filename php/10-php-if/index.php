<?php 
// condicionales 
// el condiciona principal es el if 
/*
estructura es asi :
if(condicion){
    INSTRUCCION
}else{  --> ques seria caso contrario 
    otras instruciones 
}
*/
echo"<h1>"."Condicional if"."</h1>";
$color="red";
if ($color=="red") {
    echo"<h2>"."color es rojo "."</h2>"."<br>";
}else {
    echo"<h2>"."Condicional if"."</h2>"."<br>";
}

echo"<h2>"."ingresa edad y ver si es mayor o menor de edad utilia el metodo post"."</h2>"."<br>";

?>
<!-- esto deberia ir en otra pagina.php pero para que entiendas lo hago en el la misma pagina  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="Post">
        <input type="text" id="age" name="age">
        <input type="submit">
    </form>
</body>
</html>
<?php
$ege=$_POST['age'];
if ($ege <=17) {
    echo"es menor de edad";
    # code...
}else{
    echo"es mayor de edad";
}
?>
<!-- /*
operadoes de comparacion 
$a == $b	Igual	true si $a es igual a $b después de la manipulación de tipos.
$a === $b	Idéntico	true si $a es igual a $b, y son del mismo tipo.
$a != $b	Diferente	true si $a no es igual a $b después de la manipulación de tipos.
$a < $b	Menor que	true si $a es estrictamente menor que $b.
$a > $b	Mayor que	true si $a es estrictamente mayor que $b.
$a <= $b	Menor o igual que	true si $a es menor o igual que $b.
$a >= $b	Mayor o igual que	true si $a es mayor o igual que $b.
para mas operadoeres revisar el manual de php
*/ -->