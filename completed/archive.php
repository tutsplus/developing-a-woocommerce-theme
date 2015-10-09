<?php 
/* the archive file - for displaying archives
*/
 get_header(); ?>
		
			<?php
			// action hook for any content placed before the content, including the widget area
			do_action ( 'tutsplus_before_content' );
			?>
	
			<?php get_template_part( 'loop' ); ?>
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>