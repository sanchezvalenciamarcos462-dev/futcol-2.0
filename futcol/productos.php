<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Productos — Futcol</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #f4f4f4;
      color: #222;
    }

    header {
      background: linear-gradient(90deg, #111, #222);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 15px 40px;
      flex-wrap: wrap;
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    header img {
      width: 70px;
      height: 70px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid #fff;
    }

    header h1 {
      font-size: 1.8rem;
      letter-spacing: 2px;
      color: #ffcc00;
      text-transform: uppercase;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav a {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover,
    .activo {
      color: #ffcc00;
    }

    section {
      padding: 50px 20px;
      text-align: center;
    }

    section h2 {
      font-size: 2rem;
      color: #222;
      margin-bottom: 40px;
      text-transform: uppercase;
    }

    .productos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .producto {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .producto:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    .producto img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .producto h3 {
      color: #333;
      font-size: 1.2rem;
      margin-bottom: 8px;
    }

    .producto p {
      color: #ffcc00;
      font-weight: bold;
      font-size: 1.1rem;
    }

    footer {
      background: #111;
      color: #aaa;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
      font-size: 0.9rem;
    }

    footer p {
      margin: 0;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
      }
      nav ul {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
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
      <img src="data:image/jpeg;base64,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" alt="width="200" height="200" style="border-radius: 10px;" Camisa Colombia>
      <h3>Selección Colombia</h3>
      <p>$300.000</p>
    </div>

    <div class="producto">
      <img src="https://fenixdeportes.com.co/cdn/shop/files/Disenosintitulo-2024-08-22T095804.685.png?v=1724338716" alt="width="200" height="200" style="border-radius: 10px;" Camisa Colombia>
      <h3>Real Madrid</h3>
      <p>$370.000</p>
    </div>

    <div class="producto">
      <img src="https://www.sportline.com.co/media/catalog/product/h/j/hj5095-456_phsfh001-2000.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=&width=&canvas=:" alt="width="200" height="200" style="border-radius: 10px; Camisa Barcelona">
      <h3>FC Barcelona</h3>
      <p>$360.000</p>
      </div>

      <div class="producto">
        <img src="https://tiendaverde.com.co/cdn/shop/files/AN-EC0703.jpg?v=1737132271&width=400=:" alt="width="200" height="200" style="border-radius: 10px; Camisa Atletico Nacional">
        <h3>Atletico Nacional</h3>
        <p>$350.000</p>

    </div>
  </div>
</section>

<footer>
  <p>© 2025 Futcol — Todos los derechos reservados.</p>
</footer>

</body>
</html>
