<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
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

    <!--Mobile menu hidden on desktop-->
    <?php /** AVAILABLE OPTIONS .nav-off-canvas-above-right, .nav-off-canvas-above-left .nav-off-canvas-left, .nav-off-canvas-right, .nav-off-canvas-top **/ ?>
    <nav class="mobile-menu nav-off-canvas-right" >
        <?php
        if ( has_nav_menu( 'primary_navigation' ) ) :

            $args = array(
                'menu_class' => 'off-canvas-menu none-desktop block-tablet list-unstyled',
                'theme_location' => 'primary_navigation',

                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1,
                'fallback_cb' => false,
          );

          wp_nav_menu( $args );

        endif;
        ?>
    </nav>

    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
