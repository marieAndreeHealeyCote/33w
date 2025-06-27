<?php
/*
* Le modèle front-page 
* Permet d'afficher la page d'accueil
*/
?>
<?php get_header() ?>
<!-- Section hero -->
<section class="hero">
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