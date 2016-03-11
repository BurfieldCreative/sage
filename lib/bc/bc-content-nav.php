<?php
if ( ! function_exists( 'bc_content_nav' ) ):
/**
 * Display navigation to next/previous pages when applicable
 *
 * @since bc 1.0
 */
function bc_content_nav( $nav_id ) {
	global $wp_query, $post;
	
	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() || is_post_type_archive() ) )
		return;

	$nav_class = 'pager paging-navigation';
	if ( is_single() )
		$nav_class = 'pager post-navigation';

	?>
	<nav role="navigation" id="<?php echo $nav_id; ?>" class="<?php echo $nav_class; ?>">
		

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<div class="pager__item pager__item--prev">%link</div>', '<span class="pager__arrow">' . _x( '&lt;', 'Previous post link', 'bc' ) . '</span> Previous' ); ?>
		<?php next_post_link( '<div class="pager__item pager__item--next">%link</div>', 'Next <span class="pager__arrow">' . _x( '&gt;', 'Next post link', 'bc' ) . '</span>' ); ?>
		
	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() || is_post_type_archive() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="pager__item pager__item--prev"><?php next_posts_link( __( '<span class="pager__arrow">&lt;</span> ', 'bc' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="pager__item pager__item--next"><?php previous_posts_link( __( ' <span class="pager__arrow">&gt;</span>', 'bc' ) ); ?></div>
		<?php endif; ?>

	<?php endif; ?>

	</nav><!-- #<?php echo $nav_id; ?> -->
	<?php
}
endif; // bc_content_nav
