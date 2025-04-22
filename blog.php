<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>
    <main class="contenedor seccion top seccion-blog">
        <h1>Nuestros clientes</h1>

        <p>Trabajamos con personas de todas las industrias relacionadas con Ingeniería Mecánica. Hemos tenido clientes empresariales y universitarios con diferentes necesidades en sus proyectos o trabajos sencillos.</p>

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

        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source srcset="build/img/blog2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/fondokgd.webp" alt="texto entrado blog">
            </div>
            <div class="texto-entrada">
                <a href="https://www.youtube.com/watch?v=S6XclWQNRtw" target="_blank"> <!-- con target="_blank" abre una nueva pestaña -->
                    <h4>Temas de interes</h4>
                    <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
                    <p>
                        conoce la tecnologia de ultima generacion en la industria
                    </p>
                </a>
            </div>
        </article>
      
    </main>
    <?php incluirTemplate('footer'); ?>