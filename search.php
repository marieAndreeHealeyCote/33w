<?php

/*
 * Le modèle search.php
 * Permet la recherche
 */
?>
<?php get_header() ?>
<section class="populaire">
    <div class="populaire__category">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                // affiche l'image "mise en avant" miniature
        ?>
                <article class="populaire__category__contenu">
                    <div class="populaire__category__image">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="populaire__category__titre">
                        <!-- affiche le titre principal du "post" -->
                        <h2><?php the_title(); ?></h2>
                        <!-- // Cette fonction permet d'afficher l'ensemble du contenu du post (article ou page) -->
                        <?php
                        // Cette fonction permet de tronquer et d'afficher un permalien
                        $lien = ' [...] <a href="' . get_permalink() . '">Lire la suite</a>';
                        echo '<p>' . wp_trim_words(get_the_excerpt(), 50, $lien) . '</p>';
                        ?>
                    </div>
                </article>
        <?php
            }
        } ?>
    </div>
</section>
<?php get_footer(); ?>