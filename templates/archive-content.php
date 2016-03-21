<?php setup_postdata( $GLOBALS['post'] =& $archive_post->post ); ?>

<?php get_template_part('templates/page', 'header'); ?>
<?php the_content(); ?>

<?php wp_reset_postdata(); ?>