<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <h3>Bienvenue sur mon site!</h3>
        <section class="front-page">
        <section class="blocflex block_evenement">

        <h3>Nos Évenement!</h3>
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav"));
            ?>
        </section>
        <section class="blocflex block_galerie">
                <h2>La galerie</h2>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'galerie'
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while ($query->have_posts()): $query->the_post(); 
                            get_template_part("template-parts/categorie", "galerie");
                        endwhile; 
                    endif;
                    wp_reset_postdata();
                ?>
            </section>

            <section class="blocflex block_ndc"> 
                <h2>Les notes de cours</h2> 
                <div>
                    <?php if(have_posts()):
                        while (have_posts()): the_post(); 
                            if (!in_category('galerie')) {
                                $la_categorie = 'note-4w4';
                                get_template_part("template-parts/categorie", $la_categorie);
                            }
                        endwhile; 
                    endif; ?>
                </div>
            </section>

        </section>
    </main>
<?php get_footer(); ?>