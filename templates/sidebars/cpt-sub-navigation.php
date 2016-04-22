<?php
/**
 * CPT Sub Navigation
 */
$pt_obj = get_post_type_object( get_post_type() );

//requires cpt to be defined as 'hierarchical' => true
$args = array(
    'post_type'     => $pt_obj->name,
    'sort_column'   => 'menu_order, post_title',
    'sort_order'    => 'ASC',
    'title_li'      => false,
    'echo'          => 0
);

$list_pages      = wp_list_pages( $args );

$section_title = $pt_obj->labels->name;

?>

<?php if( $list_pages ) : ?>
<aside class="island-bottom sidebar--nav-<?php echo $pt_obj->name; ?>">

	<ul class="side-nav list-unstyled">

	    <li class="heading">
	    	<?php echo ucwords(esc_html($section_title)); ?>
	    </li>

	    <li>
	    	<a href="<?php echo get_post_type_archive_link( $pt_obj->name ); ?>">
		    	All <?php echo ucwords(esc_html($section_title)); ?>
	    	</a>
	    </li>

        <?php echo $list_pages; ?>
    </ul>

</aside>
<?php endif; ?>
