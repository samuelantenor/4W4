<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>


<?php get_header(); ?>
    <main class="site__main">
        <section class="front-page">

        <section class="blocflex section_evenement">

<h2>Atelier 2023</h2>
<?php wp_nav_menu(array(
    "menu"=>"atelier",
    "container"=>"nav"));
    ?>
</section>

        <div class="nouveaute">
                
            <p>Découvrez nos derniers articles :</p>
				<ul>
					<?php
						$my_query = new WP_Query('showposts=5');
						while ($my_query->have_posts()) : $my_query->the_post();
					?>
					<li>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</li>
					<?php
						endwhile;
					?>
				</ul>
            </div>

        <section class="blocflex section_evenement">

        <h2>Nos Évenement!</h2>
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav"));
            ?>
        </section>

        <section class="blocflex section_archive">
                <h2>nos archives</h2>
                <?php wp_nav_menu(array(
                "menu" => "bloc-archive",
                "container" => "nav",
                "container_class" => "menu__archives"
                )); ?>
            </section>

        <section class="blocflex section_galerie">
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

            <section class="blocflex section_ndc"> 
                <h2>Notes de cours 4w4</h2> 
                <div>
                <?php 
                if (have_posts()):
                    while(have_posts()): the_post(); // extrait un objet "post" 
                         $la_categorie = 'note-4w4';
                         if(in_category("cours")) {
                            $la_categorie = 'cours';}
                       
                        
                        get_template_part("template-parts/categorie",$la_categorie); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </section>

        </section>
    </main>
<?php get_footer(); ?>