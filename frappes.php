<?php
// session_start();
// require_once("vendor/autoload.php");//requerimiento para correr la base de datos.
// require_once("productos.php");

//     if(empty($_SESSION['usuario']))
//     {
//         header("Location:login.php");
//     }
//     else
//     {
//         if($_SESSION['usuario'])
//         {
            
//         }
//     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="productosPostre.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Postres</title>
</head>

<body>
    <header>
        <div class="encabezado">
            <div class="imagen">
                <a href="index.php"><img src="Imagenes_del_Proyecto/Logo.jpg" height="150"></a>
            </div>

            <div class="menu">
                <nav>
                    <?php if(empty($_SESSION['usuario'])) : ?>
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
                            <button id="botonCerrarSesion">Cerrar sesion</button>
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
                <!--<label class="logoD">DesignX</label>-->
                <ul>
                    <li><a class="" href="registrarte.php">Home</a> </li>
                    <li><a href="cupcakes.php">Cupcakes</a> </li>
                    <li><a href="pasteles.php">Pasteles</a> </li>
                    <li><a href="frappes.php">Frappes</a> </li>
                    <li><a href="conocenos.php">Conocenos</a> </li>
                    <li><a href="nosotros.php">Nosotros</a> </li>
                    <li><a href="contacto.php">Contacto</a> </li>
                </ul>

                <!--<a href="registrarte.php">Postres</a>                    
                    <a href="registrarte.php">Regalos</a>
                    <a href="registrarte.php">Arma tu regalo</a>-->
            </nav>
        </div>
    </header>

    <section>
        <div class="productos">
            <div class="row">
                <div class="col-xs-10 col-sm-6 col-md-4 product">
                    <div class="card">
                        <img src="Imagenes_del_Proyecto\productoPostres\brownieRelleno.jpg" alt="">
                        <h3>Brownie Relleno de Chocolate</h3>
                        <p>$ 120.00</p>
                    </div>
                </div>

                <div class="col-xs-10 col-sm-6 col-md-4 product">
                    <div class="card">
                        <img src="Imagenes_del_Proyecto\productoPostres\cheeseChocolate.jpg" alt="">
                        <h3>Cheesecake de Chocolate</h3>
                        <p>$ 200.00</p>
                    </div>
                </div>

                <div class="col-xs-10 col-sm-6 col-md-4 product">
                    <div class="card">
                        <img src="Imagenes_del_Proyecto\productoPostres\heladoSandwich.jpg" alt="">
                        <h3>Helado de Sandwich</h3>
                        <p>$ 150.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>