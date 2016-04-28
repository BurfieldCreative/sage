<header class="banner island">
    <div class="container row">

        <div class="col-6 col-4-desktop">
            <a class="site-logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
            </a>
        </div>


        <div class="col-6 col-8-desktop none block-desktop">

            <nav class="nav-header">
                <?php
                if ( has_nav_menu( 'primary_navigation' ) ) :

                    $args = array(
                        'menu_class' => 'menu header-menu list-inline right',
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
        </div>
        <div class="col-6 none-desktop block-tablet">
            <div id="mobile-menu-button" class="hamburger"><span></span></div>
        </div>

    </div>

  </div>
</header>
