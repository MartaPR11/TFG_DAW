<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['email'])) {
    // Si el usuario no ha iniciado sesión, redirigir al inicio de sesión u otra página
} else{
    //Aqui lo redireccionas al lugar que quieras.
    header("Location: iniciar.php");
    exit();
}

$servername = "localhost";
$database = "tfg";
$username = "usuario-tfg";
$password = "1234";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
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
    <title>Página en la que se descubren todas las discotecas, bares, locales y planes</title>
    <link rel="stylesheet" href="css/descubre.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- logo -->
        <div class="logo">
            <a href="index.php"><img class="imgLogo" src="img/Vector.svg" alt="logo"></a>
            <h1>KARMA</h1>
        </div>
        <!-- filtro-->
        <div>
            <label>Filtrar por precio:</label>
            <select id="selectOption" onchange="redirigir()">
                <option>Seleccionar precio</option>
                <option value="opcion1">5€</option>
                <option value="opcion2">15€</option>
                <option value="opcion3">25€</option>
                <option value="opcion4">30€</option>
            </select>
            <!-- Script para capturar el valor seleccionado y redirigir a la página de resultados -->
            <script>
                function redirigir() {
                    var opcionSeleccionada = document.getElementById("selectOption").value;
                    if (opcionSeleccionada !== "") {
                        window.location.href = "mostrar_info.php?opcion=" + opcionSeleccionada;
                    }
                }
            </script>
        </div>
        <!-- iconos -->
        <div class="iconos">
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
            <nav id="nav" class="main-nav" >
                <div class="nav-links" >
                    <a class="link-item" href="#" >Ver planes</a>
                    <a class="link-item" href="cerrar.php" >Cerrar sesion</a>
                </div>
            </nav>
            <button id="button-menu" class="button-menu" >
                <i class="fa-solid fa-gear"></i>
            </button>
        </div>
    </header>
    <main>
        <!-- 4 secciones -->
        <h2>Discotecas</h2><!-- abro discotecas -->
        <section class="section-discoteca">
            <article class="dis1">
                <?php
                // nombre de la discoteca
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='D' and id_esta=2";
                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=2">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>

            <article class="dis2">
                <?php // nombre de la discoteca
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='D' and id_esta=3";

                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=3">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>

            <article class="dis3">
                <?php // nombre de la discoteca
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='D' and id_esta=4";

                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=4">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>
        </section> <!-- cierro discotecas -->


        <h2>Bares</h2><!-- abro bares -->
        <section class="section-bar">
            <article class="bar1">
                <?php // nombre de la discoteca
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='B' and id_esta=5";
                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=5">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>

            <article class="bar2">
                <?php // nombre del bar
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='B' and id_esta=6";
                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=6">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>

            <article class="bar3">
                <?php // nombre del bar
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='B' and id_esta=7";
                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=7">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>
        </section> <!-- abro bares -->

        <h2>Locales</h2> <!-- abro locales -->
        <section class="section-local">
            <article class="local">
                <?php // nombre de la discoteca
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='L' and id_esta=8";
                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=8">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>
            <article class="local1">
                <?php // nombre de la discoteca
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='L' and id_esta=9";

                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=9">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>

            <article class="local2">
                <?php // nombre de la discoteca
                $sql_nom = "SELECT nombre_lugar FROM establecimientos WHERE categoria='L' and id_esta=10";

                $result = $conn->query($sql_nom);
                if ($result->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $result->fetch_assoc()) {
                ?>
                <a href="muestra_info_esta.php?id=10">
                <h3 class="nombre-sitio"> <?php echo $row["nombre_lugar"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                </h3></a>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
            </article>
        </section>

        <h2>Planes</h2> <!-- abro planes -->
        <section class="section-planes">
            <div class="div-plan">
                    <?php
                    $sql_plan = "SELECT texto FROM planes where id_plan ='1'";
                    $result = $conn->query($sql_plan);
                    if ($result->num_rows > 0) {
                        // Iterar sobre los resultados y mostrar los datos
                        while ($row = $result->fetch_assoc()) {
                            echo $row["texto"];
                    }
                    } else { echo "0 resultados";}
                    ?>
                <div><a href="https://www.bailaloloco.com/">Mas informacion</a></div>
                <div
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
            </div>
            </div>

            <div class="div-plan">
                    <?php
                    $sql_plan = "SELECT texto FROM planes where id_plan ='2'";
                    $result = $conn->query($sql_plan);
                    if ($result->num_rows > 0) {
                        // Iterar sobre los resultados y mostrar los datos
                        while ($row = $result->fetch_assoc()) {
                            echo $row["texto"];
                        }
                    } else { echo "0 resultados";}
                    ?>
                <div> <a href="https://www.timeout.es/madrid/es/que-hacer/la-tropiterraza">Mas informacion</a></div>
                <div>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
            </div>

            <div class="div-plan">
                <?php
                $sql_plan = "SELECT texto FROM planes where id_plan ='3'";
                $result = $conn->query($sql_plan);
                if ($result->num_rows > 0) {
                    // Iterar sobre los resultados y mostrar los datos
                    while ($row = $result->fetch_assoc()) {
                        echo $row["texto"];
                    }
                } else { echo "0 resultados";}
                ?>
                <div><a href="https://www.timeout.es/madrid/es/que-hacer/honna-surf-hub">Mas informacion</a></div>
                <div>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                </div>
            </div>


        </section> <!-- cierro planes -->
    </main>

    <footer> <!-- abro footer -->
        <div class="contenedor">
        <!-- logo footer -->
        <div class="fila1">
            <div class="logo">
                <img class="imgLogo" src="img/Vector.svg" alt="logo">
                <h1>KARMA            </h1>
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
    <script src="js/descubre.js"></script>
    <script src="https://kit.fontawesome.com/e33a6500e1.js" crossorigin="anonymous"></script>
</body>

</html>

<?php mysqli_close($conn); ?>