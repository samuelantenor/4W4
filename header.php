<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <title>mon 4W4</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site_entete">
        <?php the_custom_logo(); ?>

    <section class="sectionTopFrontPage">
        <?php wp_nav_menu(array(
                    "menu"=>"entete",
                    "container" => "nav",
                    "container_class" => "menu__entete"
        ));          
        ?>

        <?= get_search_form() ?>
    </section>
    <h1><a class="site__titre" href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
    <h2><?= bloginfo('description'); ?></h2>
</header>