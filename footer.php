<footer class="site__footer">
  <section class="information">
    <div class="footer__logo">
        <?php the_custom_logo(); ?>
    </div>

    <div class="choix"> 
      <h4>Menu</h4> 
      <?php wp_nav_menu(array(
        "menu" => "entete",
        "container" => "choix",
      )); ?>

    </div>
    <div class="Recherche"> 
      <h4>Rechercher</h4> 
      <div class="barreRecherche"><?= get_search_form(); ?></div> 

    </div>

    <div class="Contacts"> 
      <h4>Contactez-nous!</h4> 
        <p>3800 R. Sherbrooke E, Montréal, QC</p>
        <p>H1X 2A2</p>
        <p>(514) 254-7131</p>
    </div>
  </section>
  
  <section class="widget">
    <div class="footer__col">
      <div class="sidebar">
        <?php dynamic_sidebar( 'footer_1' ); ?>
      </div>
    </div>
    <div class="footer__col">
      <div class="sidebar">
        <?php dynamic_sidebar( 'footer_2' ); ?>
      </div>
    </div>
    <div class="footer__col">
      <div class="sidebar">
        <?php dynamic_sidebar( 'footer_3' ); ?>
      </div>
    </div>
  </section>

</footer>
  <?php wp_footer(); ?>
</body>
</html>