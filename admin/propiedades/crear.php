<?php 
// base de datos

use App\Propiedad;

require "../../includes/app.php";

// use App\Propiedad;
// creando un objeto de la clase de Propiedad de la carpeta de clases
//$propiedad = new Propiedad;

$db = conectarDB();
$auth = estaAutenticado();

if (!$auth) {
    header('Location: /');
}

//consultar obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// errores al llenar el formulario
$errores = [];

$titulo = ''; /* permite crear la variable $titulo */
$descripcion = ''; /* permite crear la variable $descripcion */
$precio = ''; /* permite crear la variable $precio */
$imagen = '';
$seccion = ''; /* permite crear la variable $seccion */
$vendedores_id = ''; /* permite crear la variable $vendedores_id */


// $inicio = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') { /* permite ver el contenido de la solicitud  al dar click en crear plano*/
    $propiedad = new Propiedad($_POST);
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
    if (!$imagen['name']  || $imagen['error']) {
        $errores[] = "La imagen es obligatoria";
    }
    if (!$seccion) {
        $errores[] = "La sección es obligatoria";
    }
    if (!$vendedores_id) {
        $errores[] = "El vendedor es obligatorio";
    }
    //validar por tamaño
    $medida = 2000 * 2000;

    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen no puede pesar más de 2MB";
    }


    //insertar en la base de datos
    if(empty($errores)){
        // Subida de archivos
        // crear carpeta
        $carpetaImagenes = '../../imagenes';
        if (!is_dir($carpetaImagenes)) { // para sabre si existe la carpeta 
            mkdir($carpetaImagenes); 
        }

        // Generar un nombre único para la imagen
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        // Mover la imagen a la carpeta
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . '/' . $nombreImagen);

        $query = "INSERT INTO planos (titulo, precio, imagen, descripcion, seccion, creado, vendedores_id) VALUES ('{$titulo}', '{$precio}', '{$nombreImagen}', '{$descripcion}', '{$seccion}', '{$creado}', '{$vendedores_id}')";
        $result = mysqli_query($db, $query);
        if ($result) {
            // redireccionar al usuario
            header('Location: /admin?resultado=1'); /* permite redireccionar al usuario para que no ingresen datos duplicados*/
        } else {
            $errores[] = "Error al crear el plano: " . mysqli_error($db);
        }
    }   

    var_dump($errores); // Depuración
}

incluirTemplate('header');
?>
    <main class="contenedor seccion top">
        <h1>Crear Planos</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <!-- se use GET para que no se guarde en la url con name -->
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Nombre del plano" required value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio" required value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" required accept="image/jpeg, image/png, image/jpg">

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
            <input type="submit" value="Crear Plano" class="boton boton-verde">
        </form>
    </main>
    <?php incluirTemplate('footer'); ?>