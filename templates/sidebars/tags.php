<?php
/**
 * Tag List Navigation
 */
$tag_list =  bc_get_tags_list_obj() ;

$section_title = 'Top Tags';

$current_queried_term = ( false != get_queried_object() ) ? get_queried_object() : false;

$current_term_id = ( isset( $current_queried_term->term_id )  ) ? $current_queried_term->term_id : false;
?>

<?php if( false != $tag_list ) : ?>
<aside class="sidebar--nav-<?php echo sanitize_title($section_title); ?>">

    <ul class="side-nav list-unstyled">

        <li class="heading"><?php echo ucwords(esc_html($section_title)); ?></li>

        <?php foreach( $tag_list AS $tag_obj ) : ?>
		<li <?php echo ( $tag_obj->term_id == $current_term_id ) ? 'class="current-cat"' : false; ?>>
    		<a href="<?php echo esc_url( get_tag_link( $tag_obj->term_id ) ); ?>">
            	<?php echo $tag_obj->name; ?>
            </a>
    	</li>
		<?php endforeach; ?>

    </ul>

</aside>
<?php endif; ?>
