<?php
/*
 * Le modèle category
 * Représente le modèle category 
 */
?>
<?php get_header() ?>
<section class="populaire">
    <div class="populaire__category">
        <h2>
            <?php
            //  Affiche le nom de la catégorie sur une page de catégorie.
            single_cat_title()
            ?>
        </h2>
        <?=
        // Affiche la description de la catégorie actuelle dans les modèles de catégories.
        category_description();
        ?>
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
                        <h2>
                            <?php
                            //affiche le titre principal du "post"
                            the_title();
                            ?>
                        </h2>
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