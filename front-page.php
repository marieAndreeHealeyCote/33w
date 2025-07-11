<?php
/*
* Le modèle front-page 
* Permet d'afficher la page d'accueil
*/
?>
<?php get_header() ?>
<!-- Section hero -->
<?php $hero_background = get_theme_mod("hero_background"); ?>
<section class="hero" style="background-image: url('<?= $hero_background ?>');">

    <?php
    $hero_background[0] = get_theme_mod("hero_background_0");
    $hero_background[1] = get_theme_mod("hero_background_1");
    $hero_background[2] = get_theme_mod("hero_background_2");
    ?>
    <div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
    <div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
    <div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:0"></div>
    <form class="carrousel__form">
        <input type="radio" class="carrousel__radio" name="carrousel__radio">
        <input type="radio" class="carrousel__radio" name="carrousel__radio">
        <input type="radio" class="carrousel__radio" name="carrousel__radio">
    </form>


    <?php get_template_part("templates/hero"); ?>
</section>
<!-- Section formulaire -->
<section class="formulaire">
    <?php get_template_part("templates/formulaire"); ?>
</section>
<!-- Section populaire -->
<section class="populaire">
    <?php get_template_part("templates/populaire"); ?>
</section>
<?php get_footer(); ?>