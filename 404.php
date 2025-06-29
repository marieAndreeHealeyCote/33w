<?php

/*
 * Le modèle 404
 * Représente le modèle erreur 
 */
?>
<?php get_header() ?>
<section class="populaire">
    <div class="populaire__404">
        <h1>Erreur 404</h1>
        <h2>L'adresse que vous demandez n'existe pas ...</h2>
        <img src="http://localhost/iniationGestionnaireContenu/33w/wp-content/uploads/2025/06/404-error.webp" alt="404 error">
        <br>
        <a href="<?= home_url(); ?>">Retour à la page d'accueil →</a>
    </div>
</section>
<?php get_footer(); ?>