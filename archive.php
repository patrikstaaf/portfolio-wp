<?php /* Template Name: Archives */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><a class="no-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="flex justify-between space-x-10 items-center">
            <div class="text-left"><?php the_excerpt(); ?></div>
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail([200, 200]); ?>
            <?php endif; ?>
        </div>
        <hr>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>