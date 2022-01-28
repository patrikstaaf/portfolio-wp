<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1><a class="no-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php
    $args = ['numberposts' => 3, 'order' => 'desc'];
    $latestPosts = get_posts($args);
    ?>

    <div>
        <div class="flex flex-col text-left">
            <?php foreach ($latestPosts as $post) : setup_postdata($post) ?>
                <div class="border rounded-xl border-gray-200 my-4 p-4 not-prose">
                    <a class="no-underline flex justify-between items-center" href="<?php the_permalink(); ?>">
                        <h3 class="font-light"><?= the_title(); ?></h3>
                        <?php if (has_post_thumbnail()); ?>
                        <?php the_post_thumbnail([100, 100]); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); ?>
    </div>

    <?php $blogPageUrl = get_post_type_archive_link('post'); ?>

    <a class="no-underline" href="<?= $blogPageUrl; ?>">All posts</a>

<?php endif; ?>

<?php get_footer(); ?>