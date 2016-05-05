<?php
//
//This is intended for a full screen carousel
//Be aware it gets slim above 1040px
//
?>

<?php if ( false != wp_get_attachment_image_src( $image ) ) : ?>
	<?php
    $args = array(
    	'image' => $image,
    	'settings' => array(

				array(
					'name' => 'mobile',
					'width' => 450,
					'height' => 253,
					'crop' => true,
					'resize' => true,
				),
				array(
					'name' => 'tablet',
					'width' => 610,
					'height' => 343,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'desktop',
					'width' => 930,
					'height' => 523,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'wide',
					'width' => 1090,
					'height' => 613,
					'crop' => true,
					'resize' => true,
				),

			),
    );
    $ri = BC_Responsive_Images::get_instance();
    $image_data = $ri->image_data( $args );

    ?>


	<img class="swap-image"
		src="<?php echo $image_data['sized_imagery']['wide']['src']; ?>"

		<?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>

			<?php echo 'data-' . $break_name . '="' . $img_set['src'] . '"'; ?>
		<?php endforeach; ?>

	>

<?php endif; ?>
