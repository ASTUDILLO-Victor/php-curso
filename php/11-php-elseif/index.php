<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        uso del elif
    </h1>
    <form action="index.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <label for="">ingresa numero de dia de la semana</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="n1">
            </div>
        </div>
        <input type="submit" name="" id="" value="enviar">
    </form>
    <?php
$n1=$_POST['n1'];
if ($n1== 1) {
    echo"<h2>es lunes</h2>";
}elseif ($n1== 2) {
    echo"<h2>es martes</h2>";
}elseif ($n1== 3) {
    echo"<h2>es mircules</h2>";
}elseif ($n1==4) {
    echo"<h2>es jueves</h2>";
}elseif ($n1==5) {
    echo"<h2>es viernes</h2>";
}elseif($n1==6){
    echo"<h2>es sabado</h2>";
}else {
    echo"<h2>es dimingo</h2>";
}
?>
</body>

</html>
