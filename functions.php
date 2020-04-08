<?php

require_once "functions/setup.php";
require_once "functions/filters.php";


/**
 * Adapt wordpress pagination to bootstrap classes
 */
function wpThemeUsingWebpack_pagination ()
{
    $pages = paginate_links([
        "type" => "array"
    ]);

    if ($pages === null) {
        return;
    }

    echo '<nav aria-label="pagination" class="blog-pagination mt-0 mb-4">';
    echo '<ul class="pagination">';

    foreach ($pages as $page) {
        $active = strpos($page, "current") !== false;
        $class = "page-item";

        if ($active) {
            $class .= " active";
        }

        echo '<li class="' . $class . '">';

        if ($active) {
            echo str_replace("page-numbers", "page-link bg-dark text-white", $page);
        } else {
            echo str_replace("page-numbers", "page-link text-dark", $page);
        }

        echo '</li>';
    }
    echo '</nav>';
}


/**
 * Meta of the publish date of an article
 */
function wpThemeUsingWebpack_posted_date(?string $textBefore = null) : string
{
    $time_string = sprintf(
        '<time class="entry-date published" datetime="%1$s">%2$s</time>', 
        esc_attr(get_the_date('c')),
        esc_html(get_the_date())
    );

    if (is_null($textBefore)) {
        $textBefore = __('Published on', 'wpThemeUsingWebpack');
    }

    $posted_date = sprintf(
        esc_html_x($textBefore . ' %s', 'wpThemeUsingWebpack' ), $time_string);

    return $posted_date;
}