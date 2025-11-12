<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Productos — Futcol</title>
  <link rel="stylesheet" href="style.css/style.css">
</head>
<body>

<header>
  <img src="logo.png" alt="Logo Futcol">
  <h1>Futcol</h1>
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="productos.php" class="activo">Productos</a></li>
      <li><a href="acerca.php">Acerca</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>
</header>

<section>
  <h2>Nuestras Camisas</h2>
  <div class="productos">
    <div class="producto">
      <img src="colombia.jpg" alt="Camisa Colombia">
      <h3>Selección Colombia</h3>
      <p>$180.000</p>
    </div>

    <div class="producto">
      <img src="real_madrid.jpg" alt="Camisa Real Madrid">
      <h3>Real Madrid</h3>
      <p>$220.000</p>
    </div>

    <div class="producto">
      <img src="barcelona.jpg" alt="Camisa Barcelona">
      <h3>FC Barcelona</h3>
      <p>$210.000</p>
    </div>
  </div>
</section>

<footer>
  <p>© 2025 Futcol — Todos los derechos reservados.</p>
</footer>

</body>
</html>
