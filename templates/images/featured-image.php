<?php
$image['id']            = get_post_thumbnail_id( $post->ID );
$image['required_size'] = 'large';                
$image['attach']        = wp_get_attachment_image($image['id'], $image['required_size'], false, false );                
?>

<?php echo $image['attach']; ?>