<h1 style="text-align: center;">Burfield Help Page</h1>


<?php
// ====================================================================================================================================================
// Page Wrappers and other useful styles
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Page Wrappers and other useful styles</h2>
	<ul>
		<li><code>.container</code> - has a set width, is center aligned and applies a 15px gutter padding (left and right)</li>
		<li><code>.container-full</code> - has a set width, is center aligned and has no gutter padding (left and right)</li>
		<li><code>.none</code> - Hides element on mobile devices and up</li>
		<li><code>$grid-gutter</code> - as a variable in sass sets your guttering sitwide</li>
	</ul>
	<p>Here's some more that are available through <a href='http://getbase.org/docs/grid.html' target='_blank'>Get base</a></p>
	</br><hr></hr>


<?php
// ====================================================================================================================================================
// The Grid System
// ====================================================================================================================================================
?>


	<h2 style="text-align: center;">The Grid System</h2>
	<p>Example of available breakpoints in code you should get the idea the <strong>-div is so the markup displays here properly</strong></p>
<pre>
<-div class="clear">
  <-div class="col-4 push-8 col-7-tablet push-5-tablet col-3-desktop push-9-desktop col-2-hd push-10-hd">
    content...
  <-/div>
  <-div class="col-8 pull-4 col-5-tablet pull-7-tablet col-9-desktop pull-3-desktop col-10-hd pull-2-hd">
    content...
  <-/div>
<-/div>
</pre>
</li>


<?php
// ====================================================================================================================================================
// Push and pull the grid
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Push and pull the grid</h2>
<pre>
	<-div class="clear">
	  <-div class="col-4 push-8 col-7-tablet push-5-tablet col-3-desktop push-9-desktop col-2-hd push-10-hd">
	    content...
	  <-/div>
	  <-div class="col-8 pull-4 col-5-tablet pull-7-tablet col-9-desktop pull-3-desktop col-10-hd pull-2-hd">
	    content...
	  <-/div>
	<-/div>
</pre>
</ol>
	</br><hr></hr>


<?php
// ====================================================================================================================================================
// Styling Break Points
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Styling Break Points</h2>

	<li>Heres an example using the media queries to change the sidebar depending on the screen size
<pre>// .sidebar {
//   mobile_styling
//   @include breakpoint(small) {
//     tablet_styling
//   }
//   @include breakpoint(medium) {
//     desktop_styling
//   }
//   @include breakpoint(large) {
//     hd_styling
//   }
// }
</pre></li>


</br><hr></hr>


<?php
// ====================================================================================================================================================
// Islands
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Islands</h2>
<p>Another useful trick are islands these can be found in mixins.scss</p>
<ul>
<li><code>island</code>Adds the <dfn>$gutterwidth*2</dfn> to top and bottom of div</li>
<li><code>island-top</code>Adds the <dfn>$gutterwidth*2</dfn> to the top ONLY</li>
<li><code>island-bottom</code>Adds the <dfn>$gutterwidth*2</dfn> to the bottom ONLY</li>
<li><code>island-half</code>Adds the <dfn>$gutterwidth</dfn> to the top and bottom</li>
</ul>


	</br><hr></hr>


<?php
// ====================================================================================================================================================
// Vertical Listings
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Vertical Listings</h2>
<p>View the help.php, do a search for <code>vertical listings</code> to see an example of the actual working code including php  </p>
<p>The <strong>styling</strong> can be found in theme/assets/styles/content/content.scss</p>
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

  <article class="vert-listings island flex flex-row flex-wrap">

    <?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>

      <div class="col-12 col-4-tablet listing flex">
          <div class="listing-inner">
            
            <?php if( false != has_post_thumbnail() ) : ?>
            <div class="listing-image">
            <?php get_template_part( 'templates/images/featured-image'); ?>
            </div>
            <?php endif; ?>
            
            <div class="listing-text">
              <header>

                <a href="<?php the_permalink(); ?>"><h2 class="no-margin" itemprop="headline"><?php the_title(); ?></h2></a>

              </header>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
      </div>

    <?php endwhile; ?>

  </article>

<?php endif; wp_reset_postdata(); ?>
<hr></hr>

<?php
// ====================================================================================================================================================
// Horizontal listings
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Listings Horizontal</h2>
<p>View the help.php, do a search for <code>Horizontal listings</code> to see an example of the actual working code including php  </p>
<p><mark>Be aware</mark> that the images will need to be taller then content using this view and it's worth while checking on all devices as it's a fiddly bugger;</p>
<p>The <strong>styling</strong> can be found in theme/assets/styles/content/content.scss</p>

