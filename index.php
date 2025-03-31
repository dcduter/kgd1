
<?php 
require "includes/funciones.php";

incluirTemplate('header', $inicio = true);
?>
    <h1 class="parrafo">Diseño Mecanico Profesional</h1>
     <!-- enlace a whatsapp -->
     <a href="https://api.whatsapp.com/send?phone=+3150001120&text=Quiero%20m%C3%A1s%20informaci%C3%B3n" target="_blank" class="float">
        
        <img src="build/img/5305167_call_chat_mobile_whatsapp_whatsapp logo_icon.png" alt="icono de whatsapp">
    </a>
    <!-- fin enlace a whatsapp -->
    <main class="contenedor seccion">
            <h2 class="parrafo">Más Sobre Nosotros</h2>
            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                    <h3 class="parrafo">seguridad</h3>
                    <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates, iusto laboriosam deleniti veritatis molestiae! Unde, quae perspiciatis esse ipsum omnis iusto quia mollitia atque placeat quis, exercitationem animi. At.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="icono seguridad" loading="lazy">
                    <h3 class="parrafo">Precio</h3>
                    <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates, iusto laboriosam deleniti veritatis molestiae! Unde, quae perspiciatis esse ipsum omnis iusto quia mollitia atque placeat quis, exercitationem animi. At.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="icono seguridad" loading="lazy">
                    <h3 class="parrafo">A Tiempo</h3>
                    <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates, iusto laboriosam deleniti veritatis molestiae! Unde, quae perspiciatis esse ipsum omnis iusto quia mollitia atque placeat quis, exercitationem animi. At.</p>
                </div>
            </div> 
        <!-- <p>Imagen de <a href="https://www.freepik.es/vector-gratis/fondo-abstracto-blanco_12066094.htm#query=fondo%20gris&position=0&from_view=keyword&track=ais_hybrid&uuid=a06748ff-4107-4b42-9be5-075fdb4eb75b"></a></p> -->
    </main>
    <section class="seccion contenedor">
        <h2 class="parrafo">Servicios</h2>
        <div class="contenedor-anuncios">
            <div class="anuncios">
                <picture>
                    <source srcset="build/img/Mano implante biomedico .webp" type="image/webp">
                    <source srcset="build/img/Mano implante biomedico .jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/Mano implante biomedico .jpg" alt="anuncio">
                </picture>
                <div class="contenedor-anuncio">
                    <h3>Implante de Mano</h3>
                    <p>Diseño de uno protesis para la mano derecha</p>
                    <p class="precio">Precio: $20000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/cogwheel_idea_icon.png" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/measurement_ruler_tape_icon.png" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/geometry_icon.png" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>
                    <a class="boton boton-amarillo" href="anuncios.php">
                        Más información
                    </a>
                </div>
            </div>
            <div class="anuncios">
                <picture>
                    <source srcset="build/img/Modelado 3 - copia.webp" type="image/webp">
                    <source srcset="build/img/Modelado 3 - copia.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/Modelado 3 - copia.jpg" alt="anuncio">
                </picture>
                <div class="contenedor-anuncio">
                    <h3>Modelado 3D</h3>
                    <p>Modelado de una pieza metalica</p>
                    <p class="precio">Precio: $40000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/cogwheel_idea_icon.png" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/measurement_ruler_tape_icon.png" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/geometry_icon.png" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>
                    <a class="boton boton-amarillo" href="anuncios.php">
                        Más información
                    </a>
                </div> <!--.contenedor-anuncio-->
            </div><!--anuncio-->
            <div class="anuncios">
                <picture>
                    <source srcset="build/img/Ensamble 2 - copia.webp" type="image/webp">
                    <source srcset="build/img/Ensamble 2 - copia.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/Ensamble 2 - copia.jpg" alt="anuncio">
                </picture>
                <div class="contenedor-anuncio">
                    <h3>Ensamble</h3>
                    <p>Ensamble para una pieza de una motocicleta</p>
                    <p class="precio">Proyeco Personalizado</p><br>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/cogwheel_idea_icon.png" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/measurement_ruler_tape_icon.png" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/geometry_icon.png" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>
                    <a class="boton boton-amarillo" href="anuncios.php">
                        Más información
                    </a>
                </div> <!--.contenedor-anuncio-->
            </div><!--anuncio-->

        </div><!--.conteneder-anuncios-->

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
            <h3 class="parrafo">Nuestro Blog</h3>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/pexels-pixabay-48799.webp" alt="texto entrado blog">
                </div>
                <div class="texto-entrada">
                    <a href="temas_interes.php">
                        <h4 class="parrafo">Temas de interes</h4>
                        <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
                        <p class="parrafo">
                            conoce la tecnologia de ultima generacion en la industria
                        </p>
                    </a>
                </div>
            </article>
        </section> <!-- blog -->
        <section class="testimoniales">
            <h3 class="parrafo">Opiniones</h3>
            <div class="testimonial">
                <blockquote>
                    <p class="parrafo">Excelente servicio, muy profesional y amable, los tiempos de entrega son rapidos</p>
                </blockquote>
                <p>-Juan Cifuentes</p>
            </div>
        </section>
    </div> <!-- contenedor seccion -->

    <?php incluirTemplate('footer'); ?>