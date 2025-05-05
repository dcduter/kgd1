
<?php 
require "includes/app.php";

incluirTemplate('header', $inicio = true);
?>
    <main class="contenedor seccion">
            <h2 >Más Sobre Nosotros</h2>
            <div class="iconos-nosotros">
                <!-- <div class="icono">
                    <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                    <h4>seguridad</h4>
                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates, iusto laboriosam deleniti veritatis molestiae! Unde, quae perspiciatis esse ipsum omnis iusto quia mollitia atque placeat quis, exercitationem animi. At.</p>
                </div> -->
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="icono seguridad" loading="lazy">
                    <h4>Precio</h4>
                    <p >Nuestros precios son los mas competitivos para cualquier diseño o ensamble 3D.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="icono seguridad" loading="lazy">
                    <h4>A Tiempo</h4>
                    <p >Contamos con un equipo de profesionales altamente calificados para brindarte un servicio de calidad.</p>
                </div>
            </div> 
        <!-- <p>Imagen de <a href="https://www.freepik.es/vector-gratis/fondo-abstracto-blanco_12066094.htm#query=fondo%20gris&position=0&from_view=keyword&track=ais_hybrid&uuid=a06748ff-4107-4b42-9be5-075fdb4eb75b"></a></p> -->
    </main>
    <section class="seccion contenedor">
        <h2 >Servicios</h2>
        <?php 
            $limite = 3;
            include "includes/templates/anuncios.php";
        ?>

        <div class="ver-todas">
            <a class="boton-verde" href="anuncios.php">Todos</a>
        </div>
    </section> <!--seccion contenedor-->

    <section class="imagen-contacto">
        <h2 class="titulo">Soluciones a tu alcance</h2>
        <p>Llena el formulario de contacto y nos comunicaremos contigo lo antes posible</p>
        <a class="boton-amarillo-contacto" href="contacto.php">Contactános</a>
    </section> <!-- imagen-contacto -->

       
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h2 >Nuestro Blog</h2>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/pexels-pixabay-48799.webp" alt="texto entrado blog">
                </div>
                <div class="texto-entrada">
                    <a href="temas_interes.php">
                        <h4 >Temas de interes</h4>
                        <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
                        <p >
                            conoce la tecnologia de ultima generacion en la industria
                        </p>
                    </a>
                </div>
            </article>
        </section> <!-- blog -->
        <section class="testimoniales">
            <h2 >Opiniones</h2>
            <div class="testimonial">
                <blockquote>
                    <p >Excelente servicio, muy profesional y amable, los tiempos de entrega son rapidos</p>
                </blockquote>
                <p>-Juan Cifuentes</p>
            </div>
        </section>
    </div> <!-- contenedor seccion -->

    <?php incluirTemplate('footer'); ?>