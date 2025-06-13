<?php

/*
 * Le modèle single.php
 * Pour afficher tous les 'post' individuels et les pièces jointes
 */
?>
<?php get_header() ?>
<section class="populaire">
    <div class="populaire__single">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                // affiche l'image "mise en avant" miniature
                the_post_thumbnail('large');
        ?>
                <!-- affiche le titre principal du "post" -->
                <h1><?php the_title(); ?></h1>
                <!-- // Cette fonction permet d'afficher l'ensemble du contenu du post (article ou page) -->
        <?php the_content();
            }
        } ?>
    </div>
</section>
<?php get_footer(); ?>