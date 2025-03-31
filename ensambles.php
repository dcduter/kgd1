<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>

    <main class="contenedor seccion">
    <!-- //propiedad para centrar a 800px contenido-centrado -->
        <h1>Modelado 3D y Ensamble</h1>
        
        <p class="parrafo">Realizamos proyectos mediante muestras fabricadas, generando planos, modelados 3D y documentos de información técnica a la disposición del cliente</p><br>

        <!-- <p class="parrafo">El modelado 3D con ensamble es una técnica en la que se crean representaciones tridimensionales de componentes individuales y se combinan en un ensamblaje completo. Este proceso permite visualizar cómo interactúan las piezas entre sí y evaluar el diseño antes de la fabricación. Las herramientas de software CAD (Diseño Asistido por Computadora) son comúnmente utilizadas para este propósito, facilitando la creación de modelos precisos y la simulación de movimientos y ensamblajes.</p><br> -->
        <p class="precio">Modelado con Ecuaciones</p>
        <picture class="division">
            <!-- <source srcset="build/img/destacada.webp" type="image/webp"> -->
            <source srcset="build/img/Modelado con ecuaciones - copia.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/Modelado con ecuaciones - copia.jpg" alt="casa">
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