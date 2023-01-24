<?php 
/**
 * L'ensemble des fonctions du thème 
*/


wp_enqueue_style('4w4-gr2-principal', // identificateur
                                 get_template_directory_uri() . '/style.css', // adresse url de style.css
                                 array(), // définir les dépendances
                                 filemtime(get_template_directory() . 'style.css'), //calcule de la version du fichier css
                                 ); // media 
?>