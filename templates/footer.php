<footer class="footer">

    <?php get_template_part( 'templates/recent-posts' ); ?>

    <div class="container row island">
        <div class='address col-12 col-6-tablet'>
            <?php get_template_part( 'templates/vcard' ); ?>
        </div>
        <div class='social col-12 col-6-tablet'>
            <?php get_template_part( 'templates/social-links' ); ?>
        </div>
    </div>


    <div class="container row island-bottom">
        <nav class="nav-footer col-12 clear ">
            <?php
            if (has_nav_menu('secondary_navigation')) :

                $args = array(
                    'menu_class' => 'menu footer-menu list-inline',
                    'theme_location' => 'secondary_navigation',

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

    <div class="sub-footer">
        <div class="container row island-half">
            <div class="col-12 col-6-tablet">
                <span class="site-colophon site-colophon--copyright">
                    Copyright &copy; <?php echo date("Y") ?> <?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?>
                </span>
            </div>
            <div class="col-12 col-6-tablet text-right">
                <span class="site-credit">
                    <?php
                        $site_address   = ( WP_ENV == 'production' ) ? 'http://burfieldcreative.co.uk' : '#';
                        $the_credit     = 'Designed &amp; Developed';
                        $the_title      = 'Web Design Bath';
                        $logo_class     = 'site-credit site-credit--dark'
                    ?>
                    <?php echo esc_html($the_credit); ?> by <a <?php echo (!is_front_page()) ? 'rel="nofollow"' : false ; ?> class='<?php echo esc_attr($logo_class); ?>' target='_blank' href='<?php echo esc_url($site_address); ?>' title='<?php echo esc_attr($the_title); ?>'><?php echo esc_html('Burfield'); ?><span class='vh'> - <?php echo esc_html($the_title); ?></span></a>
                </span>
            </div>

        </div>
    </div>

</footer>
