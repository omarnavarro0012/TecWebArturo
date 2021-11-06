<?php 

    require_once('baseDatos.php');
    require_once('contacto.php');

    if(!empty($_GET))
    {
        $id_contacto = $_GET['id_contacto'];
        $contacto = Contacto::where('id',$id_contacto)->firts();
    }
    if(!empty($_POST))
    {
        $id_contacto = $_POST['id_contacto'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Correo = $_POST['Correo'];

        $contacto =  Contacto::where($id_contacto)->firts();//objeto de contacto en la base de datos.
        /*Asignacion de valores a el objeto */
        $contacto->Nombre = $Nombre;
        $contacto->Apellido = $Apellido;
        $contacto->Correo = $Correo;
        /*Guardar el contecto en la base de datos*/
        $contacto->save();
        /*Se muestra el indice despues de agregarlo*/
        header('Location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar</title>
</head>
<body>
    <h1>Modificar Contacto</h1>
    <form action="modificar.php" method="POST">
        <input type="hidden" name="id_contacto" value="<?= $contacto->ID?>">
        <input type = "text" name="Nombre" placeholder="nombre" value="<?= $contacto->Nombre ?>">
        <input type = "text" name="Apellido" placeholder="apellido" value="<?= $contacto->Apellido?>">
        <input type = "email" name="Correo" placeholder="correo" value="<?= $contacto->Correo?>">
        <input type = "submit" value="Agregar">
    </form>
</body>
</html>








<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="editarCliente.css">
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
                <div class="input"> 
                    <table>
                        <thead>
                            <th>Productos</th>                           
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Borrar</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Producto 1</td>
                                <td>Descripcion 1</td>
                                <td>Precio 1</td>
                                <td><button>Borrar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</body>
</html>