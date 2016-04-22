<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
    
    
  if (is_home()) {
      
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
    
  } elseif (is_archive()) {
      
      
    if(bc_is_custom_post_type()) 
    {
        $post_object = get_post_type_object(get_post_type());
        return apply_filters('the_title', $post_object->label);            
    }
    elseif ( is_category() || is_tag() ) {
		
		return single_cat_title( '', false );

	} elseif ( is_author() ) {
		return get_the_author();

	} elseif ( is_day() ) {
		return get_the_date();
		
	} elseif ( is_month() ) {
		return get_the_date( 'F Y' );
		
	} elseif ( is_year() ) {
		return get_the_date( 'Y' );

	}
    else
    {
        return get_the_archive_title();
    }
    
    
    
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    return get_the_title();
  }
    
  
}
