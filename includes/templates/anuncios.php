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
                 
                    <img loading="lazy" src="/imagenes/<?php echo $plano['imagen']; ?>" alt="anuncio" width="335px" height="335px">
                </picture>
                <div class="contenedor-anuncio">
                    <h3><?php echo $plano['titulo']; ?></h3>
                    <p><?php echo $plano['descripcion']; ?></p>
                    <p class="precio">Precio: <?php echo $plano['precio']; ?></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <!-- <img loading="lazy" src="build/img/cogwheel_idea_icon.png" alt="icono wc"> -->
                            <i class="fa-solid fa-wrench" width="20px" height="20px"></i>
                        </li>
                        <li>
                            <!-- <img loading="lazy" src="build/img/measurement_ruler_tape_icon.png" alt="icono estacionamiento"> -->
                            <i class="fa-solid fa-ruler" width="20px" height="20px" color="red"></i>
                        </li>
                        <li>
                            <!-- <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono dormitorio">    -->
                            <i class="fa-solid fa-calculator icons" width="20px" height="20px" color="red"></i>
                        </li>
                        <li>
                            <!-- <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono dormitorio">    -->
                            <i class="fa-solid fa-car icons" width="20px" height="20px" color="red"></i>
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