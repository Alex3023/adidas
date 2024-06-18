<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hombre</title>
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

<body class="oswald300">
    @extends('layout.plantilla')

    @section('contenido')

    <header id="home" class="text-center position-relativE">
        <img src="/imgs/hb.jpg" class="img-fluid w-100 h-auto" alt="Fondo" style="max-height: 60vh;">
    </header>

    <section id="nosotros" class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2 d-flex justify-content-center">
                    <img src="/imgs/hombrepresentacion.avif" class="img-fluid" alt="Nosotros">
                </div>

                <div class="col-lg-6 pb-4 order-lg-2 order-1 text-center text-lg-left">
                    <h2 class="fw-bolder oswald300">ROPA PARA HOMBRE</h2>
                    <p class="oswald300">¡Clásico, deportista, informal! No importa cuál sea tu estilo: en adidas, los polos de hombre se adaptan a tu rutina y
                    comodidad. Además, cuentan con la tecnología necesaria para cada circunstancia.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-1 oswald300">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="pb-4 oswald300">Nuestros Productos</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h1.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald300">Producto de Lujo</h5>

                                S/40.00 - S/80.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h2.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald300">Nuevo</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">S/20.00</span>
                                S/18.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h3.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald300">Artículo en oferta</h5>

                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center oswald300"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h4.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Popular</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                S/40.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h5.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Artículo en oferta</h5>

                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h6.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Producto de Lujo</h5>

                                $120.00 - $280.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h7.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Nuevo</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">S/20.00</span>
                                S/18.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h8.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Popular</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                S/40.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h9.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Artículo en oferta</h5>

                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h10.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Producto de Lujo</h5>

                                $120.00 - $280.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h11.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Nuevo</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">S/20.00</span>
                                S/18.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h12.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Popular</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                S/40.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h13.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Artículo en oferta</h5>

                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h14.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Producto de Lujo</h5>

                                $120.00 - $280.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h15.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Nuevo</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">S/20.00</span>
                                S/18.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h16.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Popular</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                S/40.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-1 bg-black bg-opacity-10">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="pb-4 ">MÁS POPULARES</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h2.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Producto de Lujo</h5>

                                S/40.00 - S/80.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver más</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h4.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Nuevo</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">S/20.00</span>
                                S/18.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>

                        <img class="card-img-top" src="/imgs/h8.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Artículo en oferta</h5>

                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="/imgs/h15.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Popular</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                S/40.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="yellowper bg-yellow text-center">
        <h2 class="text-black pt-5 fw-bolder oswald400">ÚNETE AL CLUB Y RECIBE 300 PUNTOS DE BIENVENIDA</h2>
        <div class="card-footer pt-0 border-top-0">
            <div class="text-center pb-5 pt-3">
                <a class="btn btn-outline-dark mt-auto bg-black text-white link-secondary link-underline-opacity-100-hover fw-bolder oswald300"
                    href="#">REGÍSTRATE GRATIS</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    @endsection
</body>
