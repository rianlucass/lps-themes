<?php
// Enfileirar estilos do Tailwind
function leadify_business_enqueue_styles() {
    wp_enqueue_style(
        'leadify-tailwind',
        get_template_directory_uri() . '/assets/dist/css/output.css',
        array(),
        '1.0.0'
    );
    
    // Opcional: Google Fonts
    wp_enqueue_style(
        'leadify-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'leadify_business_enqueue_styles');

// Suporte a recursos do tema
function leadify_business_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'leadify_business_setup');

// Registrar menu de navegação
function leadify_business_menus() {
    register_nav_menus(array(
        'primary' => 'Menu Principal',
    ));
}
add_action('init', 'leadify_business_menus');

function leadify_business_custom_logo_setup() {
    $defaults = array(
        'height'               => 50,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'leadify_business_custom_logo_setup');

?>

