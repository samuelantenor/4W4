<?php 
/**
 * 404.php is the template for displaying 404 pages.
 */

get_header(); ?>

<main class="site__main">

  <div class="error-404">

    <h1>Error 404</h1>
    <h2>Page non trouvée, vous pouvez essayer de chercher.</h2>

    <div class="menu-cours">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-cours',
          'menu_class'     => 'menu'
        ) );
      ?>
    </div>

    <div class="menu-note-4w4">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-note-4w4',
          'menu_class'     => 'menu'
        ) );
      ?>
    </div>

  </div>

</main>

<?php get_footer(); ?>
