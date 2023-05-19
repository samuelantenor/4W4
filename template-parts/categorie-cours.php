<?php
/**
 * «template part» gabarit categorie-cours permet d'afficher un article «bloc»
 * qui s'intègre dans la liste des cours qu'accède avec category/cours
 * 
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, -5);
$duree = substr($titre, strpos($titre,'('));
?>
<article class="blocflex__article">
<?php  if(has_post_thumbnail()) {
    the_post_thumbnail('thumbnail');
 // echo get_the_ID();
  } 
else {

    echo get_the_post_thumbnail(192,'thumbnail' );
  }
?>
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre_long; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree; ?></h6>
    <p><?php the_field('enseignant') ?></p>
    <p><?php the_field('domaine') ?></p>
</article>