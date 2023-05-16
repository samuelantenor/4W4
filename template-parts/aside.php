<?php 
/**
 * Template permettant de montrer l'aside */ ?>

<aside class="site__aside">
    
        <h3>Menu secondaire</h3>
       <?php 
            $menu = "cour";
            if(in_category('Cours')){ $menu='Cours';}
            // $menu peut prendre les valeurs : "notes-4w4" ou "cours"
            wp_nav_menu(array(
            "menu" => $menu,
            "container" => "nav",
    
            )) ?>

    </aside>