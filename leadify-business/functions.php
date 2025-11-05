<?php
function meu_tema_scripts() {
    // CSS
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());

    // JS (se quiser usar um script seu)
    wp_enqueue_script('meu-tema-script', get_template_directory_uri() . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');
