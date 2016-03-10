<?php
$attachment_id = $image['ID'];
$img_src = wp_get_attachment_image_url( $attachment_id, 'small' );
$img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'small' );
$featured_image_alt = trim( strip_tags( get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true ) ) );
?>
<img src="<?php echo esc_url( $img_src ); ?>"
     srcset="<?php echo esc_attr( $img_srcset ); ?>"
     sizes="(max-width: 50em) 87vw, 680px"
     alt="<?php echo esc_attr( $featured_image_alt ); ?>" >
