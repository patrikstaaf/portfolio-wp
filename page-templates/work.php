<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h1><a class="no-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <?php the_content(); ?>

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