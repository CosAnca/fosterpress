<?php
/**
 * The template for displaying search results pages.
 *
 * @package FosterPress
 * @since FosterPress 1.0.0
 */

get_header(); ?>

<div class="main-wrap" role="main">

<article <?php post_class('main-content') ?> id="search-results">
	<header>
	    <h1 class="c-entry-title"><?php _e( 'Search Results for', 'fosterpress' ); ?> "<?php echo get_search_query(); ?>"</h1>
	</header>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<?php
	if ( function_exists( 'fosterpress_pagination' ) ) :
		fosterpress_pagination();
	elseif ( is_paged() ) :
	?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'fosterpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'fosterpress' ) ); ?></div>
		</nav>
	<?php endif; ?>

</article>

<?php get_sidebar(); ?>

</div>

<?php get_footer();
