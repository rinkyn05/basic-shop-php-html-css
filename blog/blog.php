<!-- Blog -->
<?php
// Configuración global del sitio
$title = "Tienda Demo | Blog";
include 'includes/header.php';
?>

<!-- Main content -->
<main class="content">
    <!-- Posts -->
    <section class="posts">
        <!-- Artículo 1 -->
        <article class="post">
            <a href="entrada-muestra-8.php">
                <img src="../multimedia/entradas/pag1/1.jpg" alt="Imagen de la publicación">
            </a>

            <!-- Título de la publicación -->
            <h2>Publicación de Muestra 8: Explorando la Tecnología</h2>

            <!-- Metadatos de la publicación -->
            <p class="meta">Por RINKYN | 11/01/2025 | Categorías: Tecnología</p>

            <!-- Descripción de la publicación -->
            <p class="description">
                La tecnología está avanzando a un ritmo increíble, transformando nuestras vidas de maneras
                inesperadas. En esta publicación, exploraremos los avances tecnológicos más recientes y cómo están
                impactando en la sociedad.
            </p>

            <!-- Botón para leer más -->
            <a href="entrada-muestra-8.php">
                <button class="read-more">Seguir Leyendo ➡️</button>
            </a>
        </article>

        <!-- Artículo 2 -->
        <article class="post">
            <a href="entrada-muestra-7.php">
                <img src="../multimedia/entradas/pag1/2.jpg" alt="Imagen de la publicación">
            </a>
            <h2>Publicación de Muestra 7: Explorando la Economía</h2>
            <p class="meta">Por RINKYN | 07/01/2025 | Categorías: Economia</p>
            <p class="description">La economía juega un papel crucial en nuestras vidas, afectando desde nuestras finanzas personales hasta las decisiones gubernamentales. En esta entrada, analizaremos temas clave y su impacto.</p>
            <a href="entrada-muestra-7.php">
                <button class="read-more">Seguir Leyendo ➡️</button>
            </a>
        </article>

        <!-- Artículo 3 -->
        <article class="post">
            <a href="entrada-muestra-6.php">
                <img src="../multimedia/entradas/pag1/3.jpg" alt="Imagen de la publicación">
            </a>
            <h2>Publicación de Muestra 6: Tecnología y Economía</h2>
            <p class="meta">Por RINKYN | 04/01/2025 | Categorías: Tecnologia - Economia</p>
            <p class="description">La tecnología y la economía están profundamente entrelazadas, transformando la forma en que vivimos, trabajamos y pensamos sobre el futuro. En esta publicación, exploramos sus conexiones clave.</p>
            <a href="blog/entrada-muestra-6.php">
                <button class="read-more">Seguir Leyendo ➡️</button>
            </a>
        </article>

        <!-- Artículo 4 -->
        <article class="post">
            <a href="entrada-muestra-5.php">
                <img src="../multimedia/entradas/pag1/4.jpg" alt="Imagen de la publicación">
            </a>
            <h2>Publicación de Muestra 5: Descubre el Ocio Perfecto</h2>
            <p class="meta">Por RINKYN | 01/01/2025 | Categorías: Ocio</p>
            <p class="description">El ocio es esencial para nuestro bienestar. Desde actividades al aire libre hasta momentos de relajación en casa, te presentamos ideas para aprovechar al máximo tu tiempo libre.</p>
            <a href="entrada-muestra-5.php">
                <button class="read-more">Seguir Leyendo ➡️</button>
            </a>
        </article>

        <!-- Paginación -->
        <div class="pagination">
            <a href="blog.php" class="page-number active">1</a>
            <a href="../paginas/pag2.php" class="page-number">2</a>
        </div>

    </section>

    <!-- Incluir el archivo de barra lateral -->
    <?php include 'includes/sidebar.php'; ?>
</main>

<!-- Incluir el archivo del footer -->
<?php include 'includes/footer.php'; ?>