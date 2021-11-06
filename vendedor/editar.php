<?php
session_start();
require_once('baseDatos.php');
require_once('productos.php');

if(!empty($_GET))
    {
        $id_usuario = $_GET['id_usuario'];
        $usuario = Usuario::where('ID',$id_usuario)->firts();

        /*para hacer una busqueda  se van haciendo wheres para ir anidando mas*/
    }
    if(!empty($_POST))
    {
        $id_producto = $_POST['ID'];
        $producto =  Producto::find($id_producto);//objeto de contacto en la base de datos.
        $producto.delete();
        header('Location:.vendedor.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="editar.css">
    <title>Editar</title>
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
                        <a class="roles" href="../index.php">Home</a>
                    </li>
                </nav>
            </div>
    </header>

    <div class="General">
            <div class="contenido">
                <h1>Editar o Eliminar productos</h1>
                <form action="#" method="POST">
                <div class="input"> 
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($productos as $c): ?>
                            <?php if($usuario->ID == $c->creador): ?>
                            <tr>    
                                <td>
                                    <?= $c->Nombre; ?>
                                </td>    
                                <td>
                                    <?= $c->Apellido; ?>
                                </td>
                                <td>
                                    <?= $c->Correo; ?>
                                </td>
                                <td>
                                    <a href="modificar.php?id_producto=<?=$c->creador?>">Modificar</a>
                                </td>
                                <td>
                                    <input type="hidden" name="id_producto" value="<?= $c->ID?>">
                                    <input type="submit" value="Eliminar">>
                                </td>
                            </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </tbody>
                    </table>
                </div>
                </form>
            </div>
        </div>


</body>
</html>