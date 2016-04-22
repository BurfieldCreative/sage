<?php
//
//This is intended for 6:9 layout
//
?>
<?php $image = get_post_thumbnail_id( $post->ID ); ?>
<?php if ( false != wp_get_attachment_image_src( $image ) ) : ?>
	<?php
    $args = array(
    	'image' => $image,
    	'settings' => array(

				array(
					'name' => 'small',
					'width' => 375,
					'height' => 281,
					'crop' => true,
					'resize' => true,
				),
				array(
					'name' => 'medium',
					'width' => 320,
					'height' => 240,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'large',
					'width' => 440,
					'height' => 330,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'hd',
					'width' => 370,
					'height' => 278,
					'crop' => true,
					'resize' => true,
				),
				
			),
    );
    $ri = BC_Responsive_Images::get_instance();
    $image_data = $ri->image_data( $args );
    ?>

	<img class="swap-image"
		src="<?php echo $image_data['sized_imagery']['hd']['src']; ?>"

		<?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>

			<?php echo 'data-' . $break_name . '="' . $img_set['src'] . '"'; ?>
		<?php endforeach; ?>

	>
<?php endif; ?>