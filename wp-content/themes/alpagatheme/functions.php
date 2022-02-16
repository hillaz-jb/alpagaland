<?php

function alpaga_theme_setup()
{

    register_nav_menus(
        array(
            'main' => 'Menu Principal',
        )
    );

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('widgets');
    add_theme_support('widgets-block-editor');
    add_theme_support( 'responsive-embeds');
}

add_action('after_setup_theme', 'alpaga_theme_setup');


function alpaga_load_styles_and_scripts()
{
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'alpaga-root-style',
        get_stylesheet_uri()
    );

    wp_enqueue_script(
        'bootstrapjs',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '',
        true
    );

    wp_enqueue_script(
        'fontawesome',
        'https://kit.fontawesome.com/7dbbf15538.js',
        array(),
        '',
        true
    );
}

add_action('wp_enqueue_scripts', 'alpaga_load_styles_and_scripts');

/**
 * Add custom class on each li tag for the 'main' menu location
 * @param $classes
 * @param $item
 * @param $args
 * @return mixed
 */
function alpaga_add_menu_item_class($classes, $item, $args)
{
    // Check if we passed custom proprety in the args array
    if (property_exists($args, 'item_class')) {
        $classes[] .= $args->item_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'alpaga_add_menu_item_class', 10, 3);

/**
 * Add custom class on each a tag for the 'main' menu location
 * @param $classes
 * @param $item
 * @param $args
 * @return mixed
 */
function alpaga_add_menu_link_class($atts, $item, $args)
{
    if (!array_key_exists('class', $atts)) {
        $atts['class'] = '';
    }

    if ($args->theme_location === 'main') {
        if ($atts['aria-current'] === 'page') {
            $atts['class'] .= 'active ';
        }
    }

    if (property_exists($args, 'link_class')) {
        $atts['class'] .= $args->link_class;
    }
    return $atts;

}

add_filter('nav_menu_link_attributes', 'alpaga_add_menu_link_class', 10, 3);



// remove related products
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
