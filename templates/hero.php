<?php
/*
 * Template-part hero.php
 * Permet d'afficher la section hero
 */
?>

<?php
// Déclaration de variables
// Section hero
$hero_auteur = get_theme_mod('hero_auteur', 'Default Author');
$hero_description = get_theme_mod('hero_description', 'Default Description');
$hero_courriel = get_theme_mod('hero_courriel', 'Default email');
$hero_adresse = get_theme_mod('hero_adresse', 'Default address');
$hero_telephone = get_theme_mod('hero_telephone', 'Default phone');
$hero_cta_text = get_theme_mod('hero_cta_text', 'Default CTA');
$hero_cta_link = get_theme_mod('hero_cta_link', '#');

?>


<div class="hero__contenu">
    <h1 class="hero__titre"><?php bloginfo('name') ?></h1>
    <p class="hero__description">
        <?php bloginfo('description') ?>
        <?= $hero_description ?>
    </p>
    <p class="hero__description">
        <?= $hero_courriel ?> <br />
        <?= $hero_adresse ?><br />
        <?= $hero_telephone ?><br /><br />
        <a href="<?= $hero_cta_link ?>" class="bouton"><?= $hero_cta_text ?></a>
    </p>
    <div class="hero__medias-sociaux">
        <?php get_template_part("templates/icone-reseaux-sociaux"); ?>
    </div>
    <p>Auteur du thème: <?= $hero_auteur ?></p>
</div>