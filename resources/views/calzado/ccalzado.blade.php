<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calzado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        .yellowper {
            background-color: #ede734;
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
    </style>
</head>

<body>
    @extends('layout.plantilla')

    @section('contenido')

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h1 class="oswald300 text-black" id="titlezapa">ZAPATOS ADIDAS: DEPORTIVOS Y URBANOS</h1>
            <p class="oswald200" style="font-size: 20px;">Conoce todo el catálogo de calzado adidas, zapatos con el diseño y
                tecnología de la marca de las tres rayas.</p>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/superstar-adv.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">SUPERSTAR ADV</h5>
                                <p class="text-secondary oswald200">Hombre Originals</p>

                                S/. 359.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-20%
                        </div>

                        <img class="card-img-top" src="./images/zapatillas-adidas-court-silk.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas adidas Court Silk</h5>
                                <p class="text-secondary oswald200">Mujer Sportswear</p>

                                <span class="text-muted text-decoration-line-through">S/. 259.00</span>
                                S/. 207.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-20%
                        </div>

                        <img class="card-img-top" src="./images/zapatillas-campus-00s (1).jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Campus 00s</h5>
                                <p class="text-secondary oswald200">Originals</p>

                                <span class="text-muted text-decoration-line-through">S/. 429.00</span>
                                S/.343.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/zapatillas-campus-00s.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Campus 00s</h5>
                                <p class="text-secondary oswald200">Originals</p>

                                S/. 429.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-30%
                        </div>

                        <img class="card-img-top" src="./images/zapatillas-rivalry-86-low.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Rivalry 86 Low</h5>
                                <p class="text-secondary oswald200">Hombre Originals</p>

                                <span class="text-muted text-decoration-line-through">S/.429.00</span>
                                S/. 300.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/zapatillas-samba-og.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Samba OG</h5>
                                <p class="text-secondary oswald200">Originals</p>

                                S/. 429.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-30%
                        </div>

                        <img class="card-img-top" src="./images/chimpunes-x-crazyfast-league-pasto-sintetico.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Chimpunes X Crazyfast League Pasto Sintético</h5>
                                <p class="text-secondary oswald200">Fútbol</p>

                                <span class="text-muted text-decoration-line-through">S/. 359.00</span>
                                S/. 251.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/zapatillas-rivalry-summer-low.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Rivalry Summer Low</h5>
                                <p class="text-secondary oswald200">Originals</p>

                                S/.429.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/zapatillas-campus-00s (2).jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Campus 00s</h5>
                                <p class="text-secondary oswald200">Originals</p>

                                S/. 429.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/zapatillas-koln-24.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Koln 24</h5>
                                <p class="text-secondary oswald200">Originals</p>

                                S/. 429.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/zapatillas-daily-3.0.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Daily 3.0</h5>
                                <p class="text-secondary oswald200">Sportswear</p>

                                S/. 269.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/zapatillas-originals-country-og.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Zapatillas Originals Country OG</h5>
                                <p class="text-secondary oswald200">Originals</p>

                                S/. 429.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-black text-center border">
        <h5 class="py-4 oswald400">
            <a class="link-underline link-underline-opacity-0 text-white" href="#titlezapa">VOLVER ARRIBA</a>
        </h2>
    </div>

    <div class="yellowper text-center">
        <h2 class="text-black pt-5 fw-bolder oswald400">ÚNETE AL CLUB Y RECIBE 300 PUNTOS DE BIENVENIDA</h2>
        <div class="card-footer pt-0 border-top-0">
            <div class="text-center pb-5 pt-3">
                <a class="btn btn-outline-dark mt-auto bg-black text-white link-secondary link-underline-opacity-100-hover fw-bolder oswald300" href="#">REGÍSTRATE GRATIS</a>
            </div>
        </div>
    </div>

    @endsection

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
