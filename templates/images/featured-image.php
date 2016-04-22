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
					'name' => '640',
					'width' => 640,
					'height' => 360,
					'crop' => true,
					'resize' => true,
				),
				array(
					'name' => '960',
					'width' => 960,
					'height' => 540,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => '1040',
					'width' => 1040,
					'height' => 585,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => '2040',
					'width' => 2040,
					'height' => 1148,
					'crop' => true,
					'resize' => true,
				),
			),
    );
    $ri = BC_Responsive_Images::get_instance();
    $image_data = $ri->image_data( $args );
    ?>

    <?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>
    	<?php $sets[] = ''.$img_set['src'].' '.$break_name.'w' ?>
    <?php endforeach; ?>

    <img class="th img-thumb"
		src="<?php echo $sets[0]; ?>"
		srcset="<?php echo implode( ',', $sets ); ?>"
	>
<?php endif; ?>
