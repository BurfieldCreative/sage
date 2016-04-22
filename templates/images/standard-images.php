<?php
//
//  Fully responsive images
//  Loads a default image so not realiant on javascript
//
?>

<?php if ( false != wp_get_attachment_image_src( $id ) ) : ?>
	<?php
    $args = array(
    	'image' => $id,
    	'settings' => array(

				array(
					'name' => 'small',
					'width' => 385,
					'height' => 640,
					'crop' => true,
					'resize' => true,
				),
				array(
					'name' => 'medium',
					'width' => 338,
					'height' => 600,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'large',
					'width' => 338,
					'height' => 600,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'hd',
					'width' => 277,
					'height' => 485,
					'crop' => true,
					'resize' => true,
				),
			),
    );
    $ri = BC_Responsive_Images::get_instance();
    $image_data = $ri->image_data( $args );
    ?>

	<img class="th img-thumb swap-image"
		src="<?php echo $image_data['sized_imagery']['hd']['src']; ?>"

		<?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>

			<?php echo 'data-' . $break_name . '="' . $img_set['src'] . '"'; ?>
		<?php endforeach; ?>

	>

<?php endif; ?>
