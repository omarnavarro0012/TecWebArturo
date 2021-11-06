<?php 
    session_start();
    require_once('baseDatos.php');
    require_once('usuario.php');

    if(!empty($_GET))
    {
        $id_contacto = $_GET['id_contacto'];
        $contacto = Contacto::where('ID',$id_contacto)->firts();

        /*para hacer una busqueda  se van haciendo wheres para ir anidando mas*/
    }
    if(!empty($_POST))
    {
        $id_contacto = $_POST['id_contacto'];


        $contacto =  Contacto::find($id_contacto);//objeto de contacto en la base de datos.
        $contacto.delete();
        header('Location:index.php');
    }
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <link href="administrador.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <title>Administrador</title>
</head>

<body>
    <header>
        <div class="imagen">
            <a href="index.php"><img class="logo" src="Imagenes_del_Proyecto/logo.png" height="100"></a>
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
        <?php foreach($contactos as $c): ?>
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
                    <a href="eliminarusuario.php?id_contacto=<?=$c->ID?>">X</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>



    <div class="conteiner">
        <nav>
            <a class="opciones" href="registrarte.php">Agregar Nuevo Usuario</a>
            <a class="opciones" href="administrador/eliminarusuario.php">Eliminar usuario</a>
            <a class="opciones" href="logout.php">Salir</a>
        </nav>

    </div>

</body>

</html>