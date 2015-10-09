<?php // the footer template file - contains the footer itself plus the closing body and html tags ?>

	</div><!-- .main -->

<footer>

	<?php
	// action hook for any content placed before the content, including the widget area
	do_action ( 'tutsplus_footer' );
	?>

	
</footer>

<?php
// action hook for any content placed before the content, including the widget area
do_action ( 'tutsplus_after_footer' );
?>


<?php wp_footer(); ?>
</body>
</html>