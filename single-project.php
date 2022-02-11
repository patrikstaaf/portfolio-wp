<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php if (get_field('field_client_name')) : ?>
            <?php if (get_field('field_client_website')) : ?>
                <p>Client: <a href="<?php the_field('field_client_website') ?>"><?php the_field('field_client_name') ?></a></p>
            <?php else : ?>
                <p>Client: <?php the_field('field_client_name') ?></p>
            <?php endif; ?>
        <?php endif; ?>

        <h2><a class="no-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="flex justify-between space-x-10 items-center">
            <div class="text-left"><?php the_content(); ?></div>
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail([200, 200]); ?>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>