<?php
/**
 * Montana Assets
 *
 * @return void
 */
function montana_assets(){
    wp_enqueue_style( 'vue-style', get_template_directory_uri() . '/assets/css/styles.css', array(), time(), 'all' );

    wp_enqueue_script( 'vue-bundle', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'), time(), true );
}
add_action( 'wp_enqueue_scripts', 'montana_assets' );