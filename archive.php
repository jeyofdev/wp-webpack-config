<?php get_header(); ?>

<h1 class="text-dark mb-5"><?= the_archive_title(); ?></h1>

<?php get_template_part("template-parts/list-posts"); ?>

<?php get_footer(); ?>
