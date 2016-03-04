<?php
/**
 * Archives List Navigation
 */

$archives_list = ( false != get_transient("archives_sidebar_list") ) ? get_transient("archives_sidebar_list") : bc_get_archives_sidebar_list() ;

$section_title = 'Archives';
?>

<?php if( $archives_list ) : ?>
<aside class="sidebar sidebar--nav-<?php echo sanitize_title($section_title); ?>">

    <ul class="side-nav list-unstyled">

        <li class="heading"><?php echo ucwords(esc_html($section_title)); ?></li>

        <?php echo $archives_list; ?>
    </ul>

</aside>
<?php endif; ?>
