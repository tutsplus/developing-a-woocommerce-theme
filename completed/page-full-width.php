<?php
/*
Template Name: Full width page, no sidebar
*/

get_header(); ?>

	<?php get_template_part( 'loop' , 'page' ); ?>

	<?php
	// action hook for any content placed after the content, including the widget area
	do_action ( 'tutsplus_after_content' );
	?>	
	
</div><! -- content-->

<?php get_footer(); ?>
