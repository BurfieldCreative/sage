<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
this is content-page.php
<?php get_template_part( 'templates/help'); ?>
<div class="your-class">
  <div><img src='https://upload.wikimedia.org/wikipedia/commons/5/58/Sunset_2007-1.jpg'></div>
  <div><img src='http://dreamatico.com/data_images/sunset/sunset-3.jpg'></div>
  <div><img src='http://www.styleblend.com/wp-content/uploads/2015/07/scoutfitters.com_.jpg'></div>
  <div><img src='https://upload.wikimedia.org/wikipedia/commons/5/58/Sunset_2007-1.jpg'></div>
  <div><img src='http://dreamatico.com/data_images/sunset/sunset-3.jpg'></div>
  <div><img src='http://www.styleblend.com/wp-content/uploads/2015/07/scoutfitters.com_.jpg'></div>
  <div><img src='https://upload.wikimedia.org/wikipedia/commons/5/58/Sunset_2007-1.jpg'></div>
  <div><img src='http://dreamatico.com/data_images/sunset/sunset-3.jpg'></div>
  <div><img src='http://www.styleblend.com/wp-content/uploads/2015/07/scoutfitters.com_.jpg'></div>
</div>

<div class="slider-nav">
  <div><img src='https://upload.wikimedia.org/wikipedia/commons/5/58/Sunset_2007-1.jpg'></div>
  <div><img src='http://dreamatico.com/data_images/sunset/sunset-3.jpg'></div>
  <div><img src='http://www.styleblend.com/wp-content/uploads/2015/07/scoutfitters.com_.jpg'></div>
  <div><img src='https://upload.wikimedia.org/wikipedia/commons/5/58/Sunset_2007-1.jpg'></div>
  <div><img src='http://dreamatico.com/data_images/sunset/sunset-3.jpg'></div>
  <div><img src='http://www.styleblend.com/wp-content/uploads/2015/07/scoutfitters.com_.jpg'></div>
  <div><img src='https://upload.wikimedia.org/wikipedia/commons/5/58/Sunset_2007-1.jpg'></div>
  <div><img src='http://dreamatico.com/data_images/sunset/sunset-3.jpg'></div>
  <div><img src='http://www.styleblend.com/wp-content/uploads/2015/07/scoutfitters.com_.jpg'></div>
</div>


<?php
  $config = array(
  	//'post_type' 		=> $slug,

  	'posts_per_page'	=> 3,
  	'orderby'			=> 'post_date',
  	'order'   			=> 'DESC',

  	'pattern' 			=> 'tile',
  	'per_row'			=> 3,
  );
  $posts_obj = new WP_Query($config);
?>

<?php if ( $posts_obj->have_posts() ): ?>
  <?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>
    <div class="col-12 col-4-tablet ">
      <?php get_template_part( 'templates/images/featured-image'); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
<?php endwhile; ?>


  <?php endif; wp_reset_postdata(); ?>
