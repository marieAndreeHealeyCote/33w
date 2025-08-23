<?php

/*
 * Le modèle single.php
 * Pour afficher tous les 'post' individuels et les pièces jointes
 */
?>
<?php get_header() ?>
<section class="populaire">
    <div class="populaire__single">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                // affiche l'image "mise en avant" miniature
                the_post_thumbnail('medium_large');
        ?>
                <div>Auteur: <?php the_author(); ?></div>
                <div>Date de publication: <?php the_date(); ?></div>
                <h1>
                    <?php
                    // affiche le titre principal du "post"
                    the_title();
                    ?>
                </h1>
                <div class="populaire__single__contenu">
                    <div>Température minimum: <?= get_field('temperature_minimum', get_the_ID()); ?>&#8451;</div>
                    <div>Température maximum: <?= get_field('temperature_maximum', get_the_ID()); ?>&#8451;</div>
                    <div>Température moyenne: <?= get_field('temperature_moyenne', get_the_ID()); ?>&#8451;</div>
                    <div>Niveau d'appréciation: <?= get_field('appreciation', get_the_ID()); ?></div>
                </div>
        <?php
                // Cette fonction permet d'afficher l'ensemble du contenu du post (article ou page)
                the_content();
                // Affiche un lien de modification pour l’article
                edit_post_link();
            endwhile;
        endif;
        ?>
        <br>
        <a href="<?= home_url(); ?>">Retour à la page d'accueil →</a>
    </div>
    <div class="populaire__nav populaire__nav__bouton">
        <?php wp_nav_menu(array(
            "menu" => "categories",
            'container' => '',
            'menu_class' => '',
        )); ?>
    </div>
</section>
<?php get_footer(); ?>