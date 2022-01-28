<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="flex justify-center"><?php the_post_thumbnail([600, 600]); ?></div>
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        <span><?php the_date(); ?></span>
        <div class="text-left">
            <?php the_content(); ?>
        </div>
        <div class="w-full flex justify-between my-10">
            <div>
                <?php previous_post_link(); ?>
            </div>
            <div>
                <?php next_post_link(); ?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>