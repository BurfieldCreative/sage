<?php get_template_part('templates/page', 'header'); ?>


<div class="container">
    <div class="row">
        <div class="col-12">

            <?php the_content(); ?>

        </div>
    </div>
</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
