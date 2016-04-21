<?php $images = get_sub_field('gallery_items'); ?>

<?php if( $images ): ?>
<section class="island-bottom-margin  island-half island-white">
    <div class="container">

    <div class="row">
        <?php foreach( $images as $image ): ?>
        
            <div class="col-6 col-3-tablet">
                <a href="<?php echo $image['url']; ?>">
                <?php if ( false != wp_get_attachment_image_src( $image['ID'] ) ) : ?>

                    <?php
                    $args = array(
                    	'image' => $image['ID'],
                    	'settings' => array(
                
                				array(
                					'name' => 'small',
                					'width' => 330,
                					'height' => 248,
                					'crop' => true,
                					'resize' => true,
                				),
                				array(
                                    'name' => 'medium',   
                					'width' => 150,
                					'height' => 113,
                					'crop' => true,
                					'resize' => true,
                				),
                
                				array(
                					'name' => 'large',
                					'width' => 230,
                					'height' => 173,
                					'crop' => true,
                					'resize' => true,
                				),
                
                				array(
                					'name' => 'hd',
                					'width' => 260,
                					'height' => 195,
                					'crop' => true,
                					'resize' => true,
                					'crop_from_position' => 'center,bottom',
                				),
                			),
                    );
                    ?>
                    
                    <?php
                    $ri = BC_Responsive_Images::get_instance();
                    $image_data = $ri->image_data( $args );
                    ?>
                
                	<img  alt="<?php echo $image['alt']; ?>"  class="swap-image island-bottom-margin island-bottom-half-margin"
                		src="<?php echo $image_data['sized_imagery']['hd']['src']; ?>"
                
                		<?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>
                
                			<?php echo 'data-' . $break_name . '="' . $img_set['src'] . '"'; ?>
                		<?php endforeach; ?>
                
                	>
                <?php endif; ?>
                </a>
            </div>
            
        <?php endforeach; ?>
    </div>
    
    </div>
</section>
<?php endif; ?>


