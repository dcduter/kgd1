<?php 
// conectamos la base de datos
require 'includes/config/database.php';
$db = conectarDB();

// consultar
$query = "SELECT * FROM planos LIMIT $limite";

// obtener resultados
$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">

    <?php while($plano = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncios">
                <picture>
                 
                    <img loading="lazy" src="/imagenes/<?php echo $plano['imagen']; ?>" alt="anuncio">
                </picture>
                <div class="contenedor-anuncio">
                    <h3><?php echo $plano['titulo']; ?></h3>
                    <p><?php echo $plano['descripcion']; ?></p>
                    <p class="precio">Precio: <?php echo $plano['precio']; ?></p>
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
                    <!-- <a class="boton boton-amarillo" href="anuncio.php?id=<?php echo $plano['id']; ?>">Ver más</a> -->
                </div>
            </div>
            <?php endwhile; ?>
        </div><!--.conteneder-anuncios-->
 
     
<?php 
// cerrar la base de datos
mysqli_close($db);
?>