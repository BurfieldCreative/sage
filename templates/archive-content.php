<?php get_template_part('templates/page', 'header'); ?>

<?php setup_postdata( $GLOBALS['post'] =& $archive_post->post ); ?>


<div class="container">
    <div class="row">
        <div class="col-12">

            <?php the_content(); ?>

        </div>
    </div>
</div>


<?php wp_reset_postdata(); ?>
