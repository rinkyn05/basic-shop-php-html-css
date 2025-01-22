<!-- Nosotros = nosotros.html-->
<?php
// Configuración global del sitio
$title = "Tienda Demo | Nosotros";
include 'includes/header.php';
?>

<!-- Main content: Contenido principal de la página -->
<main class="content centered">
    <!-- Perfil: Presentación del autor o persona principal -->
    <section class="perfil">
        <!-- Imagen de perfil del autor -->
        <img src="../multimedia/perfil.jpg" alt="Foto de Ricardo Morel" class="perfil-img">
        <!-- Nombre del autor -->
        <h1>Ricardo (Aka Rinkyn)</h1>
        <!-- Cargo o rol del autor -->
        <h2>CEO de Rinkyn Codes</h2>
    </section>

    <!-- Sobre mí: Sección con información personal sobre el autor -->
    <section class="about">
        <h2>Sobre Mí</h2>
        <p>
            Me llamo Ricardo Morel, soy un programador de la República Dominicana especializado en desarrollo de
            software, sitios web y aplicaciones móviles para Android e iOS. Trabajo con diversos lenguajes y
            tecnologías como HTML, CSS, JavaScript, PHP y Flutter, asegurando calidad en cada proyecto.
        </p>
        <h3>Redes y Contacto</h3>
        <!-- Enlaces a las redes sociales para contacto -->
        <div class="social-links">
            <a href="https://www.facebook.com/rinkyn05" target="_blank" class="fab fa-facebook"></a>
            <a href="https://api.whatsapp.com/send?phone=8498835985" target="_blank" class="fab fa-whatsapp"></a>
            <a href="https://github.com/rinkyn05" target="_blank" class="fab fa-github"></a>
            <a href="mailto:rinkyn2005@gmail.com">
                <!-- Icono de correo -->
                <i class="fas fa-envelope"></i> rinkyn2005@gmail.com
            </a>
        </div>
    </section>

    <!-- Nosotros: Sección que describe el equipo de trabajo -->
    <section class="team">
        <h2>Nosotros</h2>
        <p>
            En Rinkyn Codes contamos con un equipo de profesionales expertos en áreas como programación, diseño
            gráfico y marketing digital. Nuestro objetivo es satisfacer las necesidades de nuestros clientes con
            soluciones innovadoras y de alta calidad, adaptándonos a cada proyecto con compromiso y profesionalismo.
        </p>
    </section>
    <!-- Incluir el archivo de barra lateral -->
    <?php include 'includes/sidebar.php'; ?>
</main>

<!-- Incluir el archivo del footer -->
<?php include 'includes/footer.php'; ?>