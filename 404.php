<?php 
/**
 * 404.php is the template for displaying 404 pages.
 */

get_header(); ?>
<body class="custom-background site">

<main class="site__main">

  <div class="error-404">

    <h1>Error 404</h1>
    <h2>Page non trouvée, vous pouvez essayer de chercher.</h2>
    
    <div class="search-form-container-404">
    <?php get_search_form(); ?>
    </div>

    <h2>Nos choix de cours</h2>
    <div class="menu-cours-404">
    <?php wp_nav_menu(array("menu" => "cours")); ?>
    </div>
    <h2>les notes de cours</h2>
    <div class="menu-note-4w4-404">
    <?php wp_nav_menu(array("menu" => "note-4w4")); ?>
    </div>

  </div>

</main>
</body>

<?php get_footer(); ?>
