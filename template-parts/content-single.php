<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
</header><!-- .entry-header -->

<div class="entry-content">

	<?php the_content(); ?>

</div><!-- .entry-content -->

<div class="entry-meta">	

	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<span class="source"></span>

	
</div>

<?php if (is_front_page() || is_single()) : ?>

<button type="button" id="new-quote-button">Show Me Another!</button>

<?php endif; ?>

</article><!-- #post-## -->

