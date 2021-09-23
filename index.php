<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejemplo01</title>
</head>
<body>
    <h1>Titulo</h1>
    <h2>Formulario</h2>

    <form action="form.php" method="post">
        <label for="nombre">Ingrese Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <label for="apellido">Ingrese Apellido:</label><br>
        <input type="text" name="apellido"><br>
        <label for="telefono">Ingrese Telefono:</label><br>
        <input type="number" name="telefono"><br>
        <label for="email">Ingrese Email:</label><br>
        <input type="email" name="email"><br>
        <input type="submit" value="Enviar Datos">
    </form>
</body>
</html>