<?php
/**
 * 	Function to strip the posts content. Called within the loop
 *
 * 	@param1		$amount			(int)		# no. of WORDS that have to be shown
 * 	@param2		$read_more_link	(String)	# If provided becomes click text for 'read more' link; Default: `read more`
 *
 * 	@return		no return		(String)	# echo'd to screen
 *
 * for example <p><?php bc_truncate_posts( 20, false ); ?></p>	
 **/
function bc_truncate_posts( $amount, $read_more_link='read more' ) {

	echo balanceTags(wp_trim_words( do_shortcode(get_the_content()), $amount, '…<a href="'.get_permalink().'">'.$read_more_link.'</a>' ), true);

}
