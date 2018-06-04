<?php /* Template Name: Archive Template */
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<?php
                   the_archive_title( '<h1 class="page-title">', '</h1>' );
               ?>
           </header><!-- .page-header -->
            <article class="archive-article">
           <div class="archive-template">
           <div class="post-archives">
               <h2>Quote Authors</h2>
               <ul>
                   <?php
               $posts = get_posts( 'posts_per_page=-1' );
               foreach ( $posts as $post ) : setup_postdata( $post );
               ?>

           <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
       <?php endforeach; wp_reset_postdata(); ?>
           </ul>
           </div>
            
           <div class="categories-archives">
               <h2>Categories</h2>
               <ul>
               <?php wp_list_categories( array(
					'format' => 'list',
					'title_li' => ''
					))
               ?>
               </ul>
           </div>

           <div class="tag-archives">
               <h2>Tags</h2>
               <?php wp_tag_cloud( array(
                   'format'=> 'list',
                   'smallest' => 1.25,
                   'largest' => 1.25,
                   'unit' => 'rem'
                 )) ?>
			</div>
            </div>
               </article>

<?php get_footer(); ?>

