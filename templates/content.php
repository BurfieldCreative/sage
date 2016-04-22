<?php
  $articleclasses = array(
    'col-12',
    'col-6-tablet',
    'col-4-desktop',
    'listing'
   );
?>

<article <?php post_class($articleclasses); ?>>
    <div class="listing-inner" data-match-height="vert-listing">
      
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
      </div>
    </div>
</article>
