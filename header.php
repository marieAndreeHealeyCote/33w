<?php
/*
* Modèle header
* Affiche l'entête de la page
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php home_url(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
        <div class="entete__contenu">
            <figure class="entete__logo">
                <?= get_custom_logo(); ?>
            </figure>
            <label for="menu" class="entete__burger">
                <img
                    src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000"
                    width="32"
                    height="32"
                    alt="logo soleil"
                    role="presentation" />
            </label>
            <input type="checkbox" class="menu" id="menu" />
            <nav class="entete__nav">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => '',
                    'menu_class' => 'entete__menu',
                    'custom_li_class'  => 'entete__menu-item'
                )); ?>
                <?php get_search_form() ?>
            </nav>
        </div>
    </header>