<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Información del establecimiento</title>
</head>
<body>
<header>
    <!-- logo -->
    <div class="logo">
        <img class="imgLogo" src="/karma/img/Vector.svg" alt="logo">
        <h1>KARMA</h1>
    </div>
    <nav>
        <div class="ini"><a href="index.php">Inicio</a></div><!--te lleva al index.php -->
        <div>
            <a href="descubre.php"><p class="descubre" >Descubre</p></a><!-- abre descubre -->
        </div>
    </nav>
</header>
<main>
    <div class="mostrar-info">
<?php

// Obtener el ID desde la URL
$id = $_GET['id'];

$servername = "localhost";
$database = "tfg";
$username = "usuario-tfg";
$password = "1234";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Verificar si hay algún error en la conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Consultar la información del elemento según el ID en la tabla (reemplaza los nombres de tabla y columna)
$sql = "SELECT * FROM establecimientos WHERE id_esta = $id";
$resultado = $conn->query($sql);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Mostrar la información en la página
    while ($fila = $resultado->fetch_assoc()) {
        echo "<strong>Nombre:</strong> " . $fila["nombre_lugar"] . "<br>";
        echo "<strong>Precio:</strong> " . $fila["precio"] . "€ <br>";
        echo "<strong>Categoria:</strong> " . $fila["categoria"] . "<br>";
        echo "<strong>Horario:</strong> " . $fila["horario"] . "<br>";
        echo "<strong>Dirección:</strong> " . $fila["direccion"] . "<br>";
        echo "<strong>Teléfono:</strong> " . $fila["telefono"] . "<br>";
        echo "<strong>Valoración:</strong> " . $fila["valoracion"] . "<br>";
        echo "<strong>Terraza:</strong> " . $fila["terraza"] . "<br>";
        echo "<strong>Descripción:</strong> " . $fila["descripcion"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontró información para el elemento ID: $id";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
    </div>
</main>
<footer> <!-- abro footer -->
    <div class="contenedor">
        <!-- logo footer -->
        <div class="fila1">
            <div class="logo">
                <img class="imgLogo" src="img/Vector.svg" alt="logo">
                <h1>KARMA</h1>
            </div>
            <div class="terminos"> <!-- terminos y condiciones -->
                <p>Términos y condiciones</p>
            </div>
        </div>
        <div class="descubre-opciones">
            <h3>Descubre</h3>
            <p>Discotecas</p>
            <p>Bares</p>
            <p>Locales</p>
            <p>Planes</p>
        </div>
        <!-- iconos footer -->
        <div class="iconos2">
            <h3>Redes sociales</h3>
            <a href="tel:911235444"><i class="fa-solid fa-phone-volume"></i></a>
            <a href="mailto:Karmaoficialmadrid@gmail.es"><i class="fa-regular fa-envelope"></i></a>
            <a href="https://es-es.facebook.com/login.php"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
    <hr>
    <div>
        <p class="con">Marta Pesqueira Rodríguez 2023 | Todos los derechos reservados</p>
    </div>
</footer> <!-- cierro footer -->
<script src="https://kit.fontawesome.com/e33a6500e1.js" crossorigin="anonymous"></script>
</body>
</html>