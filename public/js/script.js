document.addEventListener('DOMContentLoaded', function () {
    const btnMenu = document.querySelector('#botonMenu');
    const btnCerrar = document.querySelector('#cerrar');
    const menu = document.querySelector('#menu');
    const backdrop = document.querySelector('#backdrop');

    btnMenu.addEventListener('click', function () {
        menu.classList.add('open');
        backdrop.classList.add('show');
    });

    btnCerrar.addEventListener('click', function () {
        menu.classList.remove('open');
        backdrop.classList.remove('show');
    });

    backdrop.addEventListener('click', function () {
        menu.classList.remove('open');
        backdrop.classList.remove('show');
    });
});