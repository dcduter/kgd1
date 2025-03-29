<?php 
require "includes/funciones.php";
// $inicio = false;

incluirTemplate('header');
?>
  
    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/Simbolo-KGD.webp" type="image/webp" />
        <source srcset="build/img/Simbolo-KGD.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/Simbolo-KGD.webp"
          alt="imagen contacto"
        />
      </picture>
      <h2>formulario de contacto</h2>
      <form
        class="formulario"
        action="https://formspree.io/f/mdkoadnw"
        method="POST"
      >
        <fieldset>
          <legend>Información Personal</legend>

          <label for="nombre">Nombre</label>
          <input
            type="text"
            placeholder="Tu nombre"
            id="nombre"
            name="Nombre"
          />

          <label for="correo">Correo</label>
          <input
            type="email"
            placeholder="Tu correo"
            id="correo"
            name="email"
          />

          <label for="telefono">Teléfono</label>
          <input type="tel" placeholder="Tu telefono" id="telefono"
          name=Telefono">

          <label for="mensaje">Mensaje:</label>

          <textarea id="mensaje" name="Mensaje"></textarea>
        </fieldset>
        <fieldset>
          <legend>Información del Diseño</legend>

          <label for="opciones">Diseños:</label>
          <select id="opciones">
            <option value="" disabled selected>--Seleccione--</option>
            <option value="Diseño 1" name="Ingeniera inversa">
              Ingenieria Inversa
            </option>
            <option value="Diseño 2" name="Modelado y ensamble">
              Modelado 3D y Ensambles
            </option>
            <option value="Diseño 3" name="Planos">Planos</option>
            <option value="Diseño 4" name="Estudios mecánicos">
              Estudios Mecánicos
            </option>
          </select>

          <label for="Presupuesto">Precio o Presupuesto</label>
          <input
            type="number"
            placeholder="Tu Precio o Presupuesto"
            id="Presupuesto"
            name="Presupuesto"
          />
        </fieldset>

        <fieldset>
          <legend>Información del Diseño</legend>

          <p>Como desea ser contactado</p>

          <div class="contacto">
            <label for="contactar-telefono">Teléfono</label>
            <input
              name="contacto"
              type="radio"
              value="telefono"
              id="contactar-telefono"
              name="Medio de contacto"
            />

            <label for="contactar-correo">Correo</label>
            <input
              name="contacto"
              type="radio"
              value="email"
              id="contactar-correo"
              name="Medio de contacto"
            />
          </div>

          <p>Si elgio teléfono, eliga la fecha y hora</p>

          <label for="fecha">Fecha:</label>
          <input type="date" id="fecha" name="Fecha" />

          <label for="hora">Hora</label>
          <input type="time" id="hora" min="09:00" max="18:00" name="Hora" />
        </fieldset>
        <input type="submit" id="enviar" class="boton-verde" />
      </form>
    </main>
    <?php incluirTemplate('footer'); ?>