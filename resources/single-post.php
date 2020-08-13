<?php get_header(); ?>

<div class="row mt-5 mb-4">
    <div class="col-md-8 blog-main bg-white px-5">
        <div class="row flex-column">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <p>
                        <?php if (get_the_post_thumbnail() !== '') : ?>
                            <img src="<?= the_post_thumbnail_url(); ?>" alt="" style="width:100%; height:auto;">
                        <?php endif; ?>
                    </p>
                    <h1 class="text-dark mb-0"><?= the_title(); ?></h1>
                    <ul class="nav nav-pills my-4">
                        <?php $categories = get_the_category(); ?>
                        <?php foreach ($categories as $category) : ?>
                            <li class="mr-2">
                                <a class="badge badge-dark category" href="<?= get_term_link($category); ?>"><?= $category->name; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php the_content(); ?>
                    <hr/>
                    <p class="alert alert-dark bg-dark text-white"><?= wpThemeUsingWebpack_posted_date(); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <aside class="col-md-4 blog-sidebar">
        <?= get_sidebar("blog"); ?>
    </aside>
</div>

<?php get_footer(); ?>
