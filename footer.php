</div>
<footer class="flex justify-between full">
    <?php if (get_field('field_footer_email', 'option')) : ?>
        <div>
            <p class="inline-block"><?php the_field('field_footer_contact_label', 'option') ?>:</p>
            <a href="mailto:<?php echo the_field('field_footer_email', 'option') ?>"> <?php the_field('field_footer_email', 'option') ?></a>
        </div>
        <div>
            <p><?php the_field('field_footer_copyright', 'option') ?></p>
        </div>
    <?php endif; ?>

</footer>

<?php wp_footer(); ?>

</body>

</html>