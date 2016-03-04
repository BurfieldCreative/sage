<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

$menu_class = 8; //add a interger options available are 1 - 8

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
    <body <?php body_class(); ?>>
      <!--[if IE]>
      <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
    </div>
    <![endif]-->
    <div class="bc-effect-<?php echo $menu_class; ?>" id="bc-wrapper">
      <div class="wrapper-inner <?php echo ($menu_class == '3') ? 'bc-pusher' : '';?>" id="main-content" role="document">

        <!--Mobile menu hidden on desktop-->
        <nav class="none-desktop block-tablet bc-menu bc-effect-<?php echo $menu_class; ?>">

          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header-menu']);
            endif;
            ?>

        </nav>


        <div class="content <?php echo ($menu_class != '3') ? 'bc-pusher' : '';?>" id="main-content">
          <?php
            do_action('get_header');
            get_template_part('templates/header');
          ?>

          <div class='container row'>

            <main class="main-content" id="main-page-content">

              <?php include Wrapper\template_path(); ?>

            </main>

            <?php if (Setup\display_sidebar()) : ?>
              <?php include Wrapper\sidebar_path(); ?>
            <?php endif; ?>

          </div>

          <?php
          do_action('get_footer');
          get_template_part('templates/footer');
          wp_footer();
          ?>
        </div>
      </div><!-- /end of menu push -->
    </div>
  </body>
</html>
