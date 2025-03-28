document.addEventListener('DOMContentLoaded', function() {
    addEventListener();
});

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