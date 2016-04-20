<div class="container">

<?php $archive_post = bc_get_protected_name_query_obj( 'Services' ); ?>
<?php include locate_template( 'templates/archive-content.php' ); ?>



<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no '.get_post_type().'s were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<div class="listing-wrapper">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>
</div>

</div>