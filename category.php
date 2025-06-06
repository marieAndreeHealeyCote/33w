<?php
/*
 * Le modèle category
 * Représente le modèle category 
 */
?>
<?php get_header() ?>
<!-- <h1>trace seulement à retirer------------------ Category.php -----------------------</h1> -->
<section class="populaire">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
            // affiche l'image "mise en avant" miniature
            the_post_thumbnail('thumbnail');
    ?>
            <!-- affiche le titre principal du "post" -->
            <h1><?php the_title(); ?></h1>
            <!-- // Cette fonction permet d'afficher l'ensemble du contenu du post (article ou page) -->
    <?php the_content();
        }
    } ?>
</section>
<?php get_footer(); ?>