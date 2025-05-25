<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>

    <main class="contenedor seccion top">
    <!-- //propiedad para centrar a 800px contenido-centrado -->
        <h1>Ingeniería Inversa</h1>
        
        <p >Realizamos proyectos mediante muestras fabricadas, generando planos, modelados 3D y documentos de información técnica a la disposición del cliente.</p>

        <!-- <p >Se realiza con el fin de obtener información o un diseño a partir de un producto u objeto, con el fin de determinar cuáles son sus componentes y de qué manera interactúan entre sí y cuál fue el proceso de fabricación.</p> -->
         <p class="precio">Aplicacion de ingeniería inversa a un tanque de almacenamiento de agua.</p>
        <picture class="division">
            <!-- <source srcset="build/img/destacada.webp" type="image/webp"> -->
            <source srcset="build/img/IMG-20241010-WA0000.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/IMG-20241010-WA0000.jpg" alt="casa">

            
        </picture>
   
        <?php 
            $limite = 3;
            include "includes/templates/anuncios.php";
        ?>

        <!-- <section class="listado-precios" >
            <h3>Listado de Precios</h3>
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
        </section> -->
    </main>
    <?php incluirTemplate('footer'); ?>