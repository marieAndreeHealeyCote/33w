<?php

/**
 * templates-part 404.php
 * Affiche une page d'erreur
 */
?>
<?php
// variables 
$erreur404_titre = get_theme_mod('erreur404_titre');
$erreur404_couleur = get_theme_mod('erreur404_couleur');
$erreur404_background = get_theme_mod('erreur404_background');
$erreur404_description = get_theme_mod('erreur404_description', 'Default Description');
?>
<style>
    .hero__titre {
        color: <?= $erreur404_couleur ?>
    }
</style>

<img class="erreur404__image" src="<?= $erreur404_background ?>" alt="ile sable palmier">

<h1 class="erreur404__titre"><?= $erreur404_titre ?></h1>
<p class="erreur404__description"><?= $erreur404_description ?></p>
<div class="erreur404__bouton-accueil">
    <a href="<?= home_url(); ?>">Retour à l'accueil</a>
</div>
<div class="erreur404___bouton-menu">

</div>
<div class="erreur404__recherche">
    <?php get_search_form() ?>
</div>
<div class="erreur404__nav">
    <?php wp_nav_menu(array(
        "menu" => "destination",
        'container' => '',
        'menu_class' => '',
    )); ?>
</div>