<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <!-- <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg"> -->
                    <img loading="lazy" src="build/img/Simbolo KGD.png" alt="imagen sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    <p class="parrafo">Más de 7 años de experiencia</p>
                </blockquote>
                <p class="parrafo">Somos un emprendimiento que se enfoca en el área de diseño mecánico, en el cual mediante software CAD generamos piezas y ensamblajes, respecto a las necesidades de nuestros clientes. </p>
                <p class="parrafo">También nos especializamos en desarrollar planos de piezas mecánicas aplicando el concepto de Ingeniera Inversa.</p>
                <p class="parrafo">Trabajamos para empresas en diferentes campos de mecánica, y también en el área universitaria.</p>
            </div>
        </div> <br><br><!-- contenido-nosotros -->
       
        <section>
            
            <!-- <div class="imagen">
              
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/Simbolo KGD.png" alt="imagen sobre nosotros">
                </picture>
            </div> -->
            <div class="texto-nosotros">
                <h3 class="parrafo">Trabajos universitarios</h3>
              
                <p class="parrafo">Hemos realizado trabajos para el área biomédica enfocados en implantes médicos, estudios de esfuerzos, planos y modelados sencillos en 3D. </p>

                <h3 class="parrafo">Trabajos Empresariales </h3>
              
                <p class="parrafo">Realizando proyectos en el área de la industria farmacéutica, metalmecánica. Donde todos nuestros servicios de diseño están incluidos.  </p>
               
            </div>
        </section> <!-- contenido-nosotros -->


    </main>

    <!-- <section class="contenedor seccion">
        <h1>Galeria</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates, iusto laboriosam deleniti veritatis molestiae! Unde, quae perspiciatis esse ipsum omnis iusto quia mollitia atque placeat quis, exercitationem animi. At.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates, iusto laboriosam deleniti veritatis molestiae! Unde, quae perspiciatis esse ipsum omnis iusto quia mollitia atque placeat quis, exercitationem animi. At.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono seguridad" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates, iusto laboriosam deleniti veritatis molestiae! Unde, quae perspiciatis esse ipsum omnis iusto quia mollitia atque placeat quis, exercitationem animi. At.</p>
            </div>
        </div>
    </section> -->
    <?php incluirTemplate('footer'); ?>