<!-- Página 2 del Blog -->
<?php
// Configuración global del sitio
$title = "Tienda Demo | Pagina 2";
include 'includes/header.php';
?>

<!-- Main content: Contenido principal de la página -->
<main class="content">
    <!-- Posts: Sección de publicaciones del blog -->
    <section class="posts">
        <article class="post">
            <a href="../blog/entrada-muestra-4.php"> <!-- Enlace a la publicación individual -->
                <img src="../multimedia/entradas/pag1/5.jpg" alt="Imagen de la publicación">
                <!-- Imagen destacada -->
            </a>
            <h2>Publicación de Muestra 4: Innovación Tecnológica</h2> <!-- Título de la publicación -->
            <p class="meta">Por RINKYN | 30/12/2024 | Categorías: Tecnologia</p>
            <!-- Meta-información (autor, fecha, categorías) -->
            <p class="description">La tecnología está cambiando nuestro mundo de maneras fascinantes...</p>
            <!-- Descripción de la publicación -->
            <a href="../blog/entrada-muestra-4.php">
                <button class="read-more">Seguir Leyendo ➡️</button> <!-- Botón para leer más -->
            </a>
        </article>

        <!-- Más publicaciones (siguen el mismo formato) -->
        <article class="post">
            <a href="../blog/entrada-muestra-3.php">
                <img src="../multimedia/entradas/pag1/2.jpg" alt="Imagen de la publicación">
            </a>
            <h2>Publicación de Muestra 3: Explorando la Economía</h2>
            <p class="meta">Por RINKYN | 27/12/2024 | Categorías: Economia</p>
            <p class="description">La economía juega un papel crucial en nuestras vidas...</p>
            <a href="../blog/entrada-muestra-3.php">
                <button class="read-more">Seguir Leyendo ➡️</button>
            </a>
        </article>

        <!-- Más publicaciones siguen el mismo patrón -->
        <article class="post">
            <a href="../blog/entrada-muestra-2.php">
                <img src="../multimedia/entradas/pag1/3.jpg" alt="Imagen de la publicación">
            </a>
            <h2>Publicación de Muestra 2: Tecnología y Economía</h2>
            <p class="meta">Por RINKYN | 23/12/2024 | Categorías: Tecnologia - Economia</p>
            <p class="description">La tecnología y la economía están profundamente entrelazadas...</p>
            <a href="../blog/entrada-muestra-2.php">
                <button class="read-more">Seguir Leyendo ➡️</button>
            </a>
        </article>

        <article class="post">
            <a href="../blog/entrada-muestra-1.php">
                <img src="../multimedia/entradas/pag1/4.jpg" alt="Imagen de la publicación">
            </a>
            <h2>Publicación de Muestra 1: Descubre el Ocio Perfecto</h2>
            <p class="meta">Por RINKYN | 20/12/2024 | Categorías: Ocio</p>
            <p class="description">El ocio es esencial para nuestro bienestar...</p>
            <a href="../blog/entrada-muestra-1.php">
                <button class="read-more">Seguir Leyendo ➡️</button>
            </a>
        </article>

        <!-- Paginación: Enlaces para navegar entre páginas de publicaciones -->
        <div class="pagination">
            <a href="../index.php" class="page-number">1</a> <!-- Enlace a la página 1 -->
            <a href="paginas/pag2.php" class="page-number active">2</a> <!-- Página actual (página 2) -->
        </div>
    </section>
    <!-- Incluir el archivo de barra lateral -->
    <?php include 'includes/sidebar.php'; ?>
</main>

<!-- Incluir el archivo del footer -->
<?php include 'includes/footer.php'; ?>