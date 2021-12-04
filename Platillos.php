<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mi tiendita</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!--Iconos del footer-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <nav class="nav">
                    <div class="menu" id="menu">
                        <a href="index.html">Inició</a>
                        <a href="informacion.html">Información</a>
                        <a href="menu.html">Menú</a>
                        <a href="ubicacion.html">Ubicación</a>
                        <a href="opiniones.html">Opiniones</a>
                    </div>
                    <div class="icono" id="open"><span>&#9776;</span></div>
                </nav>
                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="img/cart.png" id="img-carrito">
                            <div id="carrito">
                                <p class="vacio">Carrito Vacio</p>
                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!--    <td>
                                                    <img src="img/productos/laptop3.jpg" width=100>
                                                </td>
                                                <td>Computadora portatil</td>
                                                <td>$15800</td>
                                                <td><a href="#" class="borrar-producto"> X</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/productos/monitor4.jpg" width=100>
                                                </td>
                                                <td>Monitor de 27 pulgadas</td>
                                                <td>$3500</td>
                                                <td><a href="#" class="borrar-producto"> X</a></td> -->
                                        </tr>
                                    </tbody>
                                </table>

                                <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="textos header h3">
                <h1 class="titulo">Crepe Supreme</h1>
                <h3 class="subtitulo">El mejor restaurante de la region</h3>
            </div>
        </div>
    </header>
    <?php
include_once("CrearPlatillos.php");
$objCarrito=new Carrito();
$objCarrito->cargaProductos();
$objCarrito->mostrarProductos();
?>
    <footer>
        <hr>
        <br>
        <div class="footer-container">
            <div class="footer-main">
                <div class="footer-columna">
                    <h3>Suscribete</h3>
                    <form method="Post">
                        <input type="email" required placeholder="Escriba su correo">
                        <input type="submit" value="Suscribirse">
                    </form>
                </div>
                <div class="footer-columna">
                    <h3>Dirección</h3>
                    <span class="fa fa-map-marker"><p>: #25 Hidalgo Interior 8</p></span>
                    <span class="fa fa-phone"><p>: (+52) 353 - 103- 7066</p></span>
                    <span class="fa fa-envelope"><p>: crepesupreme_25@gmail.com</p></span>
                </div>
                <div class="footer-columna">
                    <h3>Objetivo</h3>
                    <p>Ofrecer un servicio de restaurante con un variado menú, platos a la carta, a diferentes precios.</p>
                </div>
            </div>
            <div>
                <p>© Derechos reservados SA. 2020</p>
            </div>
        </div>
    </footer>

    <script src="js/app.js"></script>

</body>

</html>