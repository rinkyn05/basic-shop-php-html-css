<!-- Entrada Muestra 1 -->
<?php
// Configuración global del sitio
$title = "Tienda Demo | Entrada Muestra 1";
include 'includes/header.php';
?>

<!-- Main: Contenido principal de la página -->
<main class="content">
    <section class="posts">
        <article class="post">
            <!-- Imagen destacada de la publicación -->
            <img src="../multimedia/entradas/pag1/5.jpg" alt="Imagen de la publicación">
            <!-- Título de la publicación -->
            <h2>Publicación de Muestra 1: Descubre el Ocio Perfecto</h2>
            <!-- Meta información de la publicación (autor, fecha, categorías) -->
            <p class="meta">Por RINKYN | 11/01/2025 | Categorías: Ocio</p>

            <!-- Párrafo introductorio -->
            <p>
                El ocio es esencial para nuestro bienestar. Desde actividades al aire libre hasta momentos de
                relajación en casa, te presentamos ideas para aprovechar al máximo tu tiempo libre.
            </p>

            <!-- Subtítulo para la sección de Actividades al Aire Libre -->
            <h3>Actividades al Aire Libre</h3>
            <!-- Párrafo que describe las actividades al aire libre -->
            <p>
                Conecta con la naturaleza a través de caminatas, paseos en bicicleta o simplemente disfrutando de un
                picnic. Explorar tu entorno local puede ser revitalizante y económico.
            </p>
            <!-- Imagen relacionada con actividades al aire libre -->
            <img src="../multimedia/entradas/entrada-muestra-1/ai.jpeg" alt="Transformación digital">

            <!-- Subtítulo para la sección de Entretenimiento en Casa -->
            <h3>Entretenimiento en Casa</h3>
            <!-- Párrafo sobre actividades en casa -->
            <p>
                ¿Prefieres quedarte en casa? Considera maratones de películas, lectura de libros inspiradores o
                incluso aprender una nueva habilidad, como cocinar un plato exótico.
            </p>
            <!-- Imagen relacionada con entretenimiento en casa -->
            <img src="../multimedia/entradas/entrada-muestra-1/5g.jpeg" alt="Innovación tecnológica">

            <!-- Subtítulo para la sección de Ocio Creativo -->
            <h4 id="ocio-creativo">Ocio Creativo</h4>
            <!-- Párrafo que habla sobre actividades creativas en el tiempo libre -->
            <p>
                Aprovecha tu tiempo libre para crear algo nuevo. Desde pintura y escritura hasta bricolaje, las
                actividades creativas pueden ser relajantes y gratificantes.
            </p>

            <!-- Subtítulo para la sección de Beneficios del Ocio -->
            <h3>Beneficios del Ocio</h3>
            <!-- Párrafo que describe los beneficios del ocio -->
            <p>
                El ocio no solo mejora nuestra salud mental, sino que también fomenta la creatividad, reduce el
                estrés y fortalece nuestras relaciones personales.
            </p>
            <!-- Imagen relacionada con los beneficios del ocio -->
            <img src="../multimedia/entradas/entrada-muestra-1/ciberseguridad.jpeg"
                alt="Impacto global de la tecnología">

            <!-- Subtítulo para la sección de Conclusión -->
            <h3>Conclusión</h3>
            <!-- Párrafo que concluye la publicación -->
            <p>
                Explorar nuevas formas de disfrutar del ocio puede enriquecer tu vida. Encuentra más ideas
                inspiradoras en nuestra sección de <a href="../paginas/categorias.php">categorías</a>.
            </p>
        </article>
    </section>

    <!-- Incluir el archivo de barra lateral -->
    <?php include 'includes/sidebar-post.php'; ?>
</main>

<!-- Incluir el archivo del footer -->
<?php include 'includes/footer.php'; ?>