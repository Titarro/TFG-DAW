<?php
    session_start();
    include('./php/conexion_be.php');
    if(!isset($_SESSION['carrito'])){header("Location: ./index_login.php");}
    $arreglo = $_SESSION['carrito'];
    $total=0;
    for($i=0; $i<count($arreglo);$i++){
        $total =  $total+($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
    } 
    $fecha = date('Y-m-d h:m:s');   
    $conexion -> query("INSERT INTO pedidos(id_usuario,total,fecha) values(1,'$total','$fecha')")or die(); 
    $id_pedido = $conexion ->insert_id;
    
    for($i=0; $i<count($arreglo);$i++){
        $conexion -> query("INSERT INTO listapedidos(id_pedido,id_producto,cantidad,precio,subtotal) 
        values($id_pedido,".$arreglo[$i]['Id'].",".$arreglo[$i]['Cantidad'].",".$arreglo[$i]['Precio'].",".$arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'].")")or die();
    }
    unset($_SESSION['carrito']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garda</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    
</head>
<body>
    
<header class="banner">
        <nav class="nav container">
            <div class="nav__baner">
                <h2><class class="nav_title">GARDA</class></h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index_login.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="productos.php" class="nav__links">Productos</a>
                </li>    
                <li class="nav__items">
                    <a href="index.php" class="nav__links">Cerrar Sesion</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="carrito.php" class="nav__links"> <img src="./images/cart.svg" style="width:30px;"></a>
                </li>
        </nav>
        <section class="banner__container container">
            <h1 class="banner__title">Cucine d'Italia</h1>
            <p class="banner__paragraph">Expertos en gastronomía italiana. Contamos con más de 20 años de experiencia en la importación y distribución de productos de las marcas italianas de mayor prestigio.</p>
        </section>
       
</header>

<div class="gracias__container">
        <h1 class="gracias__gracias">Muchas gracias por su compra</h1>
        <a class="btn__gracias" href="./productos.php">Volver a la tienda</a>


    </div>


<main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__titulo">GARDA</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="index_login.php" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="productos.php" class="nav__links">Productos</a>
                    </li>    
                    <li class="nav__items">
                        <a href="index.php" class="nav__links">Cerrar Sesion</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                </ul>
            </nav>
            
            <form class="footer__form">
                <h2 class="footer__newsletter">Suscribete a la Newsletter</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email" class="footer__input">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="images/instagram.svg" class="footer__img"></a>
            </div>
        </section>
    </footer>

</main>

</body>
</html>