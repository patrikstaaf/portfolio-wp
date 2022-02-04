<?php /* Template Name: About me */ ?>

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

<?php $projects = get_posts(['post_type' => 'project']); ?>

<ul>
    <?php foreach ($projects as $post) : setup_postdata($post); ?>
        <?php $tools = get_the_terms($post, 'tool'); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php foreach ($tools as $tool) : ?>
                <a href="<?= get_term_link($tool); ?>"><?= $tool->name ?></a>
            <?php endforeach; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php get_footer(); ?>