<?php
// correction d'une erreur wp_ob_en_flush_all s'affichant sur la page
remove_action('shutdown', 'wp_ob_end_flush_all', 1);

// Ajout d’options de thème
function mon_theme_supports()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mon_theme_supports');

// Gestion des scripts et styles
function theme_tp_enqueue_styles_and_scripts()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('checkbox', get_stylesheet_directory_uri() . '/scripts/checkbox.js', [], false, ['in_footer' => true]);
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles_and_scripts');


// Permet d'ajouter la barre de recherche
function ajouter_barre_recherche($items, $args)
{
    if ($args->menu == 'principal') {
        $items .= '<form class="recherche" action="#">';
        $items .= '<input class="recherche__input" type="search" name="recherche" id="recherche" placeholder="Recherche..." role="searchbox" aria-label="barre de recherche" />';
        $items .= '<button class="recherche__bouton" title="Rechercher sur le site">';
        $items .= '<img src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000" width="32" height="32" alt="icone de loupe" role="presentation" />';
        $items .= '</button>';
        $items .= '</form>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_barre_recherche', 10, 2);

// Permet d'ajouter une classe sur l'élément 'li'
function ajouter_class_sur_li($classes, $item, $args)
{
    if (isset($args->custom_li_class)) {
        $classes[] = $args->custom_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'ajouter_class_sur_li', 1, 3);

// Permet de modifier la requête principale et filtrer la requête de la page d'accueil
function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        $query->set('category_name', 'Populaire');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');
