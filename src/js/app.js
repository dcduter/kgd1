document.addEventListener('DOMContentLoaded', function() {
    addEventListener();

    darkMode();
});
// boton de cambio de tema
function darkMode() {
    const darkMode = document.querySelector('.dark-mode-boton'); // selecciona el boton de cambio de tema
    darkMode.addEventListener('click', function() { // agrega un evento de click
        document.body.classList.toggle('dark-mode'); // al dar click se agrega o quita la clase dark-mode
    });

    
}


function addEventListener (){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsibe, {

    })
}
function navegacionResponsibe () {
    
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}


function actualizarAnio() {
    // Obtener el elemento HTML que contiene el texto de derechos de autor
    const elementoCopyright = document.querySelector('.copyright');
    
    // Obtener el año actual
    const anioActual = new Date().getFullYear();
    
    // Actualizar el texto del elemento con el año actual
    elementoCopyright.textContent = `Todos los Derechos Reservados ${anioActual} ©`;
}

// Llamar a la función para actualizar el año al cargar la página
actualizarAnio(); 

// Agregar evento de scroll para el header
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (window.scrollY > 0) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});
