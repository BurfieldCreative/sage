<div class="none block-tablet">
<?php 
$args = array(
    
    'type' => 'list',
    'prev_next' => true,
    'prev_text' => '&lt;',
    'next_text' => '&gt;',
    
);
the_posts_pagination( $args ); 
?>
</div>
<div class="none-tablet landmark--major clearfix">
	<?php bc_content_nav('post-'.get_the_ID()); ?>
</div>