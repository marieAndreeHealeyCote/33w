<?php
/*
* Template-part carrousel.php
* Affiche un carrousel animé et dynamique au niveau de la navigation
*/
?>
<?php
// Variables
$hero_carrousel = get_theme_mod('hero_carrousel');
$hero_background[0] = get_theme_mod("hero_background_0");
$hero_background[1] = get_theme_mod("hero_background_1");
$hero_background[2] = get_theme_mod("hero_background_2");
$hero_background[3] = get_theme_mod("hero_background_3");
$hero_background[4] = get_theme_mod("hero_background_4");
$hero_background[5] = get_theme_mod("hero_background_5");
$hero_background[6] = get_theme_mod("hero_background_6");
$hero_background[7] = get_theme_mod("hero_background_7");
?>

<?php for ($i = 0; $i < $hero_carrousel; $i++): ?>
    <div class="carrousel" style="background-image: url('<?= $hero_background[$i] ?>');"></div>
<?php endfor ?>


<form class="carrousel__form">
    <?php for ($i = 0; $i < $hero_carrousel; $i++): ?>
        <input type="radio" class="carrousel__radio" name="carrousel__radio">
    <?php endfor ?>
</form>