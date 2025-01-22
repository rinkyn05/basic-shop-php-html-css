<!-- Index -->
<?php
// Configuración global del sitio
$title = "Tienda Demo | Inicio";
include 'includes/header.php';
?>

<main class="content">
    <!-- Posts -->
    <section class="posts">
        <!-- Artículo 1 -->
        <article class="post">
            <a href="blog/entrada-muestra-8.php">
                <img src="multimedia/entradas/pag1/1.jpg" alt="Imagen de la publicación">
            </a>
            <h2>Publicación de Muestra 8: Explorando la Tecnología</h2>
            <p class="meta">Por RINKYN | 11/01/2025 | Categorías: Tecnología</p>
            <p class="description">
                La tecnología está avanzando a un ritmo increíble, transformando nuestras vidas de maneras inesperadas.
                En esta publicación, exploraremos los avances tecnológicos más recientes y cómo están impactando en la
                sociedad.
            </p>
            <a href="blog/entrada-muestra-8.php">
                <button class="read-more">Seguir Leyendo ➞️</button>
            </a>
        </article>

        <!-- Artículo 2 (Ejemplo adicional) -->
        <article class="post">
            <a href="blog/entrada-muestra-9.php">
                <img src="multimedia/entradas/pag1/2.jpg" alt="Otra publicación">
            </a>
            <h2>Publicación de Muestra 9: Impacto de la Economía Digital</h2>
            <p class="meta">Por RINKYN | 15/01/2025 | Categorías: Economía</p>
            <p class="description">
                La economía digital está transformando cómo las empresas operan y se conectan con los consumidores. En
                esta publicación, discutimos tendencias clave y desafíos de la economía digital.
            </p>
            <a href="blog/entrada-muestra-9.php">
                <button class="read-more">Seguir Leyendo ➞️</button>
            </a>
        </article>
    </section>

    <!-- Incluir el archivo de barra lateral -->
    <?php include 'includes/sidebar.php'; ?>
</main>

<!-- Incluir el archivo del footer -->
<?php include 'includes/footer.php'; ?>