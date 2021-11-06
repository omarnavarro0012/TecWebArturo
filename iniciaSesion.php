<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inicia Sesion</title>
    <link rel="stylesheet" href="iniciaSesion.css">
</head>

<body>
    <header>
        <div class="imagen">
            <a href="index.php"><img class="logo" src="Imagenes_del_Proyecto/logo.png" height="100"></a>
        </div>
        <div>
            <h1>Mucho Corazon</h1>
        </div>
    </header>
    <div class="login">
        <h2>Bienvenido</h2>
        <input type="email" id="email" placeholder="Usuario">
    </div>
    <div class="login">
        <input type="password" placeholder="Contraseña">
    </div>
    <div class="login">
        <button onclick="location.href='administrador.php'" class="admi">EntrarAdmin</button>
        <button onclick="location.href='cliente.php'" class="admi">EntrarCliente</button>
        <button onclick="location.href='vendedor.php'" class="admi">EntrarVendedor</button>
    </div>
    <div class="login">
        <a href="olivdeContraseña.php">Olvidé mi Contraseña</a>
    </div>

    
</body>

</html>