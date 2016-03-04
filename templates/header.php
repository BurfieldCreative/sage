<header class="banner">
  <div class="container">
    <a class="site-logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
	     <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
    </a>
    <nav class="nav-header none block-desktop">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header-menu']);
      endif;
      ?>
    </nav>
    <div id="mobile-menu-button" class="hamburger none-desktop block-tablet"><span></span></div>
  </div>
</header>
