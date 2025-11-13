<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Acerca — Futcol</title>
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
      line-height: 1.6;
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

    main {
      max-width: 1000px;
      margin: 60px auto;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 40px;
    }

    h2 {
      text-align: center;
      color: #222;
      font-size: 2rem;
      margin-bottom: 30px;
      text-transform: uppercase;
      border-bottom: 3px solid #ffcc00;
      display: inline-block;
      padding-bottom: 10px;
    }

    p {
      margin-bottom: 20px;
      font-size: 1.05rem;
      color: #555;
      text-align: justify;
    }

    .mision, .vision {
      background: #f9f9f9;
      border-left: 5px solid #ffcc00;
      padding: 20px;
      margin: 30px 0;
      border-radius: 10px;
    }

    .mision h3, .vision h3 {
      color: #111;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .equipo {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    .card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .card h4 {
      color: #111;
      margin-bottom: 5px;
    }

    .card p {
      font-size: 0.9rem;
      color: #666;
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

      main {
        padding: 25px;
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
      <li><a href="productos.php">Productos</a></li>
      <li><a href="acerca.php" class="activo">Acerca</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>
</header>

<main>
  <h2>Sobre Nosotros</h2>
  <p><strong>Futcol</strong> nació con la pasión por el fútbol colombiano y el amor por las camisetas que representan los sueños, la historia y el orgullo de cada hincha. Somos una tienda dedicada a ofrecer camisetas originales y de alta calidad tanto de equipos nacionales como internacionales.</p>

  <div class="mision">
    <h3>Misión</h3>
    <p>Brindar a nuestros clientes las mejores camisetas y productos futboleros del mercado, garantizando autenticidad, calidad y un servicio personalizado que refleje la pasión por el fútbol.</p>
  </div>

  <div class="vision">
    <h3>Visión</h3>
    <p>Ser reconocidos a nivel nacional e internacional como la tienda líder en artículos deportivos, destacándonos por nuestro compromiso, innovación y amor por el fútbol.</p>
  </div>

  <h2>Nuestro Equipo</h2>
  <div class="equipo">
    <div class="card">
      <img src="https://scontent.fclo14-1.fna.fbcdn.net/v/t39.30808-6/484357479_1528653814760114_6561083322403075677_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFvESMBWfA49FKCqHmGeLWA29tQL-Eygtfb21Av4TKC15T-XfunKQBtOhOtOjd3f1ub-k9nqn86RMM8UmMc6Fc2&_nc_ohc=2MXyDYhEQNUQ7kNvwFsYzza&_nc_oc=Adl4IbXMGc0WdvWwrq_eCv0wFH7dy6B5164SiI8sltUpL33w7COyBYoqI_dyHVqg5Rs&_nc_zt=23&_nc_ht=scontent.fclo14-1.fna&_nc_gid=htiopLnMcGCsitbyFbt1aw&oh=00_AfgqU4oVIytxObv0-O_eafTKZNUujxf_Nfwiv9ZkRak_yw&oe=691AFF95" alt="Miembro del equipo">
      <h4>Marcos Sanchez Valencia</h4>
      <p>Fundador & Diseñador</p>
    </div>
  
    </div>
  </div>
</main>

<footer>
  <p>© 2025 Futcol — Todos los derechos reservados.</p>
</footer>

</body>
</html>

