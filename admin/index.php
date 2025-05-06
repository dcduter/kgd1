<?php
require "../includes/funciones.php";
$auth = estaAutenticado();

if(!$auth) {
    header('Location: /');
}

// conectar base de datos
require '../includes/config/database.php';
$db = conectarDB();

// escribir el query
$query = "SELECT * FROM planos";


// consultar la base de datos
$resultadoConsulta = mysqli_query($db, $query);


//muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;// busca el valor de la variable resultado en el array GET, si no existe devuelve null

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT); // 

    if ($id){
        // eliminar el archivo
        $query = "select imagen from planos where id = $id";
        $resultadoConsulta = mysqli_query($db, $query);
        $plano = mysqli_fetch_assoc($resultadoConsulta);

        unlink('../imagenes/' . $plano['imagen']); // elimina el archivo de la carpeta imagenes

        // eliminar el registro
        $query = "delete from planos where id = '$id'";
        $resultado = mysqli_query($db, $query);
        if ($resultado){
            header('Location: /admin?resultado=3');
        }
    }


}

// $inicio = false;

incluirTemplate('header');
?>
    <main class="contenedor seccion top">
        <h1>Administrador de Planos</h1>
        <?php if ($resultado == 1): ?>
            <p class="alerta exito">Plano creado correctamente</p>
        <?php elseif ($resultado == 2): ?>
            <p class="alerta exito">Plano actualizado correctamente</p>
        <?php elseif ($resultado == 3): ?>
            <p class="alerta exito">Registro eliminado correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Agregar Planos</a>

        <!-- <p >Trabajamos con personas de todas las industrias relacionadas con Ingeniería Mecánica. Hemos tenido clientes empresariales y universitarios con diferentes necesidades en sus proyectos o trabajos sencillos.</p> -->

        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php while ($plano = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td><?php echo $plano['id']; ?></td>
                    <td><?php echo $plano['titulo']; ?></td>
                    <td> <img src="/imagenes/<?php echo $plano['imagen']; ?>" class="imagen-tabla"> </td>
                    <td><?php echo $plano['precio']; ?></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $plano['id']; ?>">
                            <input type="submit"  class="boton-rojo" value="Eliminar">
                        </form>
                        
                        <!-- <a href="admin/propiedades/actualizar.php?id=<?php echo $plano['id']; ?>" class="boton-amarillo">Editar</a> -->
                        <!-- ruta en el servidor -->
                        <a href="propiedades/actualizar.php?id=<?php echo $plano['id']; ?>" class="boton-amarillo">Editar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
  
       
    </main>
    <?php incluirTemplate('footer'); ?>