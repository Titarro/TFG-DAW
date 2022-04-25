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
<STYLE>A {text-decoration: none; color:#1b0064} </STYLE>
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

<div class="prod__menu">
    <nav class="prod__container">
        <h1 class="prod__titulo">Nuestros Productos</h1>
        <ul class="prod__link">
            <li class="nav__items">
                <a href="mutti.php" class="prod__links">Mutti</a>
            </li>
            <li class="nav__items">
                <a href="levoni.php" class="prod__links">Levoni</a>
            </li>
            <li class="nav__items">
                <a href="gentile.php" class="prod__links">Gentile</a>
            </li>
            <li class="nav__items">
                <a href="mozzarella.php" class="prod__links">Mozzarela</a>
            </li>
            <li class="nav__items">
                <a href="harina.php" class="prod__links">Harina</a>
            </li>

    </nav>

</div>

<div class="lista">
<?php 
    include('./php/conexion_be.php');
    $resultado = $conexion -> query("SELECT * FROM productos WHERE categoriap ='levoni'");
    while($fila = mysqli_fetch_array($resultado)){ 
?>


    <div class="columnas__container">
        <figure class="img__prod">
            <a href="detalles.php?id=<?php echo $fila['codp'];?>">
            <img src="./images/productos/<?php echo $fila['imagp'];?>" class="img_card">
        </figure>    
        <div class="info-card">
            <h4><?php echo $fila['nomp'];?></h4>
            <p class="precio"><?php echo $fila['preciop'];?>€</p>
        </div>
    </div>

<?php } ?>
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