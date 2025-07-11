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
                <h1>
                    <?php
                    // affiche le titre principal du "post"
                    the_title();
                    ?>
                </h1>
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
</section>
<?php get_footer(); ?>