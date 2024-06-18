<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @media (min-width: 992px) {
            .navbar-mobile {
                display: none !important;
            }

            .navbar-desktop {
                display: flex !important;
            }
        }

        @media (max-width: 991.98px) {
            .navbar-desktop {
                display: none !important;
            }
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
            transform: scale(1.02);
            transition: transform 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer-toggler:hover {
            transform: scale(1.05);
            font-size: 1.25rem;
        }

        a:hover {
            cursor: pointer;
        }
    </style>
</head>

<body class="oswald300">
    <footer class="bg-black text-white mt-5  ">
        <div class="container">
            <div class="row py-5 px-3">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <button class="footer-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#aboutUs"
                        aria-expanded="false" aria-controls="aboutUs">
                        Acerca de nosotros
                    </button>
                    <div class="collapse" id="aboutUs">
                        <p class="small mt-4">Adidas diseña ropa deportiva para atletas de todo tipo. Creadores que
                            disfrutan de cambiar las reglas del juego.
                            Desafiar las convenciones. Romper las normas y definir nuevas. Y volverlas a romper.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <button class="footer-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#usefulLinks"
                        aria-expanded="false" aria-controls="usefulLinks">
                        Enlaces útiles
                    </button>
                    <div class="collapse" id="usefulLinks">
                        <ul class="list-unstyled small mt-4">
                            <li class="mb-1"><a href="#"
                                    class="link-underline-light text-white link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover ">Inicio</a>
                            </li>
                            <li class="mb-1"><a href="#"
                                    class="link-underline-light text-white link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover ">Servicios</a>
                            </li>
                            <li class="mb-1"><a href="#"
                                    class="link-underline-light text-white link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover ">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <button class="footer-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contact"
                        aria-expanded="false" aria-controls="contact">
                        Contacto
                    </button>
                    <div class="collapse" id="contact">
                        <ul class="list-unstyled small mt-4">
                            <li class="mb-1"><a href="mailto:info@ejemplo.com"
                                    class="link-underline-light text-white link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover ">info@ejemplo.com</a>
                            </li>
                            <li class="mb-1"><a href="tel:+1234567890"
                                    class="link-underline-light text-white link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover ">+1
                                    234 567 890</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black text-white text-center py-3">
            <p class="mb-0 small">© 2024 Guayacao. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
