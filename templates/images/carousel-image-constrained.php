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
					'name' => '480',
					'width' => 450,
					'height' => 253,
					'crop' => true,
					'resize' => true,
				),
				array(
					'name' => '640',
					'width' => 610,
					'height' => 343,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => '1024',
					'width' => 930,
					'height' => 523,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => '2040',
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


<picture>
    <?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>
		<?php if( '2040' == $break_name ) : ?>
			<img src="<?php echo $img_set['src']; ?>" alt="Nymphenburg Castle in Munich during sunset">
		<?php else: ?>
			<source media="(max-width: <?php echo $break_name; ?>px)" srcset="<?php echo $img_set['src']; ?>">
		<?php endif; ?>
    <?php endforeach; ?>
</picture>

<?php endif; ?>
