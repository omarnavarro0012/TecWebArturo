<?php 
session_start();
require_once('baseDatos.php');
require_once('./producto.php');
require_once('usuario.php');
    if(empty($_SESSION['correo']))
    {
        header('Location: index.php');
    }
    if(!empty($_GET))
    {
        $id_producto = $_GET['id_producto'];
        $producto = Producto::where('ID',$id_producto)->firts();

        /*para hacer una busqueda  se van haciendo wheres para ir anidando mas*/
    }
    if(!empty($_POST)){
        $creador = $_POST['id_producto'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $porciones = $_POST['porciones'];
        $sabor = $_POST['sabor'];

        $producto =  Producto::find($creador);//objeto de contacto en la base de datos.
        /*Asignacion de valores a el objeto */
        $producto->creador = $creador;
        $producto->nombre = $nombre;
        $producto->descripcion = $descripcion;
        $producto->precio = $precio;
        $producto->porciones = $porciones;
        $producto->sabor = $sabor;
        /*Guardar el contecto en la base de datos*/
        $producto->save();
        /*Se muestra el indice despues de agregarlo*/
        header('Location:vendedor.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="agregar.css">
    <title>Modificar</title>
</head>
<body>
    <header>
            <div class="imagen">
                <img src="../Imagenes_del_Proyecto/logo.png" height="100">

            </div>
            <div class="logo">

                <h1>Live Desserts and Gifts</h1>
            </div>

            <div class="menu">
                <nav>
                        <li>
                                <a class="roles" href="../vendedor.php">Home Vendedor</a>
                            </li>
                    <li>
                        <a class="roles" href="../index.php">Home</a>
                    </li>
                </nav>
            </div>
    </header>

    <div class="General">
            <div class="contenido">
    
                <h1>Modificar Producto</h1>
                <form action="modificar.php" method="post">
                    <div class="input"> 
                        <input type="hidden" name="id_producto" value="<?= $producto->ID?>">
                        <label>Nombre Producto</label>
                        <input type="text" name="nombre" placeholder="Nombre Prodcuto" >
                        <label>Descripcion</label>
                        <input type="text" name="descripcion" placeholder="Descripcion">
                        <label>Precio</label>
                        <input type="number" name="precio" placeholder="Precio">
                        <label>Porciones Aprox</label> 
                        <input type="number" name="porciones" placeholder="Porciones">
                        <label>Sabor</label> 
                        <input type="number" name="sabor" placeholder="Sabor del Producto">
                    </div>
                    <input type="submit" value="Modificar">
                </form>
            </div>
        </div>

</body>
</html>