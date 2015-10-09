<?php
/******************************************************************
WordPress Theme Frameworks Tutorial - include file for widgets
******************************************************************/


/******************************************************************
in header widget area, activated on the compass_in_header action hook
******************************************************************/
function tutsplus_in_header_widget_area() {
	if ( is_active_sidebar( 'in-header-widget-area' ) ) { ?>
		<aside class="in-header widget-area" role="complementary">
			<?php dynamic_sidebar( 'in-header-widget-area' ); ?>
		</aside>
	<?php } 
}
add_action( 'tutsplus_in_header', 'tutsplus_in_header_widget_area' );


/******************************************************************
sidebar widget area, activated on the compass_sidebar action hook
******************************************************************/
function tutsplus_sidebar_widget_area() {
	if ( is_active_sidebar( 'sidebar-widget-area' ) ) { ?>
		<aside class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
		</aside>
	<?php } 
}
add_action( 'tutsplus_sidebar', 'tutsplus_sidebar_widget_area' );


/******************************************************************
footer widget area, activated on the compass_footer action hook
******************************************************************/
function tutsplus_footer_widget_area() { ?>

	<aside class="fatfooter" role="complementary">

		<?php
		// the first widget area
		if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
			<aside class="first quarter left widget-area">
				<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</aside><!-- .first .widget-area -->
		<?php } 
		
		// the second widget area
		if ( is_active_sidebar( 'second-footer-widget-area' ) ) { ?>
			<aside class="second quarter widget-area">
				<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</aside><!-- .first .widget-area -->
		<?php } 
	
		// the third widget area
		if ( is_active_sidebar( 'third-footer-widget-area' ) ) { ?>
			<aside class="third quarter widget-area">
				<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</aside><!-- .first .widget-area -->
		<?php } 
	
		// the fourth widget area
		if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) { ?>
			<aside class="fourth right quarter widget-area">
				<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
			</aside><!-- .first .widget-area -->
		<?php } ?>
	
	</aside>

<?php	
}
add_action( 'tutsplus_footer', 'tutsplus_footer_widget_area' );

?>