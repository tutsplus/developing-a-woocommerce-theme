<?php
/***************************************************

The Loop for Pages

This theme uses a separate file for the loop instead of including it in individual template files, meaning that it can be used by multiple template files without duplication of code.

This loop is for pages - another loop is used for single posts and archives

*****************************************************/

// Run the page loop to output the page content.

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php if ( ! is_front_page() ) { ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php } ?>
		
		<section class="entry-content">
			<?php the_content(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-## -->

<?php endwhile; ?>