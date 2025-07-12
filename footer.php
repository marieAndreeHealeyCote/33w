<?php
/*
* Modèle footer
* Affiche le pied de la page
*/ ?>

<?php
// Déclaration de variables
// Section footer
$footer_couleur = get_theme_mod('footer_couleur');
$footer_url_lien1 = get_theme_mod('footer_url_lien1', 'Default CTA');
$footer_text_lien1 = get_theme_mod('footer_text_lien1', '#');
$footer_url_lien2 = get_theme_mod('footer_url_lien2', 'Default CTA');
$footer_text_lien2 = get_theme_mod('footer_text_lien2', '#');
$footer_url_lien3 = get_theme_mod('footer_url_lien3', 'Default CTA');
$footer_text_lien3 = get_theme_mod('footer_text_lien3', '#');
$footer_url_lien4 = get_theme_mod('footer_url_lien4', 'Default CTA');
$footer_text_lien4 = get_theme_mod('footer_text_lien4', '#');
$footer_adresse = get_theme_mod('footer_adresse', 'Default address');
$footer_description = get_theme_mod('footer_description', 'Default Description');
$footer_telephone = get_theme_mod('footer_telephone', 'Default Phone');
?>

<footer class="piedpage">
    <?php vague("#fff", '#2e8b57'); ?>

    <style>
        .piedpage__s1 h2 {
            color: <?= $footer_couleur ?>
        }
    </style>
    <div class="piedpage-fond">
        <section class="piedpage__s1">
            <div class="piedpage__s1__liens">
                <h2>Liens sur le voyage</h2>
                <ul class="piedpage__s1__liens__liste">
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="<?= $footer_url_lien1 ?>" target="_blank"><?= $footer_text_lien1 ?></a>
                    </li>
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="<?= $footer_url_lien2 ?>" target="_blank"><?= $footer_text_lien2 ?></a>
                    </li>
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="<?= $footer_url_lien3 ?>" target="_blank"><?= $footer_text_lien3 ?></a>
                    </li>
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="<?= $footer_url_lien4 ?>" target="_blank"><?= $footer_text_lien4 ?></a>
                    </li>
                </ul>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <h2>Adresse</h2>
                    <p> <?= $footer_adresse ?>
                        <br />
                        <?= $footer_telephone ?>
                    </p>
                    <?php get_search_form() ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h2>Mission du Club de Voyage</h2>
                <p>
                    <?= $footer_description ?>
                </p>
            </div>
        </section>
        <section class="piedpage__s2">
            <div class="piedpage__s2__medias-sociaux">
                <?php icone_sociaux($footer_couleur) ?>
            </div>
            <div class="piedpage__s2__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    'container' => '',
                    'menu_class' => '',
                )); ?>
            </div>
        </section>
        <section class="piedpage__s3">
            <div>© Copyright Club de Voyage 2025</div>
        </section>
    </div>
</footer>
<script src="scripts/checkbox.js"></script>
<?php wp_footer() ?>
</body>

</html>