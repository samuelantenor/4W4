<?php
/**
 * Template name: Atelier
 *
 */
?>
<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<table>
    <tr>
        <th>Date</th>
        <td><?php the_field('date_de_latelier'); ?></td>
    </tr>
    <tr>
        <th>Heure</th>
        <td><?php the_field('heure_de_la_formation'); ?></td>
    </tr>
    <tr>
        <th>Durée</th>
        <td><?php the_field('duree'); ?> heures</td>
    </tr>
    <tr>
        <th>Local</th>
        <td><?php the_field('local'); ?></td>
    </tr>
    <tr>
        <th>Formateur</th>
        <td><?php the_field('formateur'); ?></td>
    </tr>
</table>
    
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
