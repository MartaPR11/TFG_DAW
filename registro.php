<?php

$servername = "localhost";
$database = "tfg";
$username = "usuario-tfg";
$password = "1234";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_errno != null) {
    echo "Error número $conn->connect_errno conectando a la base de datos.<br>Mensaje: $conn->connect_error.";
    exit();
}

// Verificar si se ha enviado el formulario de registro
if (isset($_POST['email'])&& isset($_POST['contrasena']) && isset($_POST['nombre_usuario'])){
    // Recopilar los datos del formulario de registro
    $email = $_POST['email'];
    $contra = $_POST['contrasena'];
    $nombre_usuario = $_POST['nombre_usuario'];

    // Encriptar la contraseña
    $contrasenaEncriptada = password_hash($contra, PASSWORD_DEFAULT);

    // Insertar el usuario en la base de datos
    $registrar = "INSERT INTO usuario (email,contrasena,nombre_usuario) VALUES ('$email', '$contrasenaEncriptada','$nombre_usuario')";

    // Verificar si el registro fue exitoso
    // Ejecutar la consulta
    if ($conn->query($registrar)) {
       //header("Location: registro.php");
        echo "Usuario registrado correctamente";
        header("Location: iniciar.php");
        // exit;
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
        header("Location: registro.php");
    }
}
?>

<!-- Aquí va el formulario de registro HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <meta name="robots" content="index, follow">
    <title>Página de registro al perfil</title>
    <link rel="stylesheet" href="css/registrate.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>

<body>
<header>
    <!-- logo e icono -->
    <div class="logo">
        <a href="index.php"><img class="imgLogo" src="img/Vector.svg" alt="logo"></a>
        <h1>KARMA</h1>
    </div>
    <!-- iconos -->
    <div class="iconos">
        <div class="volver"><a href="iniciar.php"><i class="fa-solid fa-left-long"></i></a></div>
        <div>
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
        </div>
    </div>
</header>
<main>
    <!-- formulario registro -->
    <form method="POST" id="registro" onsubmit="return validarRegistro();" >
        <div class="caja"><!-- titulo registrate -->
            <i class="fa-solid fa-users"></i>
            <h2>Registrate</h2>
        </div>
        <div><!-- nombre del usuario -->
            <input type="text" id="nombre_usuario" placeholder="Nombre" name="nombre_usuario" >
        </div>
        <div><!-- email -->
            <input type="" id="email" placeholder="Email" name="email">
        </div>
        <div><!-- contraseña -->

            <input type="password" id="contrasena" placeholder="Contraseña" name="contrasena">
            <i class="fa-regular fa-eye" id="toggle" onclick=""></i>
        </div>
        <div class="boton-entrar"><!-- boton entrar a iniciar-->
            <button class="bt" type="submit">Registrar</button>
        </div>
    </form>

</main>
<footer></footer>
<!-- enlaces script -->
<script src="js/registro.js"></script>
<script src="https://kit.fontawesome.com/e33a6500e1.js" crossorigin="anonymous"></script>
</body>

</html>