<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>
    <main class="contenedor seccion top">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <!-- <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg"> -->
                    <img loading="lazy" src="build/img/Simbolo-KGD.webp" alt="imagen sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    <p >Más de 7 años de experiencia</p>
                </blockquote>
                <p >Somos un emprendimiento que se enfoca en el área de diseño mecánico, en el cual mediante software CAD generamos piezas y ensamblajes, respecto a las necesidades de nuestros clientes. </p>
                <p >También nos especializamos en desarrollar planos de piezas mecánicas aplicando el concepto de Ingeniera Inversa.</p>
                <p >Trabajamos para empresas en diferentes campos de mecánica, y también en el área universitaria.</p>
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
                <h2 >Trabajos universitarios</h2>
              
                <p >Hemos realizado trabajos para el área biomédica enfocados en implantes médicos, estudios de esfuerzos, planos y modelados sencillos en 3D. </p>

                <h2 >Trabajos Empresariales </h2>
              
                <p >Realizando proyectos en el área de la industria farmacéutica, metalmecánica. Donde todos nuestros servicios de diseño están incluidos.  </p>
               
            </div>
        </section> <!-- contenido-nosotros -->


    </main>

    <?php incluirTemplate('footer'); ?>