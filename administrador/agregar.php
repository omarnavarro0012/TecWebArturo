<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrador - Agregar</title>
    <link href="agregar.css" rel="stylesheet">
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

    <form action="agregarcontacto.php" method="POST">
        <input type = "text" name="Nombre" placeholder="nombre">
        <input type = "text" name="Apellido" placeholder="apellido">
        <input type = "email" name="Correo" placeholder="correo">
        <input type = "submit" value="Agregar">
    </form>

    <form action="agregarcontacto.php" method="POST">
    <div class="agregar">
        <label>Producto</label>
        <input type="text" placeholder="Ingresa el producto que deseas añadir">
    </div>
    <div class="agregar">
        <label>Descripcion</label>
        <input type="text" placeholder="Pequeña descripcion4">
    </div>
    <div class="agregar">
        <label>Precio</label>
        <input type="text" placeholder="Precio">
    </div>
    <div class="agregar">
            <input type = "submit" class="admi" value="Agregar">
    </div>
    </form>
</body>

</html>
