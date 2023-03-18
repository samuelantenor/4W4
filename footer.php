<footer class="site__footer">
<?php the_custom_logo() ?>

<?php wp_nav_menu(array(
    "menu"=>"entete",
    "container"=>"nav",
    "container_class" => "menu__entete"
     ))?>
<section>Samuel Antenor</section>
<section> 4W4 - Conception d'interface et développement web</section>

</footer>
<?php wp_footer(); ?>