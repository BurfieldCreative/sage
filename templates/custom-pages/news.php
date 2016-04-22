<?php 
$page_for_posts_id = get_option('page_for_posts' );
$title = get_field( 'protected_name', $page_for_posts_id );
$archive_post = bc_get_protected_name_query_obj( $title ); 
?>
<?php include locate_template( 'templates/archive-content.php' ); ?>


<section class="vert-listings row">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>
</section>