<?php

  $config = array(
  	//'post_type' 		=> $slug,

  	'posts_per_page'	=> 4,
  	'orderby'			=> 'post_date',
  	'order'   			=> 'DESC',

  	'pattern' 			=> 'tile',
  	'per_row'			=> 1,
  );
  $posts_obj = new WP_Query($config);
?>

<?php if ( $posts_obj->have_posts() ): ?>

	<article class="hoz-listings island flex flex-row flex-wrap">

    <?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>

      <div class="col-12 col-6-tablet col-6-desktop listing flex">
          <div class="listing-inner">
            
            <?php if( false != has_post_thumbnail() ) : ?>
            <div class="listing-image">
            <?php get_template_part( 'templates/images/featured-image'); ?>
            </div>
            <?php endif; ?>
            
            <div class="listing-text">
              <header>

                <a href="<?php the_permalink(); ?>"><h2 class="no-margin" itemprop="headline"><?php the_title(); ?></h2></a>

              </header>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
      </div>

    <?php endwhile; ?>

  </article>

<?php endif; wp_reset_postdata(); ?>

<hr></hr>

<?php
// ====================================================================================================================================================
// Equal Heights
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Equal Heights</h2>
<p>Set <code>flex flex-row flex-wrap</code> to the outer container and simple flex on the inner</p>
<p><code>hoz-listings</code> and <code>vert-listings</code> already have equal heights set these can be found in content.scss.</p>
<pre>
<-ul class='flex flex-row flex-wrap'>
	<-li class='flex'>test 1<-/li>
	<-li class='flex'>test 2<-/li>
	<-li class='flex'>test 3<-/li>
<-/ul>
</pre>


<?php
// ====================================================================================================================================================
// Slider Update
// ====================================================================================================================================================
?>


</br><hr></hr>
<h2 style="text-align: center;">Slider Update</h2>
<p>View the help.php, do a search for <code>slider images</code> to see an example of the actual working code including php </p>
<p>The <strong>javascript</strong> can be found in theme/assets/scripts/main.js</p>
<p>The <strong>styling</strong> can be found in theme/assets/styles/slider/slide.scss</p>
<p>Here's what you can do with it <a href='http://kenwheeler.github.io/slick/'>Slick slider</a></p>

<?php

  $config = array(
  	//'post_type' 		=> $slug,

  	'posts_per_page'	=> 4,
  	'orderby'			=> 'post_date',
  	'order'   			=> 'DESC',

  	'pattern' 			=> 'tile',
  	'per_row'			=> 4,
  );
  $posts_obj = new WP_Query($config);
?>

<div class="island">

	<article class="slider">

		<?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>
			<!--Check if thumbnail exists-->
			<?php if ( false != has_post_thumbnail() ):?>

				<div class="slide">
					<?php get_template_part( 'templates/images/featured-image'); ?>
				</div>

			<?php endif; ?>

		<?php endwhile; ?>

	</article>


	<div class="slider-nav">

		<?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>
			<!--Check if thumbnail exists-->
			<?php if ( false != has_post_thumbnail() ):?>

				<div class="slide">
					<?php get_template_part( 'templates/images/featured-image'); ?>
				</div>

			<?php endif; ?>

		<?php endwhile; ?>
	</div>
</div>


<hr></hr>
<h1 style="text-align: center;">Site Settings</h1>


<?php
// ====================================================================================================================================================
// Menus
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Mobile Menus</h2>
<ol>
	<li>To alter the menu to a different one open templates/base.php and set the variable at the top of the page to an integer available options are, 1 - 8</li>
	<li>To set the height or color or the hamburger go to variables.scss set them first followed by menu.scss to overide settings or tweak lastly in menu-animations at the bottom</li>
	<li>Edit all menu buttons in buttons.scss this includes header and footer menus</li>
</ol>


<?php
// ====================================================================================================================================================
// Adding Required plugins
// ====================================================================================================================================================
?>



<h2 style="text-align: center;">Adding Required plugins</h2>
<ol>
	<li>To add advanced custom fields open composer.json at the root and add to the extra installer paths line 45ish</li>
	<li>Then run composer update</li>
</ol>


<?php
// ====================================================================================================================================================
// Adding Ico fonts
// ====================================================================================================================================================
?>



<h2 style="text-align: center;">Adding Icon fonts using icomoon</h2>
<ul>
	<li>To add icomoon fonts run <code>gulp fonts</code> inside sage root</li>
</ul>
