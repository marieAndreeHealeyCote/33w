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