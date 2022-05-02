<?php
function load_stylesheets()
{
    wp_register_style('styles', get_template_directory_uri() . '/layout/styles/layout.css', array(), 1, 'all');
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



//load scripts


wp_register_script('backtotop', get_template_directory_uri() . "/layout/scripts/jquery.backtotop.js", array(), 1, 1, 1);

wp_enqueue_script('backtotop');

wp_register_script('mobilemenu', get_template_directory_uri() . "/layout/scripts/jquery.mobilemenu.js", array(), 1, 1, 1);

wp_enqueue_script('mobilemenu');


add_theme_support("menus");

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
