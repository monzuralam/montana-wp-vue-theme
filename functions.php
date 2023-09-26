<?php
if (!function_exists('montana_setup')) {
    function montana_setup() {
        /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on montana, use a find and replace
		* to change 'montana' to the name of your theme in all the template files.
		*/
        load_theme_textdomain('montana', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
        add_theme_support('title-tag');

        /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'montana'),
            )
        );

        /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            array(
                'default-color' => 'ffffff',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');
    }
}
add_action('after_setup_theme', 'montana_setup');

/**
 * Montana Assets
 *
 * @return void
 */
function montana_assets() {
    wp_enqueue_style('vue-style', get_template_directory_uri() . '/assets/css/styles.css', array(), time(), 'all');

    wp_enqueue_script('vue-bundle', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'montana_assets');
