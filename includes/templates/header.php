<?php 

if(!isset($_SESSION)){
  session_start();
}
$auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KGD Diseño</title>
    <link rel="stylesheet" href="/build/css/app.css" />
  </head>
  <body>
    <!-- enlace a whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=+3150001120&text=Quiero%20m%C3%A1s%20informaci%C3%B3n"
      target="_blank"
      class="float">
      <img src="/build/img/5305167_call_chat_mobile_whatsapp_whatsapp logo_icon.png" alt="icono de whatsapp">
    </a>
    <!-- fin enlace whatsapp -->
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?> <?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? '' : 'fixed'; ?>">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/">
            <img
              class="logo-header"
              src="/build/img/corregido3-svg.svg"
              alt="logo de bienes raices"
            />
          </a>
          <div class="mobile-menu">
            <img src="/build/img/barras.svg" alt="icono menu responsibe" />
          </div>
          <div class="derecha">
            <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="icono dark mode"> 
            <nav class="navegacion">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Trabajos</a>
              <a href="blog.php">Clientes</a>
              <a href="contacto.php">Contactenos</a>
              <?php if($auth): ?>
                <a href="cerrar-sesion.php">Cerrar Sesión</a>
              <?php endif; ?>
            </nav>
          </div>
        </div>
        <!--.barra-->
        <?php echo $inicio ? '<h1>Diseño Mecanico Profesional</h1>' : ''; ?>
      </div>
    </header>  <!-- fin header -->