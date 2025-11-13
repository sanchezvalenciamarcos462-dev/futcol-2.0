<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto — Futcol</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* ==== ESTILOS GLOBALES ==== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f4f4f9;
      color: #333;
    }

    /* ==== HEADER ==== */
    header {
      background: linear-gradient(90deg, #111, #222);
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    header img {
      width: 90px;
      vertical-align: middle;
      margin-bottom: 10px;
    }

    header h1 {
      font-size: 2rem;
      letter-spacing: 1px;
      margin-bottom: 10px;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 25px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      padding: 8px 15px;
      border-radius: 6px;
      transition: 0.3s;
    }

    nav ul li a:hover,
    .activo {
      background: white;
      color: #111;
    }

    /* ==== SECCIÓN CONTACTO ==== */
    section {
      max-width: 800px;
      margin: 60px auto;
      background: white;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    section h2 {
      color: #111;
      text-align: center;
      margin-bottom: 25px;
      font-size: 2em;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input, textarea {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1em;
      width: 100%;
      outline: none;
      transition: 0.3s;
    }

    input:focus, textarea:focus {
      border-color: #222;
      box-shadow: 0 0 6px rgba(15, 15, 15, 0.3);
    }

    button {
      background: linear-gradient(90deg, #111, #222);
      color: white;
      border: none;
      padding: 12px;
      font-size: 1.1em;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: linear-gradient(90deg, #111, #);
    }

    .info-contacto {
      text-align: center;
      margin-top: 30px;
    }

    .info-contacto p {
      margin-bottom: 10px;
      font-size: 1.1em;
    }

    /* ==== FOOTER ==== */
    footer {
      text-align: center;
      padding: 20px;
      background: #111;
      color: #fff;
      margin-top: 60px;
      font-size: 0.95em;
    }
  </style>
</head>
<body>

<header>
  <img src="imagenes/logo.png" alt="Logo Futcol">
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
  <form action="enviar_contacto.php" method="POST">
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="email" placeholder="Tu correo electrónico" required>
    <textarea name="mensaje" rows="5" placeholder="Escribe tu mensaje..." required></textarea>
    <button type="submit">Enviar Mensaje</button>
  </form>

  <div class="info-contacto">
    <p><strong>📍 Dirección:</strong> Medellín, Colombia</p>
    <p><strong>📞 Teléfono:</strong> +57 320 456 7890</p>
    <p><strong>✉️ Correo:</strong> contacto@futcol.com</p>
  </div>
</section>

<footer>
  <p>© 2025 Futcol — Todos los derechos reservados ⚽</p>
</footer>

</body>
</html>
