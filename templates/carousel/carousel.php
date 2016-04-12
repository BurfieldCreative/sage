<?php if( have_rows('slider_group') ): ?>
<div class="slider-container ">

	<section class="carousel">

	    <?php while( have_rows('slider_group') ): the_row(); ?>

            <?php
            $data['slide_image']       = get_sub_field('slide_image');

            $data['slide_title']       = get_sub_field('slide_title');
    		$data['slide_content']     = get_sub_field('slide_content');

    		$data['cta_text']          = get_sub_field('cta_text');
            $data['cta_link']          = get_sub_field('cta_link');
    		?>

    		<div>
				<?php $image = $data['slide_image']['id']; ?>

				<?php include locate_template( 'templates/images/carousel-image.php' ); ?>

                <?php if( false != $data['slide_content'] || false != $data['slide_title'] ): ?>
                <div class="carousel-content">

                    <?php if( false != $data['slide_title'] ): ?>
                        <h2><?php echo apply_filters('the_title',$data['slide_title']); ?></h2>
                    <?php endif; ?>

    	            <?php if( false != $data['slide_content'] ): ?>
    	                <?php echo apply_filters( 'the_content', $data['slide_content'] ); ?>
                    <?php endif; ?>

                </div>
                <?php endif; ?>

                <?php if( false != $data['cta_link'] ): ?>

                    <a class="button" href="<?php echo esc_url($data['cta_link']); ?>">
                        <span><?php echo ( false != $data['cta_text'] ) ? $data['cta_text'] : "Read More"; ?></span>
                    </a>

                <?php endif; ?>



    		</div>

        <?php endwhile; ?>

	</section>

</div>
<?php endif; ?>
