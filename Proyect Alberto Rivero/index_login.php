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
                <h2><class class="nav_title">Bienvenido</class></h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index_login.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="productos.php" class="nav__links">Productos</a>
                </li>    
                <li class="nav__items">
                    <a href="index.php" class="nav__links">Cerrar Sesión</a>
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

<main>
    <section class="about">
        <div class="about__container">
            <div class="about__texts">
                <h2 class="subtitle">¿Quienes somos?</h2>
                <p class="about__paragraph">Lo que comemos habla acerca de lo que sentimos. En Garda queremos que te sientas bien y que te alimentes con la mejor calidad. Queremos cuidarte. Por eso llevamos más de veinte años acercando la más amplia gama de productos de la mejor gastronomía de Italia a las más típicas trattorias italianas, tiendas y supermercados del panorama nacional. De Italia a tu casa.</p>
            </div>
            <div class="about__picture">
                <img src="./images/transporte.jpg" class="about__img">
            </div>    
        </div>
    </section>

    <div class="slider__titulo">
        <h2>Nuestras Marcas</h2>
    </div>
    <section class="slider"></section>
        <div class="slider__container container">
            <img src="./images/l_arrow.svg" class="slider__flecha" id="before">
            <section class="slider__body slider__body--show" data-id="1">
                 <div class="slider__texts">
                    <h2 class="slider__name" >Mutti</h2>
                    <p class="slider__review">Los tomates pelados, el concentrado simple, el tomate triturado y el concentrado doble son los grandes clásicos Mutti. Estos ingredientes son esenciales para quienes no quieren renunciar al placer de comer tomate fresco y para quienes quieren descubrir lo que entendemos por sabor.</p>
                </div>

                <figure class="slider__picture">
                    <img src="images/mutti.png" class="slider__img">
                </figure>
            </section>
            <section class="slider__body" data-id="2">
                <div class="slider__texts">
                   <h2 class="slider__name" >Levoni</h2>
                   <p class="slider__review">La misión de la cuarta generación de la familia Levoni es una: continuar buscando la excelencia absoluta en la producción de una amplia variedad de embutidos, todos de la más alta calidad, todos portavoces de la gran tradición gastronómica y vinícola italiana.</p>
               </div>

               <figure class="slider__picture">
                   <img src="images/levoni.png" class="slider__img">
               </figure>
           </section>  <section class="slider__body" data-id="3">
            <div class="slider__texts">
               <h2 class="slider__name" >Gentile</h2>
               <p class="slider__review">El Pastificio Gentile, fundado en 1876, es uno de los históricos elaboradores artesanales que han permanecido en la ciudad de Gragnano, famosa en todo el mundo por su pasta. Gentile conserva aún hoy en día, en la era de las nuevas tecnologías, los métodos artesanales, la atención a cada detalle, la selección de las mejores materias primas y el control de todas las fases ligadas a la producción. Productos de altísima calidad respetando siempre los dictámenes que en el pasado han hecho de la pasta de Gragnano la mejor del mundo: el uso de sémolas preciadas y el secado a baja temperatura.</p>
           </div>

           <figure class="slider__picture">
               <img src="images/gentile.png" class="slider__img">
           </figure>
       </section>  <section class="slider__body" data-id="4">
        <div class="slider__texts">
           <h2 class="slider__name" >Mozzarela</h2>
           <p class="slider__review">Somos una empresa que nunca se ha detenido desde 1978, que continúa buscando la calidad del producto y la excelencia en los estándares de producción. Contamos con décadas de experiencia, la mozzarella de leche de vaca sigue siendo el producto estrella, pero en los últimos años algunas producciones, antes de nicho, se han mejorado para satisfacer las necesidades cada vez más específicas de los clientes.</p>
       </div>

       <figure class="slider__picture">
           <img src="images/mozzarela.png" class="slider__img">
       </figure>
   </section>    
            <img src="images/r_arrow.svg" class="slider__flecha" id="next">  
        </div>
    </section>

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


    <script src="./js/slider.js"></script>
   
</body>
</html>