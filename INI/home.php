<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
// Iniciar sesión en la página de inicio 🚀
session_start();

if (isset($_SESSION['nombre']) && isset($_SESSION['email'])) {
    $nombre = $_SESSION['nombre'];
    $email = $_SESSION['email'];
   
} else {
    // Si no se ha iniciado sesión, puedes redirigir al usuario a la página de inicio de sesión 🚧
    header("location:index.php");
}
?>

<header class="header">
        <div class="menu container">
            <a href="#" class="logo">Onthego</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="http://localhost/INI/tienda.html">Tienda</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Cabello</a></li>
                    <li><a href="#">Cuidado Facial</a></li>
                    <li><a href="#">Maquillaje</a></li>
                    <li><a href="#">Uñas</a></li>
                    <li><a href="http://localhost/INI/index.html">Cerrar Sesión</a></li>

                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img id="img-carrito" src="imagenes/car.svg" alt="car">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="Vaciar-carrito" class="btn-3">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <span>CONOCE Y DISFRUTA DE NUESTRA TIENDA</span>
                <h1>Ofertas especiales</h1>
                <p>PAGUE 2 LLEVE 3
                </p>
                <div class="butons">
                    <a href="#" class="btn-1">Informacion</a>
                    <a href="#" class="btn-1">Leer mas</a>
                </div>
            </div>
            <div class="header-img">
                <img src="imagenes/nuevos productos carrusel.png" alt="">

            </div>
        </div>
    </header>
    <section class="oferts container">
        <div class="ofert-1-b1">
            <div class="ofert-txt">
                <h3>Los mejores productos y servicios los encuentras con nosotros</h3>
                <a href="#">Leer mas</a>
            </div>
            <div class="ofert-img">
                <img src="imagenes/serum carussel.png" alt="">
            </div>

        </div>
        <div class="ofert-1 b2">
            <div class="ofert-txt">
                <h3>Los mejores productos y servicios los encuentras con nosotros</h3>
                <a href="#">Leer mas</a>
            </div>
            <div class="ofert-img">
                <img src="imagenes/como aplicar carrusel.png" alt="">
            </div>

        </div>

        <div class="ofert-1-b3">
            <div class="ofert-txt">
                <h3>Los mejores productos y servicios los encuentras con nosotros</h3>
                <a href="#">Leer mas</a>
            </div>
            <div class="ofert-img">
                <img src="imagenes/nuevos productos carrusel.png" alt="">
            </div>
        </div>
    </section>

    <main class="products container">
        <h2>Productos</h2>
        <div class="box-container" id="lista-1">

            <div class="box">
                <img src="imagenes/producto carbon.png" alt="">
                <div class="product-txt">
                    <h3>Carbon Activado</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$20,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/cepillo para el cabello.png" alt="">
                <div class="product-txt">
                    <h3>Cepillo para el cabello</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$10,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/espuma limpiadora.png" alt="">
                <div class="product-txt">
                    <h3>Espuma limpiadora</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$45,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/extractor de puntos negros.png" alt="">
                <div class="product-txt">
                    <h3>Extractor de puntos negros</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$50,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/Mascarilla de extracto de rosa.png" alt="">
                <div class="product-txt">
                    <h3>Extracto de rosa</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$30,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/corrector.png" alt="">
                <div class="product-txt">
                    <h3>corrector</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$25,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">
                        Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/cepillo secador.png" alt="">
                <div class="product-txt">
                    <h3>Cepillado secador</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$60,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/pestañina.png" alt="">
                <div class="product-txt">
                    <h3>Pestañina</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$18,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/pomada.png" alt="">
                <div class="product-txt">
                    <h3>Pomada</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$17,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="9">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/set de contorno de ojos.png" alt="">
                <div class="product-txt">
                    <h3>Set de contorno de ojos</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$40,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="10">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/agua micelar.png" alt="">
                <div class="product-txt">
                    <h3>Agua Micelar</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$14,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="11">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/Esmalte de brillo.png" alt="">
                <div class="product-txt">
                    <h3>Esmalte de brillo</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$9,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="12">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/Esponjas aplicadoras.png" alt="">
                <div class="product-txt">
                    <h3>Esponjas Aplicadoras</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$25,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="13">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/limpiador de brochas.png" alt="">
                <div class="product-txt">
                    <h3>Limpiador de Brochas</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$30,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="14">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/plancha Remington.png" alt="">
                <div class="product-txt">
                    <h3>Placnha Remington</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$150,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="15">
                        Agregar al carrito
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="imagenes/mascarilla colageno.png" alt="">
                <div class="product-txt">
                    <h3>Mascarilla de Cplageno</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">$20,000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="16">
                        Agregar al carrito
                    </a>
                </div>
            </div>
        </div>
        <div class="btn-2" id="load-more">Cargar Mas</div>
    </main>

    <section class="testimonial container">
        <span>Testimoniales</span>
        <h2>Que opina nuestros clientes</h2>
        <div class="Testimonial-content">
            <div class="Testimonial-1">
                <P>
                    Nuestra fuerza está en nuestro servicio y este depende de la satisfacción de nuestros clientes
                    Por tal motivo es importante para nosotros saber que tan satisfechos quedaron nuestros clientes
                    con nuestros servicios y la atención recibida.
                </P>
                <Img src="imagenes/starts.png" alt="">
                <h4>Excelente </h4>
            </div>
            <div class="Testimonial-1">
                <P>
                    Los productos los recibi en el tiempo estipulado y me encanto el servicio recibido por la pagina, gracias.
                </P>
                <Img src="imagenes/starts.png" alt="">
                <h4>Lorem ipsum </h4>
            </div>
        </div>
    </section>

    <footer class="footer">
        
        <div class="footer-content container">
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="Script.js"></script>
</body>

</html>