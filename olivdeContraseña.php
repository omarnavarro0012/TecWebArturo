<!DOCTYPE html>
<html lang="es">

<head>
    <link href="olivdeContraseña.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="olvideContraseña.css">
    <title>Olvidé mi Contraseña</title>
</head>

<body>
    <header>
        <div class="imagen">
            <a href="index.php"><img class="logo" src="Imagenes_del_Proyecto/logo.png" height="100"></a>
        </div>
        <div>
            <h1>Live Desserts and Gifts</h1>
        </div>
    </header>
    <div class="login">
        <h2>Olvide mi contraseña</h2>
        <input type="email" id="email" placeholder="Usuario">
    </div>
    <div class="login">
        <button onclick="location.href='administrador.php'" class="admi">Enviar Codigo</button>
    </div>
    <div class="login">
        <input type="number" id="email" placeholder="Codigo">
    </div>
    <div class="login">
        <input type="password" id="email" placeholder="Nueva contraseña">
    </div>
    <div class="login">
        <input type="text" id="email" placeholder="Repetir contraseña">
    </div>
    <div class="login">
        <button onclick="location.href='administrador.php'" class="admi">Cambiar la contraseña</button>
    </div>
</body>

</html>