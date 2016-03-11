<?php
/**
 * Taxonomy List Navigation
 */
$current_queried_object = get_queried_object();

$custom_terms = get_terms( $current_queried_object->taxonomy );

$custom_taxonomy = get_taxonomy( $current_queried_object->taxonomy );

$section_title = $custom_taxonomy->labels->name;

?>

<?php if( false != $custom_terms ) : ?>
<aside class="island-bottom sidebar--nav-<?php echo sanitize_title($section_title); ?>">

    <ul class="side-nav list-unstyled">

    	<li class="heading"><?php echo ucwords(esc_html($section_title)); ?></li>

        <?php foreach( $custom_terms AS $term_obj ) : ?>
		<li <?php echo ( $term_obj->term_id == $current_queried_object->term_id ) ? 'class="current-cat"' : false; ?>>

			<?php $term_link = get_term_link( $term_obj, $current_queried_object->taxonomy ); ?>

    		<a href="<?php echo $term_link; ?>">
            	<?php echo $term_obj->name; ?>
            </a>
    	</li>
		<?php endforeach; ?>

    </ul>

</aside>
<?php endif; ?>
