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
					'width' => 640,
					'height' => 360,
					'crop' => true,
					'resize' => true,
				),
				array(
					'name' => 'tablet',
					'width' => 960,
					'height' => 540,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'desktop',
					'width' => 1040,
					'height' => 640,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'wide',
					'width' => 2040,
					'height' => 600,
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
