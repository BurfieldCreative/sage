<?php
//
//  Function to get various custom images from fields
//  Get your field from inside a template and use an include
//
//  $golf_image = get_field('golf_image');
//  $golf_image_id = $golf_image['id'];
//
//  Then use below to set the id
//  get_image_acf_id($golf_image_id);
?>

<?php
function get_image_acf_id($id) {

    if ( false != wp_get_attachment_image_src( $id ) ) {

        $args = array(
        	'image' => $id,
        	'settings' => array(

    				array(
    					'name' => 'small',
    					'width' => 694,
    					'height' => 390,
    					'crop' => true,
    					'resize' => true,
    				),
    				array(
    					'name' => 'medium',
    					'width' => 674,
    					'height' => 379,
    					'crop' => true,
    					'resize' => true,
    				),

    				array(
    					'name' => 'large',
    					'width' => 798,
    					'height' => 448,
    					'crop' => true,
    					'resize' => true,
    				),

    				array(
    					'name' => 'hd',
    					'width' => 862,
    					'height' => 485,
    					'crop' => true,
    					'resize' => true,
    				),
    			),
        );
        $ri = BC_Responsive_Images::get_instance();
        $image_data = $ri->image_data( $args );

        echo '<img class="th img-thumb full-width " src="' .  $image_data["sized_imagery"]["hd"]["src"] . '" ';

        foreach( $image_data['sized_imagery'] AS $break_name => $img_set ){

            echo 'data-' . $break_name . '="' . $img_set['src'] . '"';
        }
        echo '"/> ';

    }
}
?>
