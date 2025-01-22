<!-- Contacto = contacto.html -->
<?php
// Configuración global del sitio
$title = "Tienda Demo | Contacto";
include 'includes/header.php';
?>
<!-- Main content: Contenido principal de la página -->
<main class="content centered">
    <!-- Logo sección -->
    <section class="logo-section">
        <img src="../multimedia/logo.png" alt="Logo de Rinkyn Codes" class="contact-logo">
    </section>

    <!-- Título principal de la sección -->
    <section class="title-section">
        <h1>Contáctanos</h1>
    </section>

    <!-- Descripción del propósito de la página de contacto -->
    <section class="description-section">
        <p>
            ¿Tienes alguna pregunta o necesitas ayuda con un proyecto? Estamos aquí para ti. Contáctanos a través de
            nuestros enlaces de contacto o síguenos en nuestras redes sociales para estar al tanto de nuestras
            últimas novedades.
        </p>
    </section>

    <!-- Enlaces de contacto y redes sociales -->
    <section class="contact-section">
        <h3>Redes y Contacto</h3>
        <div class="social-links">
            <!-- Enlaces a las redes sociales y correo electrónico -->
            <a href="https://www.facebook.com/rinkyn05" target="_blank" class="fab fa-facebook"></a>
            <a href="https://api.whatsapp.com/send?phone=8498835985" target="_blank" class="fab fa-whatsapp"></a>
            <a href="https://github.com/rinkyn05" target="_blank" class="fab fa-github"></a>
            <a href="#" target="_blank" class="fab fa-instagram"></a>
            <a href="#" target="_blank" class="fab fa-youtube"></a>
            <a href="mailto:rinkyn2005@gmail.com">
                <i class="fas fa-envelope"></i> rinkyn2005@gmail.com
            </a>
        </div>
    </section>

    <!-- Incluir el archivo de barra lateral -->
    <?php include 'includes/sidebar.php'; ?>
</main>

<!-- Incluir el archivo del footer -->
<?php include 'includes/footer.php'; ?>