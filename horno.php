<!DOCTYPE html>
<html lang="en">

<head>
    <link href="horno.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/hmtl; charset=iso-8859-1">
    <title>Horno</title>
</head>

<body>
    <header>
        <div class="imagen">
            <img src="../Imagenes_del_Proyecto/logo.png" height="100">

        </div>
        <div class="logo">
            <h1>Mucho Corazon</h1>
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
            <h1>Estamos listos para hornear</h1>
            <div class="input">
                <table class="tabla">
                    <thead>
                        <th>Producto</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Producto 1</td>
                            <td>Precio 1</td>
                            <td><button>X</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><button onclick="location.href='pagar.html'" class="pagar">Pagar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>