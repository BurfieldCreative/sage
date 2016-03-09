<?php
	$social_accounts['twitter'] 	= get_field('twitter_profile', 'option' );
	$social_accounts['facebook'] 	= get_field('facebook_profile', 'option' );
	$social_accounts['youtube'] 	= get_field('youtube_profile', 'option' );
	$social_accounts['vimeo']    	= get_field('vimeo_profile', 'option' );
	$social_accounts['instagram'] 	= get_field('instagram_profile', 'option' );
	$social_accounts['linkedin'] 	= get_field('linkedin_profile', 'option' );
	$social_accounts['google-plus'] 	= get_field('googleplus_profile', 'option' );

	$site_name = get_bloginfo( 'name' );
	$site_name_filter = apply_filters('the_title', $site_name);
?>
<ul class="social-list list-inline right">

    <?php foreach ( $social_accounts AS $network => $account ) : ?>

        <?php if ( false != $account ) : ?>

        	<li class="social-list__item social-list__item--<?php echo esc_attr( $network ); ?>">
                <a href="<?php echo esc_url( $account ); ?>" target="_blank">
                    <span aria-hidden="true"class="icon icon-<?php echo esc_attr( $network ); ?>"></span>
                    <span class="sr"><?php echo $site_name_filter; ?> <?php echo esc_attr( $network ); ?> account</span>
                </a>
        	</li>

        <?php endif; ?>

    <?php endforeach; ?>

</ul>
