<!doctype html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="/js/script.js"></script>
        <!-- Estilos personalizados -->
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
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-black fixed-top d-flex align-items-center justify-content-center py-2">
        <p class="text-white fs-6" data-section="header" data-value="headerPrincipal">🔥EL TRACKPANT QUE BUSCAS ESTA ACÁ</p>
    </nav>

    <!-- Mobile Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mt-5 align-items-center justify-content-around py-2 d-lg-none">
        <div class="d-flex align-items-between gap-3">
            <button id="botonMenu" class="navbar-toggler" type="button">
                <i class="fa-solid fa-bars" style="color: #121211;"></i>
            </button>
            <div>
                <i class="fa-regular fa-heart fa-lg" style="color: #121211;"></i>
            </div>
        </div>
        <div>
            <a href="inicio" class="navbar-brand"><img src="/imgs/Logo Adidas Chico.png" alt=""></a>
        </div>
        <div class="d-flex align-items-between gap-4 mt-3">
            <div>
                <a  class="fa-regular fa-user fa-lg" style="color: #121211;"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                </a>
            </div>
            <div>
                <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #121211;"></i>
            </div>
            <div>
                <i class="fa-solid fa-bag-shopping fa-lg" style="color: #121211;"></i>
            </div>
        </div>
    </nav>

    <div id="menu" class="d-lg-none">
        <div class="d-flex justify-content-between">
            <div class="ps-3 pt-3">
                <a href="inicio"><img src="/imgs/Logo Adidas Chico.png" alt=""></a>
            </div>
            <div id="cerrar" class="hover pe-3 pt-3">
                <i class="fa-solid fa-x fa-lg" style="color: #121211;"></i>
            </div>
        </div>
        <ul class="navbar-nav mb-2">
            <li class="nav-item py-2">
                <a class="nav-link ps-4" href="calzado">CALZADO</a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link ps-4" href="mujer">MUJER</a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link ps-4" href="hombre">HOMBRE</a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link ps-4" href="">NIÑOS</a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link ps-4" href="deporte">DEPORTE</a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link ps-4" href="">MUNDO ADIDAS</a>
            </li>
        </ul>
    </div>

    <div id="backdrop" class="backdrop"></div>

    <!-- Desktop Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mt-5 align-items-center justify-content-around py-2 d-none d-lg-flex">
        <div>
            <a href="inicio" class="navbar-brand"><img src="./imgs/Logo Adidas Chico.png" alt=""></a>
        </div>
        <div class="d-flex align-content-center gap-3">
            <a class="link-underline-dark text-black link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover" href="calzado">CALZADO</a>
            <a class="link-underline-dark text-black link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover" href="mujer">MUJER</a>
            <a class="link-underline-dark text-black link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover" href="hombre">HOMBRE</a>
            <a class="link-underline-dark text-black link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover" >NIÑOS</a>
            <a class="link-underline-dark text-black link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover" href="deporte">DEPORTE</a>
            <a class="link-underline-dark text-black link-offset-2 link-offset-3-hover  link-underline-opacity-0 link-underline-opacity-75-hover">MUNDO ADIDAS</a>
        </div>
        <div>
            <form class="d-flex align-items-center">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #121211;"></i>
                </button>
            </form>
        </div>
        <div class="d-flex align-items-between gap-4">
            <div>
                <a  class="fa-regular fa-user fa-lg" style="color: #121211;"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                </a>
            </div>
            <div>
                <i class="fa-regular fa-heart fa-lg" style="color: #121211;"></i>
            </div>
            <div>
                <i class="fa-solid fa-bag-shopping fa-lg" style="color: #121211;"></i>
            </div>
        </div>
    </nav>
     <br><br><br><br>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content container">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/imgs/modal.svg" alt="">
                    <h3 class="py-2 ">TUS BENEFICIOS DE ADICLUB TE ESPERAN</h3>
                    <p>Realiza pedidos sin gastos de envío, consigue códigos descuento y productos exclusivos en adiClub.</p>
                    Inicia sesión o regístrate. ¡Es gratis!

                    <div class="py-3">
                        <input type="text" class="form-control" placeholder="Correo Electrónico" aria-label="Correo Electrónico">
                    </div>
                    <p>¡Nunca te pierdas nada gracias a los anuncios personalizados de adidas en los medios digitales! Estate atento a las
                    últimas promociones, productos y noticias de adidas.</p>

                    <div class="py-2 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Me gustaría recibir noticias sobre productos y servicios de adidas. Consiento recibir mensajes de marketing
                            personalizados por correo electrónico de adidas Perú S.A.C. ("adidas"). <a href="">Leer más.</a>
                        </label>
                    </div>
                    <div class="py-2 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            He leído y acepto los Términos y Condiciones del adiClub y la Política de Privacidad de adidas. <a href="">Leer más.</a>

                        </label>
                    </div>
                    <div class="pb-2 pt-3 text-center"><a class="btn btn-outline-dark " href="#">Registrarme</a></div>

                </div>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>
