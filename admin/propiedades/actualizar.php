<?php 
require "../../includes/funciones.php";
$auth = estaAutenticado();

if(!$auth) {
    header('Location: /');
}
// validar la url por id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}

// base de datos
require "../../includes/config/database.php";
$db = conectarDB();

// obtener el producto
$consulta = "SELECT * FROM planos WHERE id = " . $id;
$resultado = mysqli_query($db, $consulta);
$plano = mysqli_fetch_assoc($resultado);

//consultar obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// errores al llenar el formulario
$errores = [];

$titulo = $plano['titulo']; /* permite crear la variable $titulo */
$descripcion = $plano['descripcion']; /* permite crear la variable $descripcion */
$precio = $plano['precio']; /* permite crear la variable $precio */
$imagenPlano = $plano['imagen'];
$seccion = $plano['seccion']; /* permite crear la variable $seccion */
$vendedores_id = $plano['vendedores_id']; /* permite crear la variable $vendedores_id */


// $inicio = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') { /* permite ver el contenido de la solicitud  al dar click en crear plano*/
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']); /* permite crear la variable $titulo */
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);/* mysqli_real_escape_string se utiliza para prevenir inyección SQL */
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    // $imagen = mysqli_real_escape_string($db, $_POST['imagen']);
    $seccion = mysqli_real_escape_string($db, $_POST['seccion']);
    $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedores_id']);
    $creado = date('Y/m/d');
    //files a una variable
    $imagen = $_FILES['imagen'];
  


    // Validación
    if (!$titulo) {
        $errores[] = "El nombre del plano es obligatorio";
    }
    if (!$descripcion) {
        $errores[] = "La descripción es obligatoria";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    // if (!$imagen['name']  || $imagen['error']) {
    //     $errores[] = "La imagen es obligatoria";
    
    if (!$seccion) {
        $errores[] = "La sección es obligatoria";
    }
    if (!$vendedores_id) {
        $errores[] = "El vendedor es obligatorio";
    }
    //validar por tamaño
    $medida = 1000 * 1000;

      // Validar la imagen solo si se subió una nueva
      if ($imagen['error'] === 0) { // IA
        $medida = 2000 * 2000; // 2MB
        if ($imagen['size'] > $medida) {
            $errores[] = "La imagen no puede pesar más de 1MB";
        }
    }


    //insertar en la base de datos
    if(empty($errores)){
    //     // Subida de archivos
       // crear carpeta
       $carpetaImagenes = '../../imagenes';
       if (!is_dir($carpetaImagenes)) { // para sabre si existe la carpeta 
           mkdir($carpetaImagenes);
       }
       $nombreImagen = ''; // IA

        if($imagen['name']){
            // eliminar imagen anterior
            unlink($carpetaImagenes . '/' . $plano['imagen']);

             //     // Generar un nombre único para la imagen
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
        // $nombreImagen = substr(md5(uniqid(rand(), true)), 0, 10) . ".jpg"; // Obtiene los primeros 10 caracteres del hash MD5
 
     //     // Mover la imagen a la carpeta
         move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . '/' . $nombreImagen);
        } else {
            $nombreImagen = $plano['imagen'];
        }
    //  
   


        // insertar en la base de datos
        $query = "UPDATE planos SET 
            titulo = '{$titulo}',
            precio = '{$precio}',
            imagen = '{$nombreImagen}',
            descripcion = '{$descripcion}',
            seccion = '{$seccion}',
            vendedores_id = {$vendedores_id}
            WHERE id = {$id}";

            // echo $query;
            // exit;

        $result = mysqli_query($db, $query); // IA
        if ($result) {
            // redireccionar al usuario
            header('Location: /admin?resultado=2'); /* permite redireccionar al usuario para que no ingresen datos duplicados*/
        } else {
            $errores[] = "Error al crear el plano: " . mysqli_error($db);
        }
    } 
}  
  
    var_dump($errores); // Depuración


incluirTemplate('header');
?>
    <main class="contenedor seccion top">
        <h1>Actualizar</h1>

        <!-- <p >Trabajamos con personas de todas las industrias relacionadas con Ingeniería Mecánica. Hemos tenido clientes empresariales y universitarios con diferentes necesidades en sus proyectos o trabajos sencillos.</p> -->
  
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <!-- se use GET para que no se guarde en la url con name -->
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Nombre del plano" required value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio" required value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png, image/jpg">

                <img src="/imagenes/<?php echo $imagenPlano; ?>" class="imagen-small"> 

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required placeholder="Descripción del plano"><?php echo $descripcion; ?></textarea>

            </fieldset>
            <fieldset>
                <legend>Información General</legend>
            </fieldset>
            <label for="seccion">Sección:</label>
            <input type="text" id="seccion" name="seccion" placeholder="Sección" required value="<?php echo $seccion; ?>">
            <fieldset>
                <legend>Ingeniero</legend>
                <label for="vendedores_id">Vendedor:</label>
                <select id="vendedores_id" name="vendedores_id">
                    <option value="">-- Seleccione un vendedor --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) :?>
                        <option <?php echo $vendedor['id'] === $vendedores_id ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre']; ?></option>
                    <?php endwhile; ?>
                </select>
                    
            </fieldset>
            <input type="submit" value="Actualizar Plano" class="boton boton-verde">
        </form>
    </main>
    <?php incluirTemplate('footer'); ?>