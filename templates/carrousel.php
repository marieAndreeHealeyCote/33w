<?php
/*
* Template-part carrousel.php
* Affiche un carrousel animé et dynamique au niveau de la navigation
*/
?>
<?php
// Variables
$hero_background[0] = get_theme_mod("hero_background_0");
$hero_background[1] = get_theme_mod("hero_background_1");
$hero_background[2] = get_theme_mod("hero_background_2");
?>

<div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
<div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
<div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:1"></div>

<form class="carrousel__form">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
</form>