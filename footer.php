<footer class="site__footer">

<section class="colonne">

    <section class="choix"><?php  
                wp_nav_menu(array( 
                    "menu" => "entete",
                    "container" => "nav",
                )); 
            ?>
        </div>

    </section>
    
    <section class="info">
        <ul>
            <li>Samuel-André Anténor</li>
            <li>Concepetion d'interface</li>
        </ul>
    </section>

    <section class="lien"> 
        <?php the_custom_logo();?> 
        <?= get_search_form(); ?> 
    </section>


 

</section>

<section class="colonne">

    <section class="footer_colonne">
      <div class="sidebar">
      <?php dynamic_sidebar( 'footer_1' ); ?>
      </div>
    </section>

    <section class="footer_colonne">
      <div class="sidebar">
      <?php dynamic_sidebar( 'footer_2' ); ?>
      </div>
    </section>

    <section class="footer_colonne">
      <div class="sidebar">
      <?php dynamic_sidebar( 'footer_3' ); ?>
      </div>
    </section>

</section>

</footer>

    <?php wp_footer(); ?> 

</body>
</html>