<?php if( have_rows('slider_group') ): ?>
	<div class="slider-container animate">
		<article class="slider island-bottom">

		<?php while( have_rows('slider_group') ): the_row();

	        $title = get_sub_field('slide_title');
			$image = get_sub_field('slide_image');
			$content = get_sub_field('slide_content');
			$linktitle = get_sub_field('cta_text');
	        $link_internal = get_sub_field('cta_internal_link');
	        $link_external = get_sub_field('cta_external_url');
			?>



			<li class="slide">

	            <?php //include locate_template( 'templates/images/carousel-fullwidth-image.php' ); ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />


	            <?php if( $content ): ?>
	                <div class="carousel-content">
	                    <?php echo $content; ?>
	                </div>
	            <?php endif; ?>

				<?php if( $link_external ): ?>
					<a class="button carousel" href="<?php echo $link_external; ?>"><?php echo $linktitle; ?></a>
				<?php endif; ?>

				<?php if( $link_internal ): ?>
					<a class="button carousel" href="<?php echo $link_internal; ?>"><?php echo $linktitle; ?></a>
				<?php endif; ?>

			</li>

		<?php endwhile; ?>

		</article>
	</div>

<?php endif; ?>
