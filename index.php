<?php
date_default_timezone_set("America/Montevideo");
$fecha= date("d-m-Y H:i:s");

if(isset($_POST["formulario_contacto"])){
    $remitente= $_POST["e-mail"];
    $nombre= $_POST["nombre"];
    $mensaje= $_POST["mensaje"];

    $archivo = fopen("mensajes/contacto.txt","a");
    fputs($archivo, $fecha." - ".$nombre ."\n".$remitente."\n".$mensaje."\n\n");
    fclose($archivo);
}

// contador de visitas
$ip = $_SERVER["REMOTE_ADDR"];
$navegador= $_SERVER["HTTP_USER_AGENT"];
$visitas = fopen("visitas.txt", "a");

fputs($visitas, $ip ."\n".$navegador."\n".$fecha."\n\n");
fclose($visitas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav id="barra">
        <a href="#inicio">Inicio</a>
        <a href="#sobre_mi">Sobre mí</a>
        <a href="#conocimientos">Conocimientos</a>
        <a href="#proyectos">Proyectos</a>
        <a href=#contacto>Contacto</a>
    </nav>  

    <section id="inicio">
        <div id="info">
            <h1>Marcos Galeano</h1>
            <h3>Desarrollador web full-stack</h3>
        </div>
    </section>
    <section id="sobre_mi">
        <div class="contenedor">
            <h1 class="seccion_titulo">Sobre mí</h1>
            <div id="info_personal">
                <img src="img/fondos/work.jpg" width="300px" alt="trabajando">
                Soy un técnico en redes y software y un programador web full-stack bastante autodidacta. Hace unos años que comencé a desarrollar en C y C++ de forma totalmente autodidacta, 
                luego me centré en el desarrollo web comenzando por HTML y CSS, luego pasé a aprender Javascript, a servidores web y luego a PHP antes de comenzar a cursar una tecnicatura en redes y software en <i>CETP (ex UTU)</i>. 
                Finalmente me enfoqué más en bases de datos e ingeniería de software. Actualmente me encuentro cursando un curso de testing funcional en <i>JAP (Jovenes a Programar)</i>. 
                <p style="clear: right;"></p>
            </div>
            
        </div>
    </section>
    <section id="conocimientos">
        <dic class="contenedor">
            <h1 class="seccion_titulo">Mis conocimientos</h1>

            <div class="contenedor_items">
                <div class="tecnologia"><img src="img/tecnologias/html.png" alt="html"><span class="tecnologia_nombre">HTML5</span></div>
                <div class="tecnologia"><img src="img/tecnologias/css.png" alt="css"><span class="tecnologia_nombre">CSS3</span></div>
                <div class="tecnologia"><img src="img/tecnologias/bootstrap.png" alt="bootstrap"><span class="tecnologia_nombre">Bootstrap 4</span></div>
                <div class="tecnologia"><img src="img/tecnologias/js.png" alt="javascript"><span class="tecnologia_nombre">JavaScript</span></div>
                <div class="tecnologia"><img src="img/tecnologias/php.png" alt="php"><span class="tecnologia_nombre">PHP</span></div>
                <div class="tecnologia"><img src="img/tecnologias/mysql.png" alt="mysql"><span class="tecnologia_nombre">MySql</span></div>
            </div>
        </dic>
    </section>
    <section id="proyectos">
        <div class="contenedor">
            <h1 class="seccion_titulo">Mis proyectios personales</h1>
            <div class="contenedor_items">
                <div class="proyecto">
                    <h3 class="proyecto_titulo">Snake</h3> 
                    <img src="img/proyectos/snake-js.png" width="150px" height="100px" alt="snake" > <br>
                    <a href="./proyectos/snake/index.html">Ver</a>
                </div>
                <div class="proyecto"> 
                    <h3 class="proyecto_titulo">Pong</h3>
                    <img src="img/proyectos/pong-js.jpg" width="150px" height="100px" alt="pong" > <br>
                    <a href="./proyectos/pong/index.html">Ver</a>
                </div>
                <div class="proyecto"> 
                    <h3 class="proyecto_titulo">Calculadora cientifica</h3>
                    <img src="img/proyectos/calc-js.jpg" width="150px" height="100px" alt="calc" > <br>
                    <a href="./proyectos/calculadora/index.html">Ver</a>
                </div>
                    
                <div class="proyecto"> 
                    <h3 class="proyecto_titulo">Web de presentación</h3> 
                    <img src="img/proyectos/mi_web.jpg" width="150px" height="100px" alt="decimal-binario" > <br>
                    <a href="#">Github</a>
                </div>

                <div class="proyecto"> 
                    <h3 class="proyecto_titulo">Tómbola</h3> 
                    <img src="img/proyectos/tombola.jpg" width="150px" height="100px" alt="tombola" > <br>
                    <a href="./proyectos/tombola/index.php">Ver</a>
                </div>

            </div>
        </div>
    </section>
    <section id="contacto">
        <div class="contenedor">
            <h1 class="seccion_titulo">Contacto</h1>

            <form id="form_contacto" action="index.php" method="post">
                <input type="text" name="nombre" placeholder="Nombre *" required>
                <input type="e-mail" name="e-mail" placeholder="E-mail *" required>
                <textarea name="mensaje" id="email" cols="30" rows="7" required></textarea>
                <input type="hidden" name="formulario_contacto">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <footer>
            &copy; Copyright 2020 - Marcos Galeano
        </footer>
    </section>
</body>
</html>