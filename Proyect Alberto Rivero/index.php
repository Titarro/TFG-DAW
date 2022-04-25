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
                    <a href="registrarse.php" class="nav__links">Registrate</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
        </nav>
        <section class="banner__container container">
            <h1 class="banner__title">Cucine d'Italia</h1>
            <p class="banner__paragraph">Expertos en gastronomía italiana. Contamos con más de 20 años de experiencia en la importación y distribución de productos de las marcas italianas de mayor prestigio.</p>
        </section>
       
</header>

<form action="./php/login_usuario.php" method="POST" class="login__form">
    <h2 class="login__title">Iniciar Sesión</h2>
   
    <div class="container__login">
        <div class="login__group">
            <h3 class="login__label">Usuario:</h3>
            <input type="text" name="usuario" class="login__input" placeholder=" ">
        </div>
        <div class="login__group">
            <h3 class="login__label">Contraseña:</h3>
            <input type="text" name="pass" class="login__input" placeholder=" ">
         </div>
         <button class="login__submit">Entrar</button>
    </div>
</form>
<main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__titulo">GARDA</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="registrarse.php" class="nav__links">Registrate</a>
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