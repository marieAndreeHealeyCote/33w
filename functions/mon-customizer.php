<?php
/*
 * Configuration des nouveaux panneaux du customizer
 */
function theme_33w_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section - Accueil', 'theme_33w'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Marie-Andrée Healey-Côté', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur du thème', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_33w_customize_register');
