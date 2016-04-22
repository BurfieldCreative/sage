<?php
/**
 * Category List Navigation
 */
$categories_list =  ( false != get_transient("categories_sidebar_list") ) ? get_transient("categories_sidebar_list") : bc_get_categories_sidebar_list() ;

$section_title = 'Categories';


$current_queried_term = ( false != get_queried_object() ) ? get_queried_object() : false;

$current_term_id = ( isset( $current_queried_term->term_id )  ) ? $current_queried_term->term_id : false;
?>

<?php if( false != $categories_list ) : ?>
<aside class="island-bottom sidebar--nav-<?php echo sanitize_title($section_title); ?>">

    <ul class="side-nav list-unstyled">

    	<li class="heading"><?php echo ucwords(esc_html($section_title)); ?></li>

        <?php foreach( $categories_list AS $category_obj ) : ?>
		<li <?php echo ( $category_obj->term_id == $current_term_id ) ? 'class="current-cat"' : false; ?>>
    		<a href="<?php echo esc_url( get_category_link( $category_obj->term_id ) ); ?>">
            	<?php echo $category_obj->name; ?>
            </a>
    	</li>
		<?php endforeach; ?>

    </ul>

</aside>
<?php endif; ?>
