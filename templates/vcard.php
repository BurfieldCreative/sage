<div class="vcard" itemscope itemtype="http://schema.org/Organization">

    <?php $name 	= get_bloginfo( 'name' ); ?>
	<div itemprop="name"><?php echo $name; ?></div>
	
	<?php $description 	= get_bloginfo( 'description' ); ?>
	<div class="vh" itemprop="description"><?php echo ($description !== "Just another WordPress site") ? $description : ''?></div>

	<?php
	$latitude 		= get_field( 'address_latitude', 'option' );
	$longitude 		= get_field( 'address_longitude', 'option' );    
    	
	if( false != $latitude )
		$lat = 'data-lat="'.$latitude.'"';
	else
		$lat = false;

	if( false != $longitude )
		$lng = 'data-lng="'.$longitude.'"';
	else
		$lng = false;
	?>

	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" <?php echo $lat; ?> <?php echo $lng; ?>>
        
        <?php
        $street_address_1	= get_field( 'street_address_1', 'option' );
        $street_address_2	= get_field( 'street_address_2', 'option' );
        $town_city   		= get_field( 'town_city', 'option' );
        $county 		    = get_field( 'county', 'option' );
        $postcode           = get_field( 'postcode', 'option' );
        $country            = get_field( 'country', 'option' );
        ?>
        
		<?php if( false != $street_address_1 || false != $street_address_2 ) : ?>
		<span class="address__line" itemprop="streetAddress">

			<?php if(  false != $street_address_1 ) : ?>
			<span class="address__subrow">
				<?php echo $street_address_1; ?>
			</span>
			<?php endif; ?>

			<?php if( false != $street_address_2 ) : ?>
			<span class="address__subrow">
				<?php echo $street_address_2; ?>
			</span>
			<?php endif; ?>

		</span>
		<?php endif; ?>

		<?php if( false != $town_city ) : ?>
		<span itemprop="addressLocality"><?php echo $town_city; ?></span>
		<?php endif; ?>

		<?php if( false != $county ) : ?>
		<span itemprop="addressRegion"><?php echo $county; ?></span>
		<?php endif; ?>

		<?php if( false != $postcode ) : ?>
		<span itemprop="postalCode"><?php echo $postcode; ?></span>
		<?php endif; ?>

		<?php if( false != $country ) : ?>
		<span itemprop="addressCountry"><?php echo $country; ?></span>
		<?php endif; ?>

	</div>
    
    
    <?php $contact_email = get_field( 'contact_email', 'option' ); ?>
	<?php if( false != $country ) : ?>
	<div class="vcard__email">
		<a itemprop="email" href="mailto:<?php echo antispambot( $contact_email, true ); ?>">
			<?php echo antispambot( $contact_email ); ?>
		</a>
	</div>
	<?php endif; ?>

	
    <?php $contact_telephone = get_field( 'contact_telephone', 'option' ); ?>
	<?php if( false != $contact_telephone ) : ?>
	<div class="vcard__tel">
		Tel:
		<span itemprop="telephone"><?php echo $contact_telephone; ?></span>
	</div>
	<?php endif; ?>
</div>

<?php if ($latitude && $longitude) : ?>
<div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
	<meta itemprop="latitude" content="<?php echo esc_attr( $latitude ); ?>" />
	<meta itemprop="longitude" content="<?php echo esc_attr( $longitude ); ?>" />
</div>
<?php endif; ?>
