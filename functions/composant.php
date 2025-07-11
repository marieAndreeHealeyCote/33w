<?php
function icone_sociaux($couleur)
{
    // pour enlever le # de la position 0 on extrait à partir de la position 1
    $couleur = substr($couleur, 1);
?>

    <a class="icone-reseaux-sociaux" href="https://github.com/marieAndreeHealeyCote/33w" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" alt="icone github">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.facebook.com" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" alt="icone facebook">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.instagram.com/" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=<?= $couleur ?>" alt="icone instagram">
    </a>

    <a class="icone-reseaux-sociaux" href="https://x.com/" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=twitter&color=<?= $couleur ?>" alt="icone twitter">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.airbnb.ca" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=airbnb&color=<?= $couleur ?>" alt="icone airbnb">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.youtube.com/" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=<?= $couleur ?>" alt="icone youtube">
    </a>
<?php } ?>