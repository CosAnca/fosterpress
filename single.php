<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FosterPress
 * @since FosterPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap" role="main">

<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <header>
      <h1 class="c-entry-title"><?php the_title(); ?></h1>
      <?php fosterpress_entry_meta(); ?>
    </header>
    <div class="c-entry-content">
      <?php the_content(); ?>
      <?php edit_post_link( __( '(Edit)', 'fosterpress' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
    <footer>
      <?php
        wp_link_pages(
          array(
            'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'fosterpress' ),
            'after'  => '</p></nav>',
          )
        );
      ?>
      <p><?php the_tags(); ?></p>
    </footer>
    <?php the_post_navigation(); ?>
    <?php comments_template(); ?>
  </article>
<?php endwhile;?>

<?php get_sidebar(); ?>
</div>
<?php get_footer();
