<?php
// correction d'une erreur wp_ob_en_flush_all s'affichant sur la page
remove_action('shutdown', 'wp_ob_end_flush_all', 1);

// Ajout d’options de thème
function mon_theme_supports()
{
    add_theme_support('post-thumbnails');
    add_image_size('miniature', 75, 75, true); // Taille carrée
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 75,
        'width'       => 75,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mon_theme_supports');

// Gestion des scripts et styles
function charger_scripts_et_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');

    // Ajouter un style
    $css_path = get_template_directory() . '/style.css';
    $css_url  = get_template_directory_uri() . '/style.css';

    wp_enqueue_style(
        'main-style',
        $css_url,
        array(),
        filemtime($css_path),
        null
    );

    // Ajouter un script
    $script_path = get_template_directory() . '/scripts/checkbox.js';
    $script_url  = get_template_directory_uri() . '/scripts/checkbox.js';

    wp_enqueue_script(
        'checkbox',
        $script_url,
        array(),
        filemtime($script_path),
        true
    );
}
add_action('wp_enqueue_scripts', 'charger_scripts_et_styles');

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
