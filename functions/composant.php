<?php
/*
 * Gabarits sous forme de fonctions. Chacune peut être paramétré
 * 
 */
?>

<?php
/*
 * Fonction qui permet de générer les icônes des médias sociaux
 */

function icone_sociaux($couleur)
{
    // pour enlever le # de la position 0 on extrait à partir de la position 1
    $couleur = substr($couleur, 1);
?>

    <a class="icone-reseaux-sociaux" href="https://github.com/marieAndreeHealeyCote/33w" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" alt="icone github">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.facebook.com" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" alt="icone facebook">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.instagram.com/" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=<?= $couleur ?>" alt="icone instagram">
    </a>

    <a class="icone-reseaux-sociaux" href="https://x.com/" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=twitter&color=<?= $couleur ?>" alt="icone twitter">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.airbnb.ca" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=airbnb&color=<?= $couleur ?>" alt="icone airbnb">
    </a>

    <a class="icone-reseaux-sociaux" href="https://www.youtube.com/" target="_blank">
        <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=<?= $couleur ?>" alt="icone youtube">
    </a>
<?php } ?>

<?php
/*
 * Fonction qui permet un générateur de vague pour séparer deux sections
 */

function vague($couleur_haut, $couleur_bas)
{ ?>
    <style>
        .style-vague {
            position: relative;
            top: 9px;
        }
    </style>
    <svg class="style-vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
            fill="<?= $couleur_haut ?>"
            fill-opacity="1"
            d="M0,224L60,202.7C120,181,240,139,360,149.3C480,160,600,224,720,213.3C840,203,960,117,1080,85.3C1200,53,1320,75,1380,85.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>

<?php } ?>

<?php
/**
 * Fonction qui permet d'extraire les catégories dans la bd de WP
 */

function extraire_list_categories($nom_categorie, $nom_categorie_a_exclure)
{
    //$parent_category_id = get_term_by("slug", $nom_categorie, "category");
    $parent_category = get_category_by_slug($nom_categorie);
    $categorie_a_exclure = get_category_by_slug($nom_categorie_a_exclure);

    $tableau = array(
        'parent' => $parent_category->term_id,
        'hide_empty' => true
    );
    $list_categories = get_categories($tableau);
    echo "<ul class='list_categories'>";
    foreach ($list_categories as $categorie) {
        if ($categorie->slug == 'populaire') continue;
        echo "<li data-id='" . $categorie->term_id . "' data-cat-id-exclure='" . $categorie_a_exclure->term_id . "'>" . $categorie->name . "</li>";
    }
    echo "</ul>";
}
?>

<?php

/**
 * Fonction qui permet d'afficher les cartes des destinations
 */

function carte($cat_a_retirer)
{
    $categorie = get_category_by_slug($cat_a_retirer);
    $categorie_galerie = get_category_by_slug('galerie');
    $posts = get_posts([
        'category' => $categorie->term_id,
        'category__not_in' => [$categorie_galerie->term_id],
        'posts_per_page' => 6,
    ]);
    foreach ($posts as $post):
        $post_lien = ' [...] <a href="' . get_permalink() . '"><br>Lire la suite →</a>';
?>
        <article class="conteneur__carte">
            <?= get_the_post_thumbnail($post, 'miniature'); ?>
            <h2><?= get_the_title($post); ?></h2>
            <p><?= wp_trim_words(get_the_excerpt($post), 10, $post_lien) ?></p>

            <p>Température minimum: <?php the_field('temperature_minimum', $post->ID); ?>°C</p>
            <p>Température maximum: <?php the_field('temperature_maximum', $post->ID); ?>°C</p>
            <p>Température moyenne: <?php the_field('temperature_moyenne', $post->ID); ?>°C</p>
            <?php
            $categories = get_the_category($post->ID);
            foreach ($categories as $category) {
                if ($category->slug == "destination") continue;
                if ($categorie->slug == $category->slug) continue;
                echo '<a href="' . get_category_link($category) . '">' . $category->name . '</a>';
            }
            ?>
        </article>
<?
    endforeach;
}
