<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',                       // Scripts and stylesheets
  'lib/extras.php',                       // Custom functions
  'lib/setup.php',                        // Theme setup
  'lib/titles.php',                       // Page titles
  'lib/wrapper.php',                      // Theme wrapper class
  'lib/customizer.php',                   // Theme customizer
  'lib/bc/bc-default-pages.php',              // Loads home contact and news custom pages which are templated
  'lib/bc/bc-extend-gravity-forms.php',   // Extends gravvity forms adding classes etc
  'lib/bc/bc-is.php',                     // Custom is functions for example bc_is_blog_page()
  'lib/bc/bc-protected-name.php',          // Protected name function
  'lib/bc/bc-wp-core.php'               // Custom tweaks on wordpress

];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
