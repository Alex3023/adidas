<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="./script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <style>

            #menu {
                position: fixed;
                top: 0;
                left: -100%;
                height: 100%;
                width: 250px;
                background-color: #fff;
                transition: left 0.3s ease-in-out;
                z-index: 1050;
            }
            #menu.open {
                left: 0;
            }

            .backdrop {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                display: none;
                z-index: 1040;
            }
            .backdrop.show {
                display: block;
            }

            .navbar-toggler.text-link {
                border: none;
                background: none;
                padding: 0;
                font-size: 1rem;
                cursor: pointer;
            }

            .navbar-toggler.text-link:focus {
                outline: none;
                box-shadow: none;
            }
            .footer-toggler {
                border: none;
                background: none;
                padding: 0;
                font-size: 1.25rem;
                cursor: pointer;
                color: #fff;
            }

            .footer-toggler:focus {
                outline: none;
                box-shadow: none;
            }
            .card:hover {
                transform: scale(1.01);
                transition: transform 0.5s ease;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .footer-toggler:hover {
                transform: scale(1.05);
                font-size: 1.25rem;
            }
            a:hover, #cerrar:hover, img:hover {
                cursor: pointer;
            }

            .oswald400 {
                font-family: "Oswald", sans-serif;
                font-optical-sizing: auto;
                font-weight: 400;
                font-style: normal;
            }

            .oswald300 {
                font-family: "Oswald", sans-serif;
                font-optical-sizing: auto;
                font-weight: 300;
                font-style: italic;
            }

            .oswald200 {
                font-family: "Oswald", sans-serif;
                font-optical-sizing: auto;
                font-weight: 200;
                font-style: normal;
            }

            .overlay-container {
                position: relative;
                text-align: center;
            }
            .overlay-container img {
                width: 100%;
                height: auto;
                display: block;
            }
            .overlay-container .container {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, 20%);
                z-index: 1;
            }

            .overlay-container .container2 {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-90%, -50%);
                z-index: 1;
            }
    </style>

</head>

