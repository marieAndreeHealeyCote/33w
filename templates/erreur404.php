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
$erreur404_description = get_theme_mod('erreur404_description', 'Default Description');
?>

<h1><?= $erreur404_titre ?></h1>
<p class=""><?= $erreur404_description ?></p>
<div class="erreur404__bouton-accueil">
    <a href="<?= home_url(); ?>">Retour à l'accueil</a>
</div>
<div class="erreur404___bouton-menu">

</div>