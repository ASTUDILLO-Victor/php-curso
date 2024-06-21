<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h1>FORMULARIO VARIABLE GET</h1>
            <!-- lo que hacemos en enviar los datos a la pagina fromulario php -->
            <form action="formulario.php" method="GET">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nombre</label>
                        <input type="text" name="name" id="name">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Apellido</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Año de nacimiento</label>
                        <input type="text" name="age" id="age">
                    </div>
                </div>
                <br>
            
                <input type="submit">
            </form>
        </div>
    </div>

</body>

</html>