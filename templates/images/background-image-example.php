<?php
  $bgimage_id = $homepage_image_['ID'];
?>

<?php if ( false != wp_get_attachment_image_src( $bgimage_id ) ) : ?>
	<?php
    $args = array(
    	'image' => $bgimage_id,
    	'settings' => array(

				array(
					'name' => 'mobile',
					'width' => 640,
					'height' => 650,
					'crop' => true,
					'resize' => true,
				),
				array(
					'name' => 'tablet',
					'width' => 960,
					'height' => 650,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'desktop',
					'width' => 1040,
					'height' => 585,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'wide',
					'width' => 1900,
					'height' => 600,
					'crop' => true,
					'resize' => true,
				),
			),
    );
    $ri = BC_Responsive_Images::get_instance();
    $image_data = $ri->image_data( $args );

	?>

	<?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) :

		echo 'data-' . $break_name . '="' . $img_set['src'] . '"';

	endforeach; ?>


<?php endif; ?>
