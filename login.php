<?php 
// importar la conexion
//require 'includes/config/database.php';
require 'includes/app.php';
$db = conectarDB();

$errores = [];
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!$email) {
        $errores[] = "El correo es obligatorio";
    }

    if(!$password) {
        $errores[] = "La contraseña es obligatoria";
    }

    if(empty($errores)) {
    // verificar si el usuario existe
    $query = "SELECT * FROM usuarios WHERE email = '{$email}'";
    $resultado = mysqli_query($db, $query);

    if($resultado->num_rows) {
       // revisar si el password en es correcto
       $usuario = mysqli_fetch_assoc($resultado);

       $auth = password_verify($password, $usuario['password']);
       if($auth) {
        // el usuario esta autenticado
        session_start();
        $_SESSION['usuario'] = $usuario['email'];
        $_SESSION['login'] = true;

        header('Location: /admin');

       } else {
        $errores[] = "La contraseña no es correcta";
       }
    } else {
        $errores[] = "El correo no existe en nuestra base de datos";
       }
  }
}
// $inicio = false;

incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado top">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form action="" class="formulario" method="post">
        <fieldset>
          <legend>Email y Contraseña</legend>

          <label for="correo">Correo</label>
          <input type="email" placeholder="Tu correo" id="correo" name="email" required>

          <label for="password">Contraseña</label>
          <input type="password" placeholder="Tu contraseña" id="password" name="password" required>
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton-verde">
            
        </form>


    </main>
    <?php incluirTemplate('footer'); ?>