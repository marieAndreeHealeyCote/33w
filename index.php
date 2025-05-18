<?php get_header() ?>
<section class="hero">
    <div class="hero__contenu">
        <h1 class="hero__titre">Voyagez avec Club Voyage !</h1>
        <p class="hero__description">
            Découvrez des destinations uniques et inoubliables avec Club Voyage.
            Nous vous offrons des expériences authentiques, des paysages à couper
            le souffle et des aventures sur mesure. Partez à la découverte du
            monde avec nous et créez des souvenirs impérissables.
        </p>
        <p class="hero__description">info@cmaisonneuve.qc.ca</p>
        <p class="hero__description">3800, rue Sherbrooke, Montréal</p>
        <p class="hero__description">514-254-7131</p>
        <a href="#" class="bouton">S'inscrire</a>
        <!-- <div>
            <a href="#"><img
                    class="hero__medias-sociaux"
                    src="images/icone-facebook.png"
                    alt="icone-facebook" /></a>
            <a href="#"><img
                    class="hero__medias-sociaux"
                    src="images/icone-instagram.png"
                    alt="icone-instagram" /></a>
        </div> -->
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
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <h1><?php the_title(); ?></h1>
    <?php the_content();
        }
    } ?>
</section>
<?php get_footer(); ?>