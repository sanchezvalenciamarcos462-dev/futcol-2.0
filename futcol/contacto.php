<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto — Futcol</title>
  <link rel="stylesheet" href="style.css/style.css">
</head>
<body>

<header>
  <img src="logo.png" alt="Logo Futcol">
  <h1>Futcol</h1>
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="acerca.php">Acerca</a></li>
      <li><a href="contacto.php" class="activo">Contacto</a></li>
    </ul>
  </nav>
</header>

<section>
  <h2>Contáctanos</h2>
  <form action="#" method="POST" class="formulario">
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="correo" placeholder="Tu correo" required>
    <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
    <button type="submit">Enviar</button>
  </form>
</section>

<footer>
  <p>© 2025 Futcol — Todos los derechos reservados.</p>
</footer>

</body>
</html>
