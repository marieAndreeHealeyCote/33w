<?php
/*
* Le modèle front-page 
* Permet d'afficher la page d'accueil
*/
?>
<?php get_header() ?>
<!-- Section hero -->
<section class="hero">
    <?php get_template_part("templates/carrousel"); ?>
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
<!-- section rest-api -->
<section class="destination">
    <?php extraire_list_categories("destination"); ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
<?php get_footer(); ?>