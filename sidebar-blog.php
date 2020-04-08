<?php ob_start(); ?>

<?php if (!dynamic_sidebar("blog")) : ?>
    <div class="bg-dark p-4 mb-3 widget_archive" id="archives-3">
        <h3 class="font-italic text-white">Archives</h3>
        <ul class="list-unstyled mb-0">
            <?= wp_get_archives(["type" => "monthly"]); ?>
        </ul>
    </div>

    <div class="bg-dark p-4 mb-3 widget_categories" id="categories-3">
        <h3 class="font-italic text-white">Categories</h3>
        <ul class="list-unstyled mb-0">
            <li class="cat-item cat-item-2">
                <?= wp_list_categories([
                    "title_li" => ''
                ]); ?>
            </li>
        </ul>
    </div>
<?php endif; ?>

<?php $sidebar_output = ob_get_clean(); ?>
<?php $ul_class = 'list-unstyled mb-0'; ?>

<?= apply_filters( 'widget_output', $sidebar_output, $ul_class ); ?>