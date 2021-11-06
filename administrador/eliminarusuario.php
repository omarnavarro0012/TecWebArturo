<?php 
    session_start();
    require_once('baseDatos.php');
    require_once('usuario.php');

    if(empty($_SESSION['correo']))
    {
        header("Location:index.php");
    }
    if(!empty($_GET))
    {
        $id_usuario = $_GET['id_usuario'];
        $usuario = Usuario::where('ID',$id_usuario)->firts();

        /*para hacer una busqueda  se van haciendo wheres para ir anidando mas*/
    }
    if(!empty($_POST))
    {
        $id_usuario = $_POST['id_usuario'];
        $usuario =  Usuario::find($id_contacto);//objeto de contacto en la base de datos.
        $contacto.delete();
        header('Location:administrador.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrador - Eliminar</title>
    <link href="editar.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
</head>

<body>
    <header>
        <div class="imagen">
            <a href="../index.php"><img class="logo" src="../Imagenes_del_Proyecto/logo.png" height="100"></a>
        </div>
        <div class="logo">

            <h1>Live Desserts and Gifts</h1>
        </div>
        <div class="menu">
            <nav>
                <li>
                    <img class="imgUsr" src="https://icon-library.net/images/admin-icon-png/admin-icon-png-28.jpg"
                        height="60">
                    <h3 class="roles">Hola Administrador</h3>
                </li>
            </nav>
        </div>
    </header>
    <form action="eliminar.php" method="POST">
        <input type="hidden" name="id_usuario" value="<?= $usuario->ID?>">
        <div class="agregar">
            <label>Producto</label>
            <input type="text" name="nombre" placeholder="Ingresa el producto que deseas añadir">
        </div>
        <div class="agregar">
            <label>correo</label>
            <input type="text" name="correo" placeholder="Pequeña descripcion">
        </div>
        <div class="agregar">
            <label>Password</label>
            <input type="text" name="password" placeholder="Precio">
        </div>
        <div class="agregar">
                <input type="submit" value="Eliminar Usuario">
        </div>
    </form>
</body>

</html>