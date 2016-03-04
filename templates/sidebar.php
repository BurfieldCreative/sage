<?php if ( bc_is_custom_post_type() ) : ?>

	<?php if ( is_singular() || is_post_type_archive() ) : ?>
	<?php get_template_part( 'templates/sidebars/cpt-sub-navigation' ); ?>
	<?php endif; ?>

	<?php if( is_tax() ) : ?>
	<?php get_template_part( 'templates/sidebars/cpt-taxonomy-navigation' ); ?>
	<?php endif; ?>

<?php endif; ?>

<?php if ( bc_is_blog_page() ) : ?>

	<?php get_template_part( 'templates/sidebars/tags' ); ?>

	<?php get_template_part( 'templates/sidebars/categories' ); ?>

	<?php get_template_part( 'templates/sidebars/archives' ); ?>

<?php else : ?>

	<?php get_template_part( 'templates/sidebars/descendants' ); ?>

<?php endif; ?>
