<div class="container">
    <div class="row">
        <div class="col-12">


            <p>
            	<strong>The template helper above can be removed it's in base.php line 69</strong>
            </p>
<h1 style="text-align: center;">Burfield Help Page</h1>

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


<h2 style="text-align: center;">Making life easier</h2>
<p>Another useful trick are islands these can be found in bc_styles/mixins.scss</p>
<h3 class='text-center island'>These use padding</h3>
<ul class='list-unstyled'>
<li class="row"><span class="col-3"><code>island</code></span> <span class='col-9'>32px TOP AND BOTTOM using padding</span></li>
<li class="row"><span class="col-3"><code>island-top</code></span><span class='col-9'>32px TOP ONLY using padding</span></li>
<li class="row"><span class="col-3"><code>island-bottom</code></span><span class='col-9'>32px BOTTOM ONLY using padding</span></li>
<li class="row"><span class="col-3"><code>island-half</code></span><span class='col-9'>16px TOP AND BOTTOM using padding</span></li>
<li class="row"><span class="col-3"><code>island-top-half</code></span><span class='col-9'>16px TOP ONLY using padding</span></li>
<li class="row"><span class="col-3"><code>island-bottom-half</code></span><span class='col-9'>16px BOTTOM ONLY using padding</span></li>
</ul>

<h3 class='text-center island'>These use margins</h3>
<ul class='list-unstyled'>
<li class="row"><span class="col-3"><code>island-margin</code></span><span class='col-9'>32px TOP and BOttom using margin</span></li>
<li class="row"><span class="col-3"><code>island-top-margin</code></span><span class='col-9'>32px Top ONLY using margin</span></li>
<li class="row"><span class="col-3"><code>island-bottom-margin</code></span><span class='col-9'>32px BOTTOM ONLY using margin</span></li>
<li class="row"><span class="col-3"><code>island-half-margin</code></span><span class='col-9'>16px TOP AND BOTTOM using margin</span></li>
<li class="row"><span class="col-3"><code>island-top-margin-half</code></span><span class='col-9'>16px TOP ONLY using margin</span></li>
<li class="row"><span class="col-3"><code>island-bottom-margin-half</code></span><span class='col-9'>16px BOTTOM ONLY using margin</span></li>
</ul>

<h3 class='text-center island'>These are also reset helpers these are set by get base</h3>

<ul class='list-unstyled'>
<li class="row"><span class="col-3"><code>no-margin</code></span><span class='col-9'>Removes all margin</span></li>
<li class="row"><span class="col-3"><code>no-padding</code></span><span class='col-9'>Removes all padding</span></li>
<li class="row"><span class="col-3"><code>no-float</code></span><span class='col-9'>Removes all floats</span></li>
<li class="row"><span class="col-3"><code>no-background</code></span><span class='col-9'>Removes background</span></li>
<li class="row"><span class="col-3"><code>no-border</code></span><span class='col-9'>Removes all borders</span></li>
<li class="row"><span class="col-3"><code>no-select</code></span><span class='col-9'>Disables text selection</span></li>
<li class="row"><span class="col-3"><code>center-element</code></span><span class='col-9'>centers the element</span></li>
<li class="row"><span class="col-3"><code>text-center</code></span><span class='col-9'>centers text</span></li>

</ul>

<h3 style="text-align: center;" class='island'>Other helpers</h3>
<p>Another useful trick are islands these can be found in bc_styles/mixins.scss</p>

<ul class='list-unstyled no-margin clear '>
    <li class="row"><span class="col-3"><code>island-light</code></span><span class='col-9'> Sets a light background colour</span></li>
    <li class="row"><span class="col-3"><code>island-dark</code></span><span class='col-9'>Sets a dark background colour</span></li>
    <li class="row"><span class="col-3"><code>text-light</code></span><span class='col-9'>Sets text to light color</span></li>
    <li class="row"><span class="col-3"><code>text-dark</code></span><span class='col-9'>Sets text to dark color</span></li>
    <li class="row"><span class="col-3"><code>full-width</code></span><span class='col-9'> Sets width: 100%</span></li>
    <li class="row"><span class="col-3"><code>overflow</code></span><span class='col-9'> Sets overflow</span></li>
    <li class="row"><span class="col-3"><code>clear</code></span><span class='col-9'>clears everything</span></li>
</ul>


<h2 class='text-center island  block clear island-top-margin overflow'>
    Vist <a class='no-decoration island ' target='_blank' href='http://getbase.org/docs/helpers.html'>get base</a> to get the full list.
</h2>




<?php
// ====================================================================================================================================================
// Vertical Listings
// ====================================================================================================================================================
?>


<h2 class='text-center island'>Vertical Listings</h2>
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

<section class="vert-listings row">


    <?php while ( $posts_obj->have_posts() ) : $posts_obj->the_post(); ?>
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
    <?php endwhile; ?>


</section>


<?php endif; wp_reset_postdata(); ?>
<hr></hr>

<?php
// ====================================================================================================================================================
// Equal Heights
// ====================================================================================================================================================
?>


<h2 class='clear text-center island'>Equal Heights</h2>
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


<h2 class='clear text-center island'>Listings Horizontal</h2>
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
            <?php get_template_part( 'templates/images/featured-image--listing'); ?>
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



<?php
// ====================================================================================================================================================
// Slider Update
// ====================================================================================================================================================
?>


</br><hr class='clear'></hr>
<h2 class='clear text-center island'>Slider</h2>
<p>
    The site comes preloaded with a full width slider just add slides to any page,
    To animate the slider visit templates/carousel/carousel.php and add animate to the slide-container class.
</p>
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


<h2 class='clear text-center island'>Mobile Menus</h2>
<p>
	There are a few availble menus to swap and try out something new go to base.php and change the nav style to one of the available options
</p>


<?php
// ====================================================================================================================================================
// Adding Required plugins
// ====================================================================================================================================================
?>



<h2 class='clear text-center island'>Adding Required plugins</h2>
<ol>
	<li>To add advanced custom fields open composer.json at the root and add to the extra installer paths line 45ish</li>
	<li>Then run composer update</li>
</ol>


<?php
// ====================================================================================================================================================
// Adding Ico fonts
// ====================================================================================================================================================
?>
<h2 class='clear text-center island'>Adding Fonts</h2>
<p>When adding fonts add <code>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,800);</code> to the top of variables.scss then just update the base fonts etc by running gulp fonts</p>


<h2 class='clear text-center island'>Adding Icon fonts using icomoon</h2>
<p>
	Icons are already added to update visit styles/bc_styles/icons
</p>


<h2 class='clear text-center island'>Setting address in footer</h2>
<p>
	Go to theme settings inside wordpress and select social or contact and fill it in.
</p>


<h2 class='clear text-center island'>When creating content use fakerpress as it rocks</h2>
<h2 class='clear text-center island'>get recent post</h2>

<code class='center-element block no-float text-center'> get_template_part( 'templates/recent-posts' );</code>



<h2 class='text-center island  block clear island-top-margin overflow'>
    Vist <a class='no-decoration island ' target='_blank' href='http://getbase.org/docs/helpers.html'>get base</a> to get the full list.
</h2>


        </div>
    </div>
</div>
