<?php if( have_rows('column_content') ): ?>
<div class="row">
 	<?php while ( have_rows('column_content') ) : the_row(); ?>

        
        <?php
        $data['block_title']        = get_sub_field('block_title');
        $data['block_content']      = get_sub_field('block_content');
        
        $data['block_image']        = get_sub_field('block_image');
        $data['image_alignment']    = get_sub_field('image_alignment');
        
        /**
         * allows for content to be contained when the parent isnt required to be contined 
         * when full wdith image needs to burst the box
         */
        $data['image_layout']     = ( 'Fullwidth' == $data['image_alignment'] ) ? 'constrained' : 'container' ;
        $data['content_layout']     = ( 'Fullwidth' == $data['image_alignment'] ) ? 'container' : 'constrained' ;
        
        //echo '<pre class="container">Debug:  '.print_r( $data, true ).'</pre>'; 
        ?>
        
        
        <section class="content-block content-block--twocolumn island-bottom-margin island-bottom-half island-white col-12 col-6-tablet">    
            <div class="<?php echo $data['image_layout'] ?> ">
            
                <?php if ( false != wp_get_attachment_image_src( $data['block_image']['ID'] ) ) : ?>
                
                    
                    <?php if( 'Fullwidth' == $data['image_alignment'] ) : ?>
                        <?php
                        $args = array(
                        	'image' => $data['block_image']['ID'],
                        	'settings' => array(
                    
                    				array(
                    					'name' => 'small',
                    					'width' => 730,
                    					'height' => 274,
                    					'crop' => true,
                    					'resize' => true,
                    				),
                    				array(
                                        'name' => 'medium',    					
                                        'width' => 960,
                                        'height' => 360,
                    					'crop' => true,
                    					'resize' => true,
                    					'crop_from_position' => 'center,bottom',
                    				),
                    
                    				array(
                    					'name' => 'large',
                    					'width' => 1140,
                    					'height' => 430,
                    					'crop' => true,
                    					'resize' => true,
                    					'crop_from_position' => 'center,bottom',
                    				),
                    
                    				array(
                    					'name' => 'hd',
                    					'width' => 2560,
                    					'height' => 960,
                    					'crop' => true,
                    					'resize' => true,
                    					'crop_from_position' => 'center,bottom',
                    				),
                    			),
                        );
                        ?>
                    <?php else: ?>
                        <?php
                        $args = array(
                        	'image' => $data['block_image']['ID'],
                        	'settings' => array(
                    
                    				array(
                    					'name' => 'small',
                    					'width' => 720,
                    					'height' => 405,
                    					'crop' => true,
                    					'resize' => true,
                    				),
                    				array(
                                        'name' => 'medium',    					
                                        'width' => 690,
                                        'height' => 388,
                    					'crop' => true,
                    					'resize' => true,
                    				),
                    
                    				array(
                    					'name' => 'large',
                    					'width' => 930,
                    					'height' => 523,
                    					'crop' => true,
                    					'resize' => true,
                    				),
                    
                    				array(
                    					'name' => 'hd',
                    					'width' => 1120,
                    					'height' => 630,
                    					'crop' => true,
                    					'resize' => true,
                    					'crop_from_position' => 'center,bottom',
                    				),
                    			),
                        );
                        ?>
                    <?php endif; ?>
                    
        
                    
                    <?php
                    $ri = BC_Responsive_Images::get_instance();
                    $image_data = $ri->image_data( $args );
                    ?>
                
                	<img class="swap-image island-bottom-margin island-bottom-half-margin"
                		src="<?php echo $image_data['sized_imagery']['hd']['src']; ?>"
                
                		<?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>
                
                			<?php echo 'data-' . $break_name . '="' . $img_set['src'] . '"'; ?>
                		<?php endforeach; ?>
                
                	>
                <?php endif; ?>
                <div class="<?php echo $data['content_layout'] ?> ">
            
                    <div class="row">
                        <div class="col-12">
                    
                            <?php if( false != $data['block_title'] ) : ?>
                                <h3><?php  echo apply_filters( 'the_title', $data['block_title'] ); ?></h3>
                            <?php endif; ?>
                            
                            
                            <?php if( false != $data['block_content'] ) : ?>
                                <?php  echo apply_filters( 'the_content', $data['block_content'] ); ?>
                            <?php endif; ?>
                    
                        </div>
                    </div>
                    
                </div>
            
            </div>
        </section>
        

    <?php endwhile; ?>
</div>
<?php endif; ?>