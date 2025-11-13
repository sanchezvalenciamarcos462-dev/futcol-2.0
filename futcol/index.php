<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio — Futcol</title>
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

    .hero {
      background: url("fondo.jpg") center/cover no-repeat;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.5);
    }

    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 700px;
    }

    .hero h2 {
      font-size: 3rem;
      color: #ffcc00;
      text-shadow: 2px 2px 8px #000;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .hero p {
      font-size: 1.2rem;
      color: #fff;
      margin-bottom: 25px;
    }

    .btn {
      display: inline-block;
      background: #ffcc00;
      color: #000;
      padding: 12px 25px;
      border-radius: 30px;
      font-weight: bold;
      transition: 0.3s;
      text-decoration: none;
    }

    .btn:hover {
      background: #fff;
      color: #000;
      transform: scale(1.05);
    }

    section {
      padding: 60px 20px;
      text-align: center;
    }

    section h2 {
      font-size: 2rem;
      color: #222;
      margin-bottom: 40px;
      text-transform: uppercase;
    }

    .destacados {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .card h3 {
      color: #333;
      font-size: 1.2rem;
      margin-bottom: 8px;
    }

    .card p {
      color: #666;
      font-size: 0.95rem;
    }

    footer {
      background: #111;
      color: #aaa;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
      font-size: 0.9rem;
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

      .hero h2 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

<header>
 <img src="imagenes/https://chatgpt.com/backend-api/estuary/content?id=file_000000006568720eb994498442e9a958&ts=489720&p=fs&cid=1&sig=f1a1d9d1e8e2400a34347d067286931cfd5a1bd8afb31a6d275a7c5452aafef0&v=0" alt="Logo Futcol" class="logo">

  <h1>Futcol</h1>https:
  <nav>
    <ul>
      <li><a href="index.php" class="activo">Inicio</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="acerca.php">Acerca</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>
</header>

<section class="hero">
  <div class="hero-content">
    <h2>Tu pasión por el fútbol, en una camiseta</h2>
    <p>Encuentra las mejores camisetas del fútbol colombiano y mundial. Calidad, estilo y pasión en un solo lugar.</p>
    <a href="productos.php" class="btn">Ver Productos</a>
  </div>
</section>

<section>
  <h2>Equipos Destacados</h2>
  <div class="destacados">
    <div class="card">
      <img src="colombia.jpg" alt="Selección Colombia">
      <h3>Selección Colombia</h3>
      <p>La camiseta que representa nuestra pasión nacional.</p>
    </div>

    <div class="card">
      <img src="real_madrid.jpg" alt="Real Madrid">
      <h3>Real Madrid</h3>
      <p>Orgullo blanco, símbolo de campeones.</p>
    </div>

    <div class="card">
      <img src="barcelona.jpg" alt="FC Barcelona">
      <h3>FC Barcelona</h3>
      <p>Viste los colores que hicieron historia en el fútbol mundial.</p>
    </div>
  </div>
</section>

<footer>
  <p>© 2025 Futcol — Todos los derechos reservados.</p>
</footer>

</body>
</html>
