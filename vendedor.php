<?php
    session_start();
    require_once('usuario.php');
    if(!empty($_SESSION['correo']) && !empty($_SESSION['tipousuario']))
    {
         $usuario = Usuario::where('correo',$_SESSION['correo'])->firts();
    }
    else
    {
        header('Location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <link href="vendedor.css" rel="stylesheet">
        <title>Vendedor</title>
</head>
<body>
        <header>
            <div class="imagen">
                <img src="Imagenes_del_Proyecto/logo.png" height="100">
                
            </div>
            <div class="logo">
                
                <h1>Live Desserts and Gifts</h1>
            </div>
    
            <div class="menu">
                <nav>
                    <li>
                            <a class="roles" href="index.php">Home</a>
                        </li>
                </nav>    
            </div>
        </header>
    
    <div class="Contenedor">
        <div>
            <button><a href="./vendedor/agregar.php?id_contacto=<?=$usuario->ID?>">Agregar</a></button>
            <button><a href="./vendedor/editar.php?id_contacto=<?=$usuario->ID?>">Editar</a></button>
            <button><a href="index.php"> Log Out</a></button>
        </div>
    </div>
    
</body>
</html>