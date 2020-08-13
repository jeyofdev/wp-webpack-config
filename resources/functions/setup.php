<?php 

/**
 * Theme assets
 */
function wpThemeUsingWebpack_register_assets () : void
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], '4.4.1');

    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['jquery', 'popper'], '4.4.1', true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], '1.16.0', true);

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('wpThemeUsingWebpack-app', get_template_directory_uri() . '/assets/styles/app.css', [], '1.0', false);
    wp_enqueue_script('wpThemeUsingWebpack-app', get_template_directory_uri (). '/assets/scripts/app.js', [], '1.0', true); 

    wp_enqueue_script('bootstrap');
}


/**
 * Theme supports
 */
function wpThemeUsingWebpack_supports () : void
{
    add_theme_support("post-thumbnails");
    add_theme_support("menus");
    register_nav_menu('header', 'main navigation');
    load_theme_textdomain('wpThemeUsingWebpack', get_template_directory() . '/languages');
}


/**
 * Theme Sidebar
 */
function wpThemeUsingWebpack_register_widget () : void
{
    register_sidebar([
        "id" => "blog",
        "name" => "sidebar blog",
        "before_widget" => '<div class="bg-dark p-4 mb-3 %2$s" id="%1$s">',
        "after_widget" => '</div>',
        "before_title" => '<h3 class="font-italic text-white">',
        "after_title" => '</h3>'
    ]);
}


add_action('wp_enqueue_scripts', 'wpThemeUsingWebpack_register_assets');
add_action("after_setup_theme", 'wpThemeUsingWebpack_supports');
add_action("widgets_init", "wpThemeUsingWebpack_register_widget");