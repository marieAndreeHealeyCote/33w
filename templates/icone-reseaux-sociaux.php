<?php
/*
 * Template-part icone.php
 * Permet d'afficher les icones des medias sociaux
*/
?>
<?php
// Déclaration de variables
// Section Medias Sociaux
$github_lien = get_theme_mod('github_lien', '#');
$facebook_lien = get_theme_mod('facebook_lien', '#');
$instagram_lien = get_theme_mod('instagram_lien', '#');
$twitter_lien = get_theme_mod('twitter_lien', '#');
$airbnb_lien = get_theme_mod('airbnb_lien', '#');
$youtube_lien = get_theme_mod('youtube_lien', '#');
?>

<a class="icone-reseaux-sociaux" href="<?= $github_lien ?>" target="_blank">
    <img src="https://s2.svgbox.net/social.svg?ic=github" alt="icone github">
</a>

<a class="icone-reseaux-sociaux" href="<?= $facebook_lien ?>" target="_blank">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook" alt="icone facebook">
</a>

<a class="icone-reseaux-sociaux" href="<?= $instagram_lien ?>" target="_blank">
    <img src="https://s2.svgbox.net/social.svg?ic=instagram" alt="icone instagram">
</a>

<a class="icone-reseaux-sociaux" href="<?= $twitter_lien ?>" target="_blank">
    <img src="https://s2.svgbox.net/social.svg?ic=twitter" alt="icone twitter">
</a>

<a class="icone-reseaux-sociaux" href="<?= $airbnb_lien ?>" target="_blank">
    <img src="https://s2.svgbox.net/social.svg?ic=airbnb" alt="icone airbnb">
</a>

<a class="icone-reseaux-sociaux" href="<?= $youtube_lien ?>" target="_blank">
    <img src="https://s2.svgbox.net/social.svg?ic=youtube" alt="icone youtube">
</a>