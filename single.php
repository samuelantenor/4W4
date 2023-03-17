<?php 
/**
 * single.php est le modèle par défaut qui affiche un article
 */
?>

<?php get_header(); ?>
    <main>
        <h1>Bienvenue sur 4W4</h1>
    <?php if(have_posts()):
            while (have_posts()): the_post(); ?>
            <div class="single-php">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
    </div>
            <hr>
            <?php endwhile; ?>
           <?php  endif; ?>
    </main>
     
    <?php get_footer(); ?>
</body>
</html>