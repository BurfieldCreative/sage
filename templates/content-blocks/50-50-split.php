<?php
$data['block_title']        = get_sub_field('block_title');
$data['block_content']      = get_sub_field('block_content');

$data['block_image']        = get_sub_field('block_image');
$data['image_alignment']    = get_sub_field('image_alignment');

$data['image_layout']     = ( 'Right' == $data['image_alignment'] ) ? 'flex-row' : 'flex-row-reverse' ;

//echo '<pre class="container">Debug:  '.print_r( $data, true ).'</pre>'; 
?>


<section class="content-block content-block--5050 island-bottom-margin island-half island-white clear">
    
    <div class="container">
        <div class="row vertical-center <?php echo $data['image_layout'] ?>">
                
            <div class="col-12 col-6-tablet">
                
                <?php if( false != $data['block_title'] ) : ?>
                    <h3><?php  echo apply_filters( 'the_title', $data['block_title'] ); ?></h3>
                <?php endif; ?>
                
                
                <?php if( false != $data['block_content'] ) : ?>
                    <?php  echo apply_filters( 'the_content', $data['block_content'] ); ?>
                <?php endif; ?>
                
            </div>
            
            <div class="col-12 col-6-tablet">
                
            <?php if ( false != wp_get_attachment_image_src( $data['block_image']['ID'] ) ) : ?>
            	<?php
                $args = array(
                	'image' => $data['block_image']['ID'],
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
            					'width' => 530,
            					'height' => 398,
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
                
            </div>
                
        </div>
    </div>
    
</section>