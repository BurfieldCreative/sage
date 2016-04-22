<?php
    $args = array(
        'post_type' 			=> 'post',
        'posts_per_page'		=> 3,
        'ignore_sticky_posts' 	=> 1
    );

    $latest_blog_posts = new WP_Query($args);
?>


<?php
$articleclasses = array(
    'col-12',
    'col-6-tablet',
    'col-4-desktop',
    'listing'
    );
?>

<?php if($latest_blog_posts->have_posts()) : ?>


<section class="vert-listings container">
    <h3>Latest</h3>
    <div class="row">
    <?php while($latest_blog_posts->have_posts()): $latest_blog_posts->the_post(); ?>
        
        
        <?php
          $articleclasses = array(
            'col-12',
            'col-6-tablet',
            'col-4-desktop',
            'listing'
           );
        ?>
        
        
        <article <?php post_class($articleclasses); ?>>
            <div class="listing-inner" data-match-height="recent-posts">
              
              <?php if( false != has_post_thumbnail() ) : ?>
              <div class="listing-image">
                <?php get_template_part( 'templates/images/featured-image--listing'); ?>
              </div>
              <?php endif; ?>
              
              <div class="listing-text">
                <header>
        
                  <a href="<?php the_permalink(); ?>"><h2 class="no-margin" itemprop="headline"><?php the_title(); ?></h2></a>
                  <?php get_template_part('templates/entry-meta'); ?>
                </header>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="button button-primary">Read More<span class="icon icon-arrow-right4"></span></a>
              </div>
            </div>
        </article>
        
        
    <?php endwhile; wp_reset_postdata(); ?>
    </div>
    
</section>


<?php endif; ?>