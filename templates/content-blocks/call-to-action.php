<?php
$data['block_title']            = get_sub_field('block_title');
$data['block_content']          = get_sub_field('block_content');

$data['block_link_destination'] = get_sub_field('block_link_destination');
$data['block_link_text']        = get_sub_field('block_link_text');

//echo '<pre class="container">Debug:  '.print_r( $data, true ).'</pre>'; 
?>


<section class="content-block content-block--cta island-bottom-margin island-half island-white">
    
    <div class="container">
        <div class="row">
                
            <div class="col-10 push-1 text-center">
                
                <?php if( false != $data['block_title'] ) : ?>
                    <h2><?php  echo apply_filters( 'the_title', $data['block_title'] ); ?></h2>
                <?php endif; ?>
                
                
                <?php if( false != $data['block_content'] ) : ?>
                    <?php  echo apply_filters( 'the_content', $data['block_content'] ); ?>
                <?php endif; ?>
                
                
                <?php if( false != $data['block_link_destination'] ) : ?>
                <div class="row">
                    <div class="col-6 push-3 text-center">
                        <a class="h3 button" href="<?php echo $data['block_link_destination']; ?>">
                            <?php echo apply_filters('the_title',$data['block_link_text']); ?>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
                
                
            </div>
                
        </div>
    </div>
    
</section>