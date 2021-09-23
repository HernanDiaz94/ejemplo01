<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        include 'conexion.php';
        
        // extract($_POST);
        // var_dump($_POST);
        $nombre =   $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $email =    $_POST['email'];

        /* echo "<br>";
        echo $nombre;
        echo "<br>";
        echo $apellido;
        echo "<br>";
        echo $telefono;
        echo "<br>";
        echo $email; */

        //consulta para insertar
        $insertar = "INSERT INTO agenda(nombre, apellido, telefono, email) 
        VALUES ('$nombre','$apellido','$telefono','$email')";

        $resultado = mysqli_query($conexion, $insertar);
        
    ?>
</body>
</html>