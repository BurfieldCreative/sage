<h1 style="text-align: center;">Burfield Help Page</h1>
<p>
	<strong>The template helper can also be reomved it's in base.php line 69</strong>
</p>
<p>
	The slider above can be found in templates/carousel/carousel.php.
	The styling is set in styles/bc_styles/slider/slide.scss to animate add animate to the outer container and you can tweak it as you like.
</p>

<p>
	<strong>This help file can be removed from code it's in templates/custom-pages/home.php</strong>
</p>

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
<p>Another useful trick are islands these can be found in bc_styles/mixins.scss</p>
<ul class='list-unstyled'>
<li class="row"><span class="col-3"><code>island</code></span> <span class='col-9'>Adds the <dfn>$gutterwidth*2</dfn> padding to top and bottom of div</span></li>
<li class="row"><span class="col-3"><code>island-top</code></span><span class='col-9'>Adds the <dfn>$gutterwidth*2</dfn> padding to the top ONLY</span></li>
<li class="row"><span class="col-3"><code>island-bottom</code></span><span class='col-9'> Adds the <dfn>$gutterwidth*2</dfn> padding to the bottom ONLY</span></li>
<li class="row"><span class="col-3"><code>island-half</code></span><span class='col-9'> Adds the <dfn>$gutterwidth</dfn> padding to the top and bottom</span></li>
<li class="row"><span class="col-3"><code>island-margin</code></span><span class='col-9'> Adds the <dfn>$gutterwidth*2</dfn> margin to top and bottom of div</span></li>
<li class="row"><span class="col-3"><code>island-top-margin</code></span><span class='col-9'> Adds the <dfn>$gutterwidth*2</dfn> margin to the top ONLY</span></li>
<li class="row"><span class="col-3"><code>island-bottom-margin</code></span><span class='col-9'> Adds the <dfn>$gutterwidth*2</dfn> margin to the bottom ONLY</span></li>
<li class="row"><span class="col-3"><code>island-half-margin</code></span><span class='col-9'> Adds the <dfn>$gutterwidth</dfn> margin to the top and bottom</span></li>
<li class="row"><span class="col-3"><code>full-width</code></span><span class='col-9'> Sets width: 100%</span></li>
</ul>

<div class="island">

<h3 style="text-align: center;">Other helpers</h3>
<p>Another useful trick are islands these can be found in bc_styles/mixins.scss</p>
<ul>
	<li><code>island-light</code>Sets a light background colour</li>
	<li><code>island-dark</code>Sets a dark background colour</li>
	<li><code>text-light</code>Sets a light colour to text</li>
	<li><code>text-dark</code>Sets a dark colour to text</li>

</ul>

</div>


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

  <section class="vert-listings row ">


    <?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>

      <div class="col-12 col-4-tablet listing">
          <div class="listing-inner" data-match-height="vert-listing">

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

  </section>

<?php endif; wp_reset_postdata(); ?>
<hr></hr>

<?php
// ====================================================================================================================================================
// Equal Heights
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Equal Heights</h2>
<p>Add data-match-height="groupName" to anything you want equal</p>
<pre>
<-ul>
	<-li data-match-height="groupName">test 1<-/li>
	<-li data-match-height="groupName">test 2<-/li>
	<-li data-match-height="groupName">test 3<-/li>
<-/ul>
</pre>

<ul class="list-inline hoz-listings row island">
	<li class="col-4 listing-inner" data-match-height="groupName">Lorem ipsum dolor sit amet</li>
	<li class="col-4 listing-inner" data-match-height="groupName">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</li>
	<li class="col-4 listing-inner" data-match-height="groupName">Lorem ipsum dolor sit amet</li>
</ul>


<hr></hr>
<?php
// ====================================================================================================================================================
// Horizontal listings
// ====================================================================================================================================================
?>


<h2 style="text-align: center;">Listings Horizontal</h2>
<p>View the help.php, do a search for <code>Horizontal listings</code> to see an example of the actual working code including php  </p>
<p><mark>Be aware</mark> you have two choice either make sure your images are bigger then your text or like I have here position the image absolute this would mean cropping will occur, remove absolute image if needed and it's worth while checking on all devices as it's a fiddly bugger;</p>
<p>The <strong>styling</strong> can be found in theme/assets/styles/content/content.scss under <code>Horizontal Listings</code></p>

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

	<article class="hoz-listings island">

    <?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>

      <div class="col-12 col-6-tablet col-6-desktop listing">
          <div class="listing-inner"  data-match-height="hoz-listing">

            <?php if( false != has_post_thumbnail() ) : ?>
            <div class="listing-image col-6 no-padding ">
            <?php get_template_part( 'templates/images/featured-image'); ?>
            </div>
            <?php endif; ?>

            <div class="listing-text col-6">
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

			<?php if ( false != has_post_thumbnail() ):?>

                <?php $image = get_post_thumbnail_id(); ?>
                <div class="slide">
				    <?php include locate_template( 'templates/images/carousel-image-constrained.php' ); ?>
				</div>

			<?php endif; ?>

		<?php endwhile; ?>

	</article>


	<div class="slider-nav">

		<?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>
			<!--Check if thumbnail exists-->
			<?php if ( false != has_post_thumbnail() ):?>

                <?php $image = get_post_thumbnail_id(); ?>
                <div class="slide">
				    <?php include locate_template( 'templates/images/carousel-image-nav.php' ); ?>
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
<p>
	There are a few availble menus to swap and try out something new go to base.php and change the nav style to one of the available options
</p>


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
<h2>When adding fonts I find the easiest quickest way is to add <code>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,800);</code> for example to the top of variables.scss then just update the base fonts etc</h2>


<h2 style="text-align: center;">Adding Icon fonts using icomoon</h2>
<p>
	Icons are already added to update visit styles/bc_styles/icons
</p>
