<?php
session_start();

$servername = "localhost";
$database = "tfg";
$username = "usuario-tfg";
$password = "1234";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


if (isset($_POST['email'])&& isset($_POST['contrasena']) ) {

    $email = $_POST['email'];
    $contra = $_POST['contrasena'];

// Obtener la contraseña encriptada desde la base de datos
    $sql = "SELECT contrasena FROM usuario WHERE email = '$email'";

// Ejecutar la consulta y obtener el resultado
    $result = $conn->query($sql);

// Verificar si se encontró un registro
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $Password = $row["contrasena"];

// Verificar la contraseña ingresada con la contraseña almacenada
        if (password_verify($contra, $Password)) {
            // La contraseña es correcta
            // echo "usuario conectado";
            $_SESSION['email'] = $email;
            // $_SESSION['contrasena']=$contra;
            header("Location: descubre.php");

        } else {
            // La contraseña es incorrecta
            echo "Contraseña incorrecta";
            header("Location: iniciar.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <meta name="robots" content="index, follow">
    <title>Página de inicio de sesión al perfil</title> 
    <link rel="stylesheet" href="css/inicio.css">
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
             <div>
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
            </div>
        </div>
    </header>
    <main>
        <!-- formulario login -->
        <form method="POST" id="inicio"  onsubmit="return validarInicio();">
            <div class="caja">
            <i class="fa-solid fa-users"></i>
            <h2>Acceso a tu perfil</h2>
            </div>
            <div class="input-texto">
                <input type="" id="email" placeholder="Introduzca el email" name="email">
            </div>
            <div class="input-texto1">
                <input type="password" class="pwd" id="contrasena" placeholder="Introduzca la contraseña" name="contrasena">
                <i class="fa-regular fa-eye" id="toggle" onclick=""></i>
            </div>  
            <div class="boton-entrar">
            <button class="bt" type="submit" name="entrar">Entrar</button>
            </div>
            <div class="ter">
                <div><i class="fa-solid fa-user"></i><a href="registro.php">¿No tienes cuenta? Registrate</a></div>
            </div>
        </form>

    </main>
    <!-- enlaces script -->
    <script src="js/iniciar.js"></script>
    <script src="https://kit.fontawesome.com/e33a6500e1.js" crossorigin="anonymous"></script>
</body>

</html>
