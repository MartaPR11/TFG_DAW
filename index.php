<?php

$servername = "localhost";
$database = "tfg";
$username = "usuario-tfg";
$password = "1234";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

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
    <title>Página web de información sobre el ócio nocturno en Madrid</title>
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
        <div class="ini"><a href="descubre.php">Descubre</a></div><!--te lleva al index.php -->
        <p id="open">Contacto</p>
        <div id="modal_container" class="modal-container">
            <div class="modal">
                <h1 class="title-acceso">Contacta con nosotros a traves de</h1>
                <div class="fila-acceso">
                    <p><a href="mailto:Karmaoficialmadrid@gmail.es"><i class="fa-regular fa-envelope"></i>
                        Karmaoficialmadrid@gmail.es</a></p>
                </div>
                <div class="fila-acceso">
                    <p><i class="fa-solid fa-phone-volume"></i> 911 235 444</p>
                </div>
                <button id="btn-cerrar">Cerrar</button>
            </div>
        </div><!-- contacto abre un pop up con la informacion -->
    </nav>
    <div class="iconos"><a href="iniciar.php">
        <i class="fa-solid fa-user"></i></a>
        <?php
        ?>
    </div>
</header>

<main>
    <!-- inicio -->
    <div class="inicio">
        <!-- eslogan -->
        <div class="eslogan">
            <h2>¡Crea recuerdos en cada lugar que descubras!</h2>
        </div>
        <!-- texto de inicio -->
        <div class="textoInicio">
            <p>
                Contamos con lugares a los que salir, planes que probar y bares que recorrer. Vive nuevas
                experiencias explorando cada rincon de Madrid. ¿Te los vas a perder?
            </p>
        </div>
        <!-- boton que lleva a la pagina de descubre -->
        <div class="bt">
            <a href="iniciar.php" class="botonInicio">Registrate y descubre el plan perfecto</a>
        </div>
    </div>
    <div class="secciones"> <!-- abro discotecas -->
        <h2 class="titulos">Discotecas más buscadas</h2>
        <section class="panda">
            <article class="barcelo">
                <img src="img/barcelo.jpg" alt="barcelo" title="Teatro barcelo">
                <a href="descubre.php"><h3>Opium Madrid</h3></a>
            </article>

            <article class="serrano">
                <img src="img/serrano.jpg" alt="serrano" title="Discoteca serrano 41 ">
                <a href="descubre.php"><h3>Discoteca B12</h3></a>
            </article>
            <div>
                <article>
                    <img src="img/panda.jpg" alt="panda" title="Discoteca Panda ">
                    <a href="descubre.php"><h3>Tiffany's The Club</h3></a>
                </article>
            </div>
        </section> <!-- cierro discotecas -->
    </div>

    <div class="secciones"> <!-- abro bares -->
        <h2 class="titulos">Bares más buscados</h2>
        <section>
            <article>
                <img src="img/bar1.jpg" alt="Bar Norte" title="Bar Norte">
                <a href="descubre.php"><h3>Bar La Junta</h3></a>
            </article>

            <article>
                <img src="img/bar2.jpg" alt="Bar Acidia" title="Bar Acidia">
                <a href="descubre.php"><h3>Trastevere Bar</h3></a>
            </article>

            <article>
                <img src="img/bar3.jpg" alt="Bar Hermanos" title="Bar Hermanos">
                <a href="descubre.php"><h3>Harvey's Cocktail Bar</h3></a>
            </article>
        </section> <!-- cierro bares -->
    </div>
    <div class="secciones"> <!-- abro locales -->
        <h2 class="titulos">Lócales más buscados</h2>
        <section>
            <article class="cha">
                <img src="img/El-Chapandaz-Madrid-interior.jpg" alt="Chapandaz" title="Chapandaz">
                <a href="descubre.php"><h3>Moreira Lounge Club</h3></a>
            </article>

            <article>
                <img src="img/hangar.jpg" alt="33" title="33">
                <a href="descubre.php"><h3>El hangar</h3></a>
            </article>
        </section> <!-- cierro locales -->
    </div>

    <!-- abro planes -->
    <div class="secciones">
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
<!-- links script -->
<script src="js/index.js"></script>
<script src="https://kit.fontawesome.com/e33a6500e1.js" crossorigin="anonymous"></script>
</body>

</html>