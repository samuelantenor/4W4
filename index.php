<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <pre>index.php</pre>
        <div class="Bienvenue">
        <h1 class="Title__main">Bienvenue sur 4W4</h1>
        </div>
        <?php 
        if (have_posts()):
            while(have_posts()):
                the_post();  // extrait un objet «post» ?>
                <article>
                    <h3><?php the_title();  // affiche le titre du post ?></h3>
                    <h6>Extrait:</h6><?php the_excerpt(); ?>
                    <h6>Le contenu:</h6><?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        
    </main>
    
    <?php get_footer(); ?>
</body>
</html>