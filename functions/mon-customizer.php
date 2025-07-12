<?php
/*
 * Configuration des nouveaux panneaux du customizer
 */
function theme_33w_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    // SECTION HERO //
    // Ajout du panneau héro
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero - Accueil', 'theme_33w'),
        'priority' => 30,
    ));

    // Champ description
    // Configuration du champs 
    $wp_customize->add_setting('hero_description', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('hero_description', array(
        'label' => __('Description', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Champ auteur
    // Configuration du champs 
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Champ courriel 
    // Configuration du champs 
    $wp_customize->add_setting('hero_courriel', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('hero_courriel', array(
        'label' => __('Courriel', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Champ adresse 
    // Configuration du champs 
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Champ téléphone 
    // Configuration du champs 
    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Téléphone', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Image 0
    // Créer le champ
    $wp_customize->add_setting('hero_background_0', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Créer le contrôleur
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_0', array(
        'label' => __('Image en arrière plan 0', 'theme_33w'),
        'section' => 'hero_section',
    )));

    // Image 1
    // Créer le champ
    $wp_customize->add_setting('hero_background_1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Créer le contrôleur
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_1', array(
        'label' => __('Image en arrière plan 1', 'theme_33w'),
        'section' => 'hero_section',
    )));

    // Image 2
    // Créer le champ
    $wp_customize->add_setting('hero_background_2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Créer le contrôleur
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_2', array(
        'label' => __('Image en arrière plan 2', 'theme_33w'),
        'section' => 'hero_section',
    )));

    // Couleur du texte de la section hero
    // Champ couleur
    // Créer le champs 
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Créer le contrôleur
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_33w'),
        'section' => 'hero_section',
    )));

    // Bouton
    // Créer le champ
    $wp_customize->add_setting('hero_cta_texte', array(
        'default' => __('Texte du Bouton', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('hero_cta_texte', array(
        'label' => __('Texte du Bouton', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Créer le champ
    $wp_customize->add_setting('hero_cta_lien', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('hero_cta_lien', array(
        'label' => __('Lien du Bouton', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    // SECTION MEDIAS SOCIAUXS //
    // Ajout du panneau 
    $wp_customize->add_section('medias-sociaux_section', array(
        'title' => __('Section Médias Sociaux', 'theme_33w'),
        'priority' => 30,
    ));
    // Facebook
    // Créer le champ
    $wp_customize->add_setting('facebook_lien', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('facebook_lien', array(
        'label' => __('Lien Facebook', 'theme_33w'),
        'section' => 'medias-sociaux_section',
        'type' => 'url',
    ));

    // Instagram
    // Créer le champ
    $wp_customize->add_setting('instagram_lien', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('instagram_lien', array(
        'label' => __('Lien Instagram', 'theme_33w'),
        'section' => 'medias-sociaux_section',
        'type' => 'url',
    ));

    // Twitter
    // Créer le champ
    $wp_customize->add_setting('twitter_lien', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('twitter_lien', array(
        'label' => __('Lien Twitter', 'theme_33w'),
        'section' => 'medias-sociaux_section',
        'type' => 'url',
    ));

    // Youtube
    // Créer le champ
    $wp_customize->add_setting('youtube_lien', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('youtube_lien', array(
        'label' => __('Lien Youtube', 'theme_33w'),
        'section' => 'medias-sociaux_section',
        'type' => 'url',
    ));

    // Github
    // Créer le champ
    $wp_customize->add_setting('github_lien', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('github_lien', array(
        'label' => __('Lien Github', 'theme_33w'),
        'section' => 'medias-sociaux_section',
        'type' => 'url',
    ));

    // Airbnb
    // Créer le champ
    $wp_customize->add_setting('airbnb_lien', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('airbnb_lien', array(
        'label' => __('Lien Airbnb', 'theme_33w'),
        'section' => 'medias-sociaux_section',
        'type' => 'url',
    ));

    // SECTION FOOTER //
    // Ajout du panneau footer
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section Footer - Pied de page', 'theme_33w'),
        'priority' => 30,
    ));

    // Liens sur le voyage
    // Lien #1
    // Créer le champ texte
    $wp_customize->add_setting('footer_text_lien1', array(
        'default' => __('Nom du lien #1', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Configuration du contrôleur 
    $wp_customize->add_control('footer_text_lien1', array(
        'label' => __('Nom du lien #1', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Créer le champ texte URL
    $wp_customize->add_setting('footer_url_lien1', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('footer_url_lien1', array(
        'label' => __('Lien #1', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Lien #2
    // Créer le champ texte
    $wp_customize->add_setting('footer_text_lien2', array(
        'default' => __('Nom du lien #1', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Configuration du contrôleur 
    $wp_customize->add_control('footer_text_lien2', array(
        'label' => __('Nom du lien #2', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Créer le champ URL
    $wp_customize->add_setting('footer_url_lien2', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('footer_url_lien2', array(
        'label' => __('Lien #2', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Lien #3
    // Créer le champ texte
    $wp_customize->add_setting('footer_text_lien3', array(
        'default' => __('Nom du lien #1', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Configuration du contrôleur 
    $wp_customize->add_control('footer_text_lien3', array(
        'label' => __('Nom du lien #3', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Créer le champ URL
    $wp_customize->add_setting('footer_url_lien3', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('footer_url_lien3', array(
        'label' => __('Lien #3', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Lien #4
    // Créer le champ texte
    $wp_customize->add_setting('footer_text_lien4', array(
        'default' => __('Nom du lien #4', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Configuration du contrôleur 
    $wp_customize->add_control('footer_text_lien4', array(
        'label' => __('Nom du lien #4', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Créer le champ URL
    $wp_customize->add_setting('footer_url_lien4', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Configuration du contrôleur
    $wp_customize->add_control('footer_url_lien4', array(
        'label' => __('Lien #4', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Champ adresse 
    // Configuration du champs 
    $wp_customize->add_setting('footer_adresse', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));


    // Champ description
    // Configuration du champs 
    $wp_customize->add_setting('footer_description', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('footer_description', array(
        'label' => __('Description', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Champ telephone
    // Configuration du champs 
    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // Configuration du contrôleur de champs
    $wp_customize->add_control('footer_telephone', array(
        'label' => __('Téléphone', 'theme_33w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Couleur du texte de la section hero
    // Champ couleur
    // Créer le champs 
    $wp_customize->add_setting('footer_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Créer le contrôleur
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
        'label' => __('Couleur du texte', 'theme_33w'),
        'section' => 'footer_section',
    )));
}

add_action('customize_register', 'theme_33w_customize_register');
