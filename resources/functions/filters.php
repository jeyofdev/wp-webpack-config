<?php

/**
 * Filters the current theme directory URI
 */
function wpThemeUsingWebpack_template_directory_uri ($template_dir_uri) : string
{
    return dirname($template_dir_uri);
};



/**
 * Add a class to li items of the menu
 */
function wpThemeUsingWebpack_menu_class (array $classes) : array
{
    $classes[] = "nav-item";
    return $classes;
}


/**
 * Add a class to menu links
 */
function wpThemeUsingWebpack_menu_link_class (array $attributes) : array
{
    $attributes["class"] = "nav-link";
    return $attributes;
}


/**
 * Add a class to the links read more
 */
function wpThemeUsingWebpack_custom_morelink(string $link) : string
{
    return str_replace(
        'more-link',
        'btn btn-dark more-link ',
        $link
    );
}


/**
 * Add a class to ul elements in widgets
 */
function wpThemeUsingWebpack_widget_output(string $widget_output, string $ul_class ) : string
{
    if (strpos($widget_output, '<ul')) {
        $widget_output = str_replace('<ul>', '<ul class="'.$ul_class.'">', $widget_output);
    }

    return $widget_output;
}


/**
 * Change the title of the archives
 */
function wpThemeUsingWebpack_archive_title(string $title) : string
{
    if ( is_category() ) {
		$title = sprintf( __('List of articles of the category : %s', 'wpThemeUsingWebpack'), single_cat_title( '', false ) );
	} elseif ( is_month() ) {
		$title = sprintf( __('List of articles of the month : %s', 'wpThemeUsingWebpack'), get_the_date(__('F Y', 'monthly archives date format')));
	}

    return $title;
}


add_filter("template_directory_uri", "wpThemeUsingWebpack_template_directory_uri");
add_filter("nav_menu_css_class", "wpThemeUsingWebpack_menu_class");
add_filter("nav_menu_link_attributes", "wpThemeUsingWebpack_menu_link_class");
add_filter("the_content_more_link", "wpThemeUsingWebpack_custom_morelink", 10);
add_filter("widget_output", "wpThemeUsingWebpack_widget_output", 10, 2 );
add_filter("get_the_archive_title", "wpThemeUsingWebpack_archive_title");