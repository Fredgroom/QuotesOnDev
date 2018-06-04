<?php
/**
 * Template part for displaying posts.
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
		<?php $source = get_post_meta( get_the_ID(), '_qod_quote_source', true);
		$source_url = get_post_meta( get_the_ID(), 
		'_qod_quote_source_url', true); ?>

		<?php the_title( sprintf( '<h2 class="entry-title">-', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ($source && $source_url) : ?>
			<span class="source"><ahref="<?php echo $source_url;?><?php echo $source; ?></span>
		<?php elseif ($source) : ?>
			<span class="source"><?php echo $source; ?></span>
		<?php else : ?>
			<span class="source"></span>
		<?php endif;?>
		
	</div>

	<?php if (is_front_page() || is_single()) : ?>

	<button type="button" id="new-quote-button">Show Me Another!</button>

<?php endif; ?>

</article><!-- #post-## -->

