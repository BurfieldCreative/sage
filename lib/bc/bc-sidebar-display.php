<?php 
//add_filter('sage/display_sidebar', __NAMESPACE__ . '\sage_sidebar_on_special_page');

function sage_sidebar_on_special_page($sidebar) {
    if (is_page('special-page')) {
        return true;
    }
    return $sidebar;
}