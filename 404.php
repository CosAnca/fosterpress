<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FosterPress
 * @since FosterPress 1.0.0
 */

get_header(); ?>

 <div class="main-wrap" role="main">
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php _e( 'File Not Found', 'fosterpress' ); ?></h1>
		</header>
		<div class="entry-content">
			<div class="error">
				<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'fosterpress' ); ?></p>
			</div>
			<p><?php _e( 'Please try the following:', 'fosterpress' ); ?></p>
			<ul>
				<li><?php _e( 'Check your spelling', 'fosterpress' ); ?></li>
				<li>
					<?php
						/* translators: %s: home page url */
						printf( __(
							'Return to the <a href="%s">home page</a>', 'fosterpress' ),
							home_url()
						);
					?>
				</li>
				<li><?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'fosterpress' ); ?></li>
			</ul>
		</div>
	</article>

 <?php get_sidebar(); ?>

</div>

<?php get_footer();