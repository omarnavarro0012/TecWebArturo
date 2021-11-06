<?php
    require_once('baseDatos.php');
    require_once('usuario.php');

    if(!empty($_POST))
    {
        $usuario = Usuario::where('nombre',$_POST['nombre'])->first();
        if($usuario != null)
        {
            echo 'EL usuario ya existe';
        }
        else
        {
            if($usuario == null)
            {
                $usuario = new Usuario;
                $usuario->tipousuario = $_POST['tipousuario'];
                $usuario->nombre = $_POST['nombre'];
                $usuario->apellido = $_POST['apellido'];
                $usuario->correo = $_POST['correo'];
                $usuario->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                $usuario->codigopostal = $_POST['codigopostal'];
                $usuario->calle = $_POST['calle'];
                $usuario->nocalle = $_POST['nocalle'];

                $usuario->save();
                header('Location:index.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>

<body>
    <header>
        <div class="imagen">
            <a href="index.php"><img class="logo" src="Imagenes_del_Proyecto/Logo.jpg" height="150"></a>
        </div>
    </header>

    <div class="General">
        <div class="container">

            <h2>Completa todos los campos</h2>
            <form action="registrarte.php" method="POST">

                <div class="group">
                    <input type="text" name="nombre" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Nombre</label>
                </div>

                <div class="group">
                    <input type="text" name="apellido" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Apellido</label>
                </div>

                <div class="group">
                    <input type="text" name="correo" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Correo</label>
                </div>

                <div class="group">
                    <input type="password" name="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Contraseña</label>
                </div>

                <div class="group">
                    <input type="text" name="tipousuario" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Usuario (Cliente, Vendedor)</label>
                </div>

                <div class="group">
                    <input type="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Repetir Contraseña</label>
                </div>

                <div class="group2">
                    <input type="text" name="calle" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Calle</label>
                </div>

                <div class="group2">
                    <input type="number" name="nocalle" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Numero</label>
                </div>

                <div class="group2">
                    <input type="number" name="codigopostal" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Código postal Ej: 78230</label>
                </div>
                <div class="middle">
                    <input type="submit" class="btn btn3"  value="Registrate">
                </div>
            </form>
        </div>
    </div>
</body>

</html>