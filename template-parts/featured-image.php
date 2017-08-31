<?php
// If a featured image is set, insert into layout.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" style="background-image: url('<?php echo the_post_thumbnail_url() ?>')" ></header>
<?php endif;
