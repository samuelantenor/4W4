<?php 
/**
 * Template permettant de montrer l'aside */ ?>

<aside class="site__aside__atelier">
    
        <h3>Nos Atelier en 2023</h3>
        <?php the_post_thumbnail('thumbnail'); ?>
       <?php 
            $menu = "note-4w4";
            if(in_category('cours')){ $menu='cours';}
            // $menu peut prendre les valeurs : "notes-4w4" ou "cours"
            wp_nav_menu(array(
            "menu" => $menu,
            "container" => "nav",
    
            )) ?>

    </aside>