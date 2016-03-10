<?php if( have_rows('slider_group') ): ?>

	<article class="slider island-bottom">

	<?php while( have_rows('slider_group') ): the_row();

        $title = get_sub_field('slide_title');
		$image = get_sub_field('slide_image');
		$content = get_sub_field('slide_content');
		$linktitle = get_sub_field('cta_text');
        $link_internal = get_sub_field('cta_internal_link');
        $link_external = get_sub_field('cta_external_url');
		?>

                <pre>
                    <?php print_r( $image); ?>
                </pre>

		<li class="slide">

            <?php include locate_template( 'templates/images/carousel-fullwidth-image.php' ); ?>



            <?php if( $link_internal ): ?>
				<a class="button carousel" href="<?php echo $link_internal; ?>"><?php echo $linktitle; ?></a>
			<?php endif; ?>

            <?php if( $link_external ): ?>
				<a class="button carousel" href="<?php echo $link_external; ?>"><?php echo $linktitle; ?></a>
			<?php endif; ?>

            <?php if( $content ): ?>
                <div class="col-4 col-7-tablet col-9-desktop carousel-content">
                    <?php echo $content; ?>
                </div>
            <?php endif; ?>

		</li>

	<?php endwhile; ?>

	</article>

<?php endif; ?>
