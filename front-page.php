<?php
/*
* Le modèle front-page 
* Permet d'afficher la page d'accueil
*/
?>
<?php get_header() ?>
<h1>trace seulement à retirer------------------ Front-page.php -----------------------</h1>
<section class="hero">
    <div class="hero__contenu">
        <h1 class="hero__titre">Voyagez avec Club Voyage !</h1>
        <p class="hero__description">
            Découvrez des destinations uniques et inoubliables avec Club Voyage.
            Nous vous offrons des expériences authentiques, des paysages à couper
            le souffle et des aventures sur mesure. Partez à la découverte du
            monde avec nous et créez des souvenirs impérissables.
        </p>
        <p class="hero__description">
            info@cmaisonneuve.qc.ca <br />
            3800, rue Sherbrooke, Montréal<br />
            514-254-7131<br /><br />
            <a href="#" class="bouton">S'inscrire</a>
        </p>
        <div>
            <a href="#"><img
                    class="hero__medias-sociaux"
                    src="http://localhost/iniationGestionnaireContenu/33w/wp-content/uploads/2025/05/icone-facebook-3.png"
                    alt="icone-facebook" /></a>
            <a href="#"><img
                    class="hero__medias-sociaux"
                    src="http://localhost/iniationGestionnaireContenu/33w/wp-content/uploads/2025/05/icone-instagram-2.png"
                    alt="icone-instagram" /></a>
        </div>
    </div>
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