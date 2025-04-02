<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>

    <main class="contenedor seccion top">
    <!-- //propiedad para centrar a 800px contenido-centrado -->
        <h1>Planos</h1>
        
        <p >Planos con información técnica detallada para piezas de fabricación, proyectos e ingeniería inversa. Los servicios de planos están estandarizados en nuestra página de clientes.</p><br>
        
        <p class="precio">Plano de una estanteria</p>
        <picture class="division">
            <!-- <source srcset="build/img/destacada.webp" type="image/webp"> -->
            <source srcset="build/img/plano4.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/plano4.jpg" alt="casa">

        </picture>
        <?php 
            $limite = 3;
            include "includes/templates/anuncios.php";
        ?>
       
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