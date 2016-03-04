<?php
/**
 * Helper Functions
 *
 * General utilizy functions used throughout the theme
 *
 */

/**
 * WordPress' missing is_blog_page() function.  Determines if the currently viewed page is
 * one of the blog pages, including the blog home page, archive, category/tag, author, or single
 * post pages.
 *
 * @return bool
 */
function bc_is_blog_page() {

    global $post;

    //Post type must be 'post'.
    $post_type = get_post_type($post);

    //Check all blog-related conditional tags, as well as the current post type,
    //to determine if we're viewing a blog page.
    return (
        ( is_home() || is_archive() || is_single() )
        && ($post_type == 'post')
    ) ? true : false ;

}


/**
 * 	Function to get the root parent of a page
 *
 * 	@param	$page_id	(int)	# page id
 * 	@return	$parent 	(int)	# root parent page
 *
 */
function bc_get_root_parent( $page_id ) {
	global $wpdb;
	$parent = $wpdb->get_var( "SELECT post_parent FROM $wpdb->posts WHERE post_type='page' AND ID = '$page_id'" );
	if ($parent == 0)
		return $page_id;
	else
		return bc_get_root_parent( $parent );
}


/**
 * Check if a post is a custom post type.
 * @param  mixed $post Post object or ID
 * @return boolean
 */
function bc_is_custom_post_type( $post = NULL )
{
    $all_custom_post_types = get_post_types( array ( '_builtin' => FALSE ) );

    // there are no custom post types
    if ( empty ( $all_custom_post_types ) )
        return FALSE;

    $custom_types      = array_keys( $all_custom_post_types );
    $current_post_type = get_post_type( $post );

    // could not detect current type
    if ( ! $current_post_type )
        return FALSE;

    return in_array( $current_post_type, $custom_types );
}

/**
 * Query to return the top tags for use around the site
 *
 * @since    1.0.0
 */
function bc_get_tags_list_obj(  ) {

    $args = array(
		'number'        => 10,
		'hide_empty'    => false,
		'orderby'       => 'count',
		'order'         => 'DESC',
	);

	$tags_list = get_terms( 'post_tag', $args );

    set_transient("tags_list_obj", $tags_list, 60 * 60 * 1); // Stored for one hour

	//return the post if we have one
	return $tags_list;

}

/*
 * Set Tranisent Cache for the archive sidebar list
 *
 * @since    1.0.0
 */
function bc_get_archives_sidebar_list(  ) {

    $args = array (
    	'echo'		=> 0,
    	'title_li'	=> false,
    	'limit'     => 12,
    	'order'     => 'DESC',
    );

    $archives_list = wp_get_archives( $args );

    set_transient("archives_sidebar_list", $archives_list, 60 * 60 * 24 * 1); // Stored for one day

	return $archives_list;

}

/**
 * Set Tranisent Cache for the categories sidebar list
 *
 * @since    1.0.0
 */
function bc_get_categories_sidebar_list(  ) {

	$args = array (
		'depth' 	=> 1,
		'parent'    => 0,
        'orderby'   => 'name',
        'order'     => 'ASC',
	);
	$categories_list = get_categories( $args );

    set_transient("categories_sidebar_list", $categories_list, 60 * 60 * 24 * 1); // Stored for one day

	return $categories_list;

}