<body>
    @extends('layout.plantilla')

    @section('contenido')

    <header class=" bg-black py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5  text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2 oswald400">Supera tus límites con Adidas</h1>
                        <p class="lead fw-normal text-white-50 mb-4 oswald300">Descubre la innovación en cada paso.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                        src="./images/Messi.jpg" alt="..." /></div>
            </div>
        </div>
    </header>
    <section id="productos" class="container my-5">
        <h4 class="text-center oswald300 fw-bolder py-3">SIENTE LA BICOLOR</h4>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper1.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald300">Camiseta Local Selección Peruana 2024 Adulto</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 259.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper2.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald400">Camiseta Visitante Selección Peruana 2024 Adulto</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 259.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper3.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald400">Camiseta Local Selección Peruana 2024 Mujer</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 259.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper4.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald400">Camiseta Visitante Selección Peruana 2024 Mujer</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 259.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper5.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald400">Camiseta Local Selección Peruana 2024 Niños</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 209.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper6.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald400">Camiseta Local Selección Peruana 2024 Niños</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 209.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper7.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald400">Shorts Local Selección Peruana 2024</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 169.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col mb-5">
                    <div class="card h-100 border-secondary-subtle border-3" style="width: 350px;">

                        <img class="card-img-top" src="./images/swipper8.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <p class="fw-bolder oswald400">Shorts Visitante Selección Peruana 2024</p>
                                <p class="text-secondary oswald200">Ropa</p>

                                S/. 169.00
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="overlay-container text-start d-none d-lg-flex">
            <img src="./images/co_dia_del_nino_horizontal_ss24_launch_kglp_banner_d_da8a72034b.gif" class="img-fluid" alt="Fondo">
            <div class="container2" style="z-index: 1;">
                <h3 class="text-white">🍭LO MEJOR PARA LOS PEQUEÑOS</h3>
                <h3 class="text-white">DE LA CASA</h3>
                <p class="text-white">Moda divertida y cómoda con calzado, ropa y accesorios para cada etapa y actividad.</p>
                <a href="#productos" class="btn btn-light btn-lg text-black">COMPRAR AHORA
                    <i class="fa-solid fa-arrow-right fa-lg" style="color: #121211;"></i>
                </a>
            </div>
        </div>

        <div class="overlay-container text-start d-lg-none">
            <img src="./images/co_dia_del_nino_horizontal_ss24_launch_kglp_banner_m_d8db3a81e2.gif" class="img-fluid" alt="Fondo">
            <div class="container" style="z-index: 1;">
                <h3 class="text-white">🍭LO MEJOR PARA LOS PEQUEÑOS DE LA CASA</h3>
                <p class="text-white">Moda divertida y cómoda con calzado, ropa y accesorios para cada etapa y actividad.</p>
                <a href="#productos" class="btn btn-light btn-lg text-black">COMPRAR AHORA
                    <i class="fa-solid fa-arrow-right fa-lg" style="color: #121211;"></i>
                </a>
            </div>
        </div>
    </section>


    <section id="nosotros" class="py-5" style="background-color: #f5f5e5;">
        <div class="container" style="background-color: #f5f5e5;">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-black">HISTORIA, MODA Y ROPA DEPORTIVA ADIDAS DESDE 1949</h2>
                    <p class="text black">El deporte nos mantiene en forma. Te mantiene atento. Nos une. A través del deporte podemos cambiar vidas. Ya sea a
                    través de historias de atletas inspiradores. Animándote a ponerte en marcha. Ofreciéndote artículos deportivos con las
                    últimas tecnologías para mejorar tu rendimiento. Supera tu mejor marca personal. adidas es el hogar del corredor, del
                    jugador de básquet, del joven futbolista y del entusiasta del fitness. Del aventurero que escapa de la ciudad los fines
                    de semana. De la instructora de yoga que enseña nuevas posturas. Las 3 Tiras se ven en el mundo de la música. En el
                    escenario, en los festivales. Nuestra ropa deportiva para mujer y para hombre te mantiene concentrado antes de que suene
                    el silbato. Durante la carrera. Y en la línea de meta. Estamos aquí para apoyar a los creadores. Mejorar su juego. Sus
                    vidas. Y cambiar el mundo.

                    adidas es mucho más que ropa deportiva y ropa de entrenamiento. Nos asociamos con los mejores de la industria para
                    co-crear. De esta manera, ofrecemos a nuestras seguidores la ropa deportiva y los estilos que mejor se adaptan a sus
                    necesidades deportivas, sin dejar de lado la sostenibilidad. Apoyamos a los creadores Mejorar su juego. Creamos el
                    cambio. Y pensamos en el impacto que tenemos en nuestro mundo.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-black">TU TIENDA DEPORTIVA PARA CUALQUIER DEPORTE</h2>
                    <p class="text black">adidas diseña ropa deportiva para atletas de todo tipo. Creadores que disfrutan de cambiar las reglas del juego.
                    Desafiar las convenciones. Romper las normas y definir nuevas. Y volverlas a romper. Confeccionamos la ropa sport que
                    visten equipos y jugadores individuales en preparación para el partido. Para que no pierdan la concentración. Diseñamos
                    indumentaria deportiva para que llegues a la meta. Para que ganes el partido. Nuestras tiendas deportivas ofrecen
                    atuendos para mujeres, con tops deportivos y licras diseñados con un objetivo en mente. Para deportes de impacto bajo,
                    medio o alto. Diseñamos, innovamos e inspiramos. Ponemos a prueba nuevas tecnologías. En el campo, en la cancha, en la
                    pista, en la piscina. La ropa deportiva retro inspira nuevos elementos esenciales de la ropa urbana. Como las NMD y los
                    buzos Firebird. Los modelos deportivos clásicos vuelven a la vida. Como las Stan Smith y las Superstar. Ahora en todas
                    las calles y en los escenarios más destacados.

                    A través de nuestras colecciones eliminamos las barreras entre la moda de alta costura y el mejor rendimiento. Por
                    ejemplo, nuestra colección de ropa deportiva adidas by Stella McCartney está pensada para ofrecer un look sofisticado
                    dentro y fuera del gimnasio. O algunas de nuestras prendas de estilo urbano adidas Originals también pueden usarse como
                    ropa deportiva. Nuestras vidas están cambiando constantemente. Cada vez son más versátiles. Y en adidas diseñamos
                    pensando en eso.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-4">
        <h4 class="text-center oswald300 py-3">Encuentra a tu equipo</h4>
        <div class="d-inline-block py-4 d-lg-flex justify-content-center">
            <img src="./images/fpf.avif" alt="" class="pt-3">
            <img src="./images/cristal.png" alt="" class="pt-3">
            <img src="./images/river.png" alt="" class="pt-3">
            <img src="./images/boca.avif" alt="" class="pt-3">
            <img src="./images/arsenal" alt="" class="pt-3">
            <img src="./images/madrid.png" alt="" class="pt-3">
            <img src="./images/mun.png" alt="" class="pt-3">
            <img src="./images/juventus.png" alt="" class="pt-3">
            <img src="./images/muchen.png" alt="" class="pt-3">
        </div>
    </div>


    <!-- Enlace al JS de Bootstrap y dependencias de jQuery y Popper.js -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                depth: 600,
                modifier: 2,
                slideShadows: true,
                rotate: 0,
                stretch: 0
            }
        })
    </script>

    @endsection
</body>

</html>
