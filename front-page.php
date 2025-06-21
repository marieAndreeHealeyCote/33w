<?php
/*
* Le modèle front-page 
* Permet d'afficher la page d'accueil
*/
?>
<?php get_header() ?>
<section class="hero">
    <!-- Section hero -->
    <?php
    // ajouter la section hero
    get_template_part("templates/hero"); ?>
</section>
<section class="formulaire">
    <form class="formulaire__contenu" action="#">
        <div class="formulaire__champs">
            <label for="lastname">Nom</label>
            <input
                type="text"
                name="lastname"
                id="lastname"
                placeholder="Écrivez votre nom" />
        </div>
        <div class="formulaire__champs">
            <label for="firstname">Prénom</label>
            <input
                type="text"
                name="firstname"
                id="firstname"
                placeholder="Écrivez votre prénom" />
        </div>
        <div class="formulaire__champs">
            <label for="email">Courriel</label>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="Écrivez votre courriel" />
        </div>
        <div class="formulaire__champs">
            <label for="tel">Téléphone</label>
            <input
                type="tel"
                name="tel"
                id="tel"
                placeholder="Écrivez votre téléphone" />
        </div>
        <input type="submit" value="S'inscrire" />
    </form>
</section>
<!-- Section populaire -->
<section class="populaire">
    <div class="conteneur global">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
        <?php
                // Cette fonction renvoie true si l’article en cours appartient à la catégorie spécifiée, ou à l’une de ses sous-catégories.
                if (in_category('galerie')) {
                    get_template_part("templates/galerie");
                } else {
                    get_template_part("templates/carte");
                }
            }
        } ?>
    </div>
</section>
<?php get_footer(); ?>