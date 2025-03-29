<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>

    <main class="contenedor seccion">
    <!-- //propiedad para centrar a 800px contenido-centrado -->
        <h1>Ingeniería Inversa</h1>
        
        <p class="parrafo">Realizamos proyectos mediante muestras fabricadas, generando planos, modelados 3D y documentos de información técnica a la disposición del cliente.</p>

        <!-- <p class="parrafo">Se realiza con el fin de obtener información o un diseño a partir de un producto u objeto, con el fin de determinar cuáles son sus componentes y de qué manera interactúan entre sí y cuál fue el proceso de fabricación.</p> -->
         <p class="precio">Aplicacion de ingeniería inversa a un tanque de almacenamiento de agua.</p>
        <picture class="division">
            <!-- <source srcset="build/img/destacada.webp" type="image/webp"> -->
            <source srcset="build/img/IMG-20241010-WA0000.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/IMG-20241010-WA0000.jpg" alt="casa">

            <ol class="precio"></ol>
        </picture>
   
        <div class="resumen-propiedad">
        
        </div>
        <div class="contenedor-anuncios">
            <section class="anuncios">
        
                <picture>
                    <!-- <source srcset="build/img/anuncio3.webp" type="image/webp"> -->
                    <source srcset="build/img/Analisis de Esfuerzos - copia.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/Analisis de Esfuerzos - copia.jpg" alt="anuncio">
                </picture>
            </section>
        
            <section class="anuncios">
        
                <picture>
                    <!-- <source srcset="build/img/anuncio3.webp" type="image/webp"> -->
                    <source srcset="build/img/Ensambles - copia.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/Ensambles - copia.jpg" alt="anuncio">
                </picture>
            </section>
        
            <section class="anuncios">
        
        
                <picture>
                    <!-- <source srcset="build/img/anuncio3.webp" type="image/webp"> -->
                    <source srcset="build/img/Sistema Biomedico.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/Sistema Biomedico.jpg" alt="anuncio">
                </picture>
            </section>
        
            <section class="anuncios">
        
                <picture>
                    <!-- <source srcset="build/img/anuncio3.webp" type="image/webp"> -->
                    <source srcset="build/img/modeladod 3d.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/modeladod 3d.jpg" alt="anuncio">
                </picture>
            </section>
            <section class="anuncios">
        
                <picture>
                    <!-- <source srcset="build/img/anuncio3.webp" type="image/webp"> -->
                    <source srcset="build/img/Modelado 1 - copia.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/Modelado 1 - copia.jpg" alt="anuncio">
                </picture>
            </section>
        </div>

        <section class="listado-precios" >
            <h2>Listado de Precios</h2>
            <div class="contenedor-listado">
                <div class="precio">
                    <h3>Modelado Básisco  + Plano (Modo Básico) $20.000</h3>
                </div>
                <div class="precio">
                    <h3>4 Piezas Modeladas + Ensable (Estándar) $40.000</h3>
                </div>
                <div class="precio">
                    <h3>Modelado de Piezas + Ensamble Plano (Premiun) $80.000</h3>
                </div>
                <div class="precio">
                    <h3>Proyectos Personalizados</h3>
                </div>

            </div>
        </section>
    </main>
    <?php incluirTemplate('footer'); ?>