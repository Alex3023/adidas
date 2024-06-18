<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deporte</title>
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
            <h1 class="oswald300 text-black" id="titlezapa">ADIDAS PERFORMANCE</h1>
            <p class="oswald200" style="font-size: 20px;">Conoce todo el catálogo de lo mejor en deporte en adidas, ropa con el
                diseño y tecnología de la marca de las tres rayas.</p>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/buzo-aeroready-sereno-cut-3-tiras.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Buzo AEROREADY</h5>
                                <p class="text-secondary oswald200">Hombre Training</p>

                                S/. 279.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-30%
                        </div>

                        <img class="card-img-top" src="./images/camiseta-local-seleccion-peruana-2024-adulto.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Camiseta Local Selección Peruana 2024 Adulto</h5>
                                <p class="text-secondary oswald200">Hombre Fútbol</p>

                                <span class="text-muted text-decoration-line-through">S/. 259.00</span>
                                S/. 181.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-30%
                        </div>

                        <img class="card-img-top" src="./images/camiseta-local-seleccion-peruana-2024-ninos.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Camiseta Local Selección Peruana 2024 Niños</h5>
                                <p class="text-secondary oswald200">Niño Fútbol</p>

                                <span class="text-muted text-decoration-line-through">S/. 209</span>
                                S/. 146.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/camiseta-local-real-madrid-23-24.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Camiseta Local Real Madrid 23/24</h5>
                                <p class="text-secondary oswald200">Hombre Fútbol</p>

                                S/. 329.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-30%
                        </div>

                        <img class="card-img-top" src="./images/camiseta-titular-sporting-cristal-2024.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Camiseta Titular Sporting Cristal 2024</h5>
                                <p class="text-secondary oswald200">Hombre Fútbol</p>

                                <span class="text-muted text-decoration-line-through">S/.229.00</span>
                                S/. 160.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/camiseta-visitante-seleccion-peruana-2024-adulto.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Camiseta Visitante Selección Peruana 2024 Adulto</h5>
                                <p class="text-secondary oswald200">Hombre Fútbol</p>

                                S/. 259.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-45%
                        </div>

                        <img class="card-img-top" src="./images/casaca-corta-viento-con-capucha-own-the-run.avif"
                            alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Casaca Corta Viento con Capucha Own the Run</h5>
                                <p class="text-secondary oswald200">Mujer Running</p>

                                <span class="text-muted text-decoration-line-through">S/. 259.00</span>
                                S/. 130.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/chimpunes-f50-elite-sin-pasadores-fast-reborn-terreno-firme.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Chimpunes F50 Elite Sin Pasadores Fast Reborn Terreno Firme</h5>
                                <p class="text-secondary oswald200">Fútbol</p>

                                S/.1,199.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/chimpunes-x-crazyfast-league-pasto-sintetico.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Chimpunes X CRazyfast League Pasto Sintético</h5>
                                <p class="text-secondary oswald200">Fútbol</p>

                                S/. 359.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/chimpunes-x-crazyfast.4-pasto-sintetico.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Chimpunes X Crazyfast.4 Pasto Sintético</h5>
                                <p class="text-secondary oswald200">Fútbol</p>

                                S/. 259.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/medias-acolchadas-al-tobillo-sportswear-6-pares.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Medias Acolchadas al Tobillo Sportswear 6 Pares</h5>
                                <p class="text-secondary oswald200">Training</p>

                                S/. 59.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./images/polo-con-cuello-seleccion-peruana-2024.avif" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder oswald400">Polo con cuello Selección Peruana 2024</h5>
                                <p class="text-secondary oswald200">Hombre Fútbol</p>

                                S/. 229.00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto oswald300" href="#">AÑADIR
                                    AL CARRITO</a></div>
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
                <a class="btn btn-outline-dark mt-auto bg-black text-white link-secondary link-underline-opacity-100-hover fw-bolder oswald300"
                    href="#">REGÍSTRATE GRATIS</a>
            </div>
        </div>
    </div>

    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
