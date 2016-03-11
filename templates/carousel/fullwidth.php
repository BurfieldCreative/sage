<?php if( have_rows('slider_group') ): ?>
<div class="">
    
	<section class="carousel">    
	    
	    <?php while( have_rows('slider_group') ): the_row(); ?>
            
            <?php
            $data['slide_image']       = get_sub_field('slide_image');
            
            $data['slide_title']       = get_sub_field('slide_title');
    		$data['slide_content']     = get_sub_field('slide_content');
    		
    		$data['cta_text']          = get_sub_field('cta_text');
            $data['cta_internal_link'] = get_sub_field('cta_internal_link');
            $data['cta_external_url']  = get_sub_field('cta_external_url');
    		?>
    		
    		<div>
                
                <?php
                $image['id']            = $data['slide_image']['id'];
                $image['required_size'] = 'xlarge';                
                $image['attach']        = wp_get_attachment_image($image['id'], $image['required_size'], false, false );                
                ?>
                
                <?php echo $image['attach']; ?>
                
                
                <div class="container">
                    
                    <?php if( false != $data['slide_title'] ): ?>
                        <h2><?php echo apply_filters('the_title',$data['slide_title']); ?></h2>
                    <?php endif; ?>
                    <?php if( false != $data['slide_content'] ): ?>
                        <?php echo apply_filters('the_content',$data['slide_content']); ?>
                    <?php endif; ?>
                    
                    
                    <?php if( false != $data['cta_internal_link'] ): ?>

                        <a class="button" href="<?php echo esc_url($data['cta_internal_link']); ?>">
                            <span><?php echo ( false != $data['cta_text'] ) ? $data['cta_text'] : "Read More"; ?></span>
                        </a>
                    
                    <?php elseif( false != $data['cta_external_url'] ): ?>
        
                        <a class="button" href="<?php echo esc_url($data['cta_external_url']); ?>">
                            <span><?php echo ( false != $data['cta_text'] ) ? $data['cta_text'] : "Read More"; ?></span>
                        </a>
        
                    <?php endif; ?>
        
                </div>
                
                                
    		</div>

        <?php endwhile; ?>

	</section>

</div>
<?php endif; ?>
