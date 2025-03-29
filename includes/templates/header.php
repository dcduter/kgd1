<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KGD Diseño</title>
    <link rel="stylesheet" href="/build/css/app.css" />
  </head>
  <body class="planos">
    <!-- enlace a whatsapp -->
    <a
      href="https://api.whatsapp.com/send?phone=+3150001120&text=Quiero%20m%C3%A1s%20informaci%C3%B3n"
      target="_blank"
      class="float"
    >
      <img
        src="/build/img/5305167_call_chat_mobile_whatsapp_whatsapp logo_icon.png"
        alt="icono de whatsapp"
      />
    </a>
    <!-- fin enlace whatsapp -->
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
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
          <nav class="navegacion">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Trabajos</a>
            <a href="blog.php">Clientes</a>
            <a href="contacto.php">Contactenos</a>
          </nav>
        </div>
        <!--.barra-->
        
      </div>
    </header>  <!-- fin header -->