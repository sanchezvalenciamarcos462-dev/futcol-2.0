<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futcol - Camisas de Fútbol</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo Futcol">
            <h1>Futcol</h1>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#acerca">Acerca</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- SECCIÓN INICIO -->
    <section id="inicio" class="inicio">
        <div class="banner">
            <h2>Bienvenido a Futcol</h2>
            <p>Tu tienda de camisas de fútbol originales y personalizadas. Envíos a toda Colombia y el mundo 🌎</p>
            <a href="#productos" class="btn">Ver Productos</a>
        </div>
    </section>

    <!-- SECCIÓN PRODUCTOS -->
    <section id="productos" class="productos">
        <h2>Nuestras Camisas</h2>
        <div class="galeria">
            <div class="item">
                <img src="img/camisa1.jpg" alt="Camisa Selección Colombia">
                <h3>Selección Colombia</h3>
                <p>$180.000</p>
            </div>
            <div class="item">
                <img src="img/camisa2.jpg" alt="Camisa Real Madrid">
                <h3>Real Madrid</h3>
                <p>$220.000</p>
            </div>
            <div class="item">
                <img src="img/camisa3.jpg" alt="Camisa Barcelona">
                <h3>FC Barcelona</h3>
                <p>$210.000</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN ACERCA -->
    <section id="acerca" class="acerca">
        <h2>Acerca de Futcol</h2>
        <p>
            Futcol nació en Colombia con la pasión por el fútbol y el deseo de ofrecer camisetas originales
            de los mejores clubes y selecciones del mundo. Enviamos a nivel nacional e internacional,
            garantizando calidad y autenticidad en cada producto.
        </p>
    </section>

    <!-- SECCIÓN CONTACTO -->
    <section id="contacto" class="contacto">
        <h2>Contáctanos</h2>
        <form id="formContacto" action="#" method="post">
            <input type="text" name="nombre" placeholder="Tu nombre" required>
            <input type="email" name="correo" placeholder="Tu correo electrónico" required>
            <textarea name="mensaje" placeholder="Tu mensaje..." required></textarea>
            <button type="submit" class="btn">Enviar</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 Futcol — Todos los derechos reservados | Colombia 🇨🇴</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>