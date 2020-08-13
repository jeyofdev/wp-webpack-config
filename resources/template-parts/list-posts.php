<div class="row">
    <div class="col-md-8 blog-main">
        <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="card article pcol-md-6 border-0 mb-4">
                        <?php if (get_the_post_thumbnail() !== '') : ?>
                            <?= the_post_thumbnail("medium", ['class' => 'card-img-top']); ?>
                        <?php endif; ?>
                        <div class="card-body">
                            <a href="<?= the_permalink(); ?>">
                                <h2 class="text-dark card-title"><?= the_title(); ?></h2>
                            </a>
                            <p class="text-dark"><?= wpThemeUsingWebpack_posted_date(); ?></p>
                            <ul class="nav nav-pills my-4">
                                <?php $categories = get_the_category(); ?>
                                <?php foreach ($categories as $category) : ?>
                                    <li class="mr-2">
                                        <a class="badge badge-dark category" href="<?= get_term_link($category); ?>"><?= $category->name; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="card-text"><?= the_content(__("Read more", "wpThemeUsingWebpack")); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php wpThemeUsingWebpack_pagination(); ?>
    </div>

    <aside class="col-md-4 blog-sidebar">
        <?= get_sidebar("blog"); ?>
    </aside>
</div>