<?php // the sidebar template file - contains the sidebar widgets ?>

	<?php
	// action hook for any content placed after the content, including the widget area
	do_action ( 'tutsplus_after_content' );
	?>

</div><!-- #content -->

<?php
// action hook for any content placed in the sidebar, including the widget area
do_action ( 'tutsplus_sidebar' );
?>
