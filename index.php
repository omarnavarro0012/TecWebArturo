<?php
 session_start();
 require_once('baseDatos.php');
 require_once('usuario.php');
 $encontrado = true;
 if (!empty($_POST)) {
     /*$usuario = $capsule->table('usuarios')
                     ->where( $_POST['username'],$_POST['password']);*/
     $usuarios = Usuario::all();
     foreach ($usuarios as $usr) {
         if ($usr->correo === $_POST['correo'] && (password_verify($_POST['password'], $usr->password) || $_POST['password']==$usr->password)) {
             if ($usr->tipousuario == 'administrador') {
                 $_SESSION['correo'] = $usr->correo;
                 header('Location:administrador.php');
                 break;
             }
             if ($usr->tipousuario == 'Cliente') {
                 $_SESSION['correo'] = $usr->correo;
                 $_SESSION['tipousuario'] = $usr->tipousuario;
                 header('Location:index.php');
                 break;
             }
             if ($usr->tipousuario == 'Vendedor') {
                 $_SESSION['correo'] = $usr->correo;
                 $_SESSION['tipousuario'] = $usr->tipousuario;
                 header('Location:vendedor.php');
                 break;
             }
         }
     }
     $encontrado = false;
 }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mucho Corazon</title>
    <link href="index.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/hmtl; charset=iso-8859-1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="jquery-3.5.1.min.js"><\/script')
    </script>
    <script src="js/material.min.js"></script>
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>
    <header>
        <div class="encabezado">
            <div class="imagen">
                <img src="Imagenes_del_Proyecto/Logo.jpg" height="150">
            </div>

            <div class="menu">
                <nav>
                    <?php if (empty($_SESSION['correo']) && empty($_SESSION['tipousuario'])) : ?>
                        <li>
                            <button id="boton-abrir">Inicia sesion</button>
                        </li>
                        <li>
                            <a class="roles" href="registrarte.php">Registrate</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="productosPostre.php">Productos</a>
                        </li>
                        <li>
                            <a href="logout.php">Log out</a>
                        </li>
                    <?php endif; ?>
                </nav>
            </div>
        </div>

        <div class="navegacion">
            <nav class="navs">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <!-- <li><a class="" href="index.php">Home</a> </li> -->
                    <li><a href="cupcakes.php">Cupcakes</a> </li>
                    <li><a href="pasteles.php">Pasteles</a> </li>
                    <li><a href="frappes.php">Frappes</a> </li>
                    <li><a href="conocenos.php">Conocenos</a> </li>
                    <li><a href="nosotros.php">Nosotros</a> </li>
                    <li><a href="contacto.php">Contacto</a> </li>
                </ul>
            </nav>
        </div>
    </header>

    <body>
        <!-- Swiper -->
        <div id="swiper-container" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(./Imagenes_del_Proyecto/1.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./Imagenes_del_Proyecto/2.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./Imagenes_del_Proyecto/3.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./Imagenes_del_Proyecto/4.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./Imagenes_del_Proyecto/5.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(./Imagenes_del_Proyecto/6.jpg)"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <!-- Swiper JS -->
        <script src="./js/swiper.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: '.swiper-pagination',
                },
            });
        </script>

        </div>

        <div class="logos">
            <a href="https://web.facebook.com/dulcesmomentoos.slp/"><img src="./Imagenes_del_Proyecto/facebook.png" alt="Facebook icon"></a>
            <a href="#"><img src="./Imagenes_del_Proyecto/twitter.png" alt="Twitter icon"></a>
            <a href="#"><img src="./Imagenes_del_Proyecto/googleplus.png" alt="Google Plus icon"></a>
            <a href="#"><img src="./Imagenes_del_Proyecto/linkedin.png" alt="LinkedIn icon"></a>
        </div>

        <footer>
            <p>Todos los derechos Reservados &copy; 2021</p>
        </footer>

        <div class="overlay" id="overlay">
            <div class="popup" id ="popup">
                <a href="#" id="btn-cerrar" class="boton-cerrar"><i class="fas fa-times"></i>X</a>
                <h3>Inicia sesion</h3>
                <form action="index.php" method="POST">
                    <div class="contenedor-inputs">
                        <input type="email" name="correo" placeholder="Correo">
                        <input type="password" name="password" placeholder="Contraseña">
                    </div>
                    <input type="submit" class="btn-submit" value="Iniciar Sesion">
                    <br>
                    <?php if($encontrado == false) :?>
                         <p>Username ó password no valida</p>
                    <?php endif?>
                    <a class="olvido" href="olivdeContraseña.php">Olvidé mi Contraseña</a>
                </form>
            </div>
        </div>
        <script src="popup.js"></script>
    </body>

</html>