<?php get_template_part('templates/page', 'header'); ?>

<?php setup_postdata( $GLOBALS['post'] =& $archive_post->post ); ?>

<?php if( have_rows('versatile_content_block') ): ?>

    <?php while ( have_rows('versatile_content_block') ) : the_row(); ?>
        
        <?php
        //prep our filename - underscores to hyphens
        $layout = str_replace( '_', '-', get_row_layout() );
        
        //echo '<pre class="container">Debug:  '.print_r( $layout, true ).'</pre>';
        ?>
        
        <?php get_template_part( 'templates/content-blocks/'.$layout ); ?>

    <?php endwhile; ?>

<?php else : ?>
<div class="container">
    <div class="row">
        <div class="col-12">
        
            <?php the_content(); ?>
            
        </div>
    </div>
</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>