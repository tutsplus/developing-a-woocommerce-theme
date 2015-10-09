<?php
// activate google fonts
function tutsplus_add_google_fonts() {
	wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
	wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );

// include for widgets
include( TEMPLATEPATH . '/includes/widgets.php' );

// register navigation menu
function tutsplus_register_theme_menu() {
	register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'tutsplus_register_theme_menu' );

// register sidebar widgets
function tutsplus_widgets_init() {
	
	// In header widget area, located to the right hand side of the header, next to the site title and description. Empty by default.
	register_sidebar( array(
		'name' => __( 'In Header Widget Area', 'tutsplus' ),
		'id' => 'in-header-widget-area',
		'description' => __( 'A widget area located to the right hand side of the header, next to the site title and description.', 'tutsplus' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Sidebar widget area, located in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'tutsplus' ),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area', 'tutsplus' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// First footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'tutsplus' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'tutsplus' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Second Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __('Second Footer Widget Area', 'tutsplus' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'tutsplus' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Third Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'tutsplus' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'tutsplus' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Fourth Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'tutsplus' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'tutsplus' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'tutsplus_widgets_init' );

// add theme support for featured images
function tutsplus_theme_support() {
	add_theme_support( 'post-thumbnails' ); 
}
add_action( 'after_setup_theme', 'tutsplus_theme_support' );


// colophon - activated via the tutsplus_after_footer hook
if ( ! function_exists( 'tutsplus_colophon' ) ) {
	function tutsplus_colophon() { ?>
		<section class="colophon" role="contentinfo">
			<small class="copyright half left">
				&copy; <a href="<?php echo apply_filters( 'tutsplus_colophon_link', home_url( '/' ) ) ?>"><?php echo apply_filters( 'tutsplus_colophon_name', get_bloginfo( 'name' ) ) ?></a> 2014
			</small><!-- #copyright -->
		
			<small class="credits half right">
					<?php _e( 'Proudly powered by', 'tutsplus' ); ?> <a href="http://wordpress.org/">WordPress</a>.
				</a>
			</small><!-- #credits -->
		</section><!--#colophon-->

	<?php		
	}

}
add_action( 'tutsplus_after_footer', 'tutsplus_colophon' );

// woocommerce support
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="main">';
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);

function my_theme_wrapper_end() {
  echo '</div>';
}
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

add_theme_support( 'woocommerce' );

// home page header
function tutsplus_cat_image_links() { ?>
		
		<div class="full-width clear product-cat-links">
			<div class="one-third left">
				<a href="<?php echo get_term_link( 'Clothing', 'product_cat' ); ?>">
					<img src ="<?php echo get_stylesheet_directory_uri(); ?>/images/clothing.jpg">
				</a>
				<h3>
					<a href="<?php echo get_term_link( 'Clothing', 'product_cat' ); ?>">Clothing</a>
				</h3>
			</div>
			<div class="one-third left">
				<a href="<?php echo get_term_link( 'Music', 'product_cat' ); ?>">
					<img src ="<?php echo get_stylesheet_directory_uri(); ?>/images/music.jpg">
				</a>
				<h3>
					<a href="<?php echo get_term_link( 'Music', 'product_cat' ); ?>">Music</a>
				</h3>
			</div>
			<div class="one-third right">
				<a href="<?php echo get_term_link( 'Posters', 'product_cat' ); ?>">
					<img src ="<?php echo get_stylesheet_directory_uri(); ?>/images/posters.jpg">
				</a>
				<h3>
					<a href="<?php echo get_term_link( 'Posters', 'product_cat' ); ?>">Posters</a>
				</h3>
			</div>
		</div>
		
<?php }

function tutsplus_main_shop_before_content() {
	if( is_shop() && !is_search() ) {
		tutsplus_cat_image_links();
	}
}
add_action( 'woocommerce_before_main_content', 'tutsplus_main_shop_before_content' );

// featured products in sidebar
function tutsplus_sidebar_products() {
	
	// query arguments
	$args = array(
		'post_type' => 'product',
		'product_tag' => 'Featured',
	);
	
	// run the loop
	$query = new WP_query ( $args );
	if ( $query->have_posts() ) { ?>
		<aside class="featured-products">
			<h3>Featured Products</h3>
			
			<ul>
				<?php while ( $query->have_posts() ) : $query->the_post(); /* start the loop */ ?>
			 
				<li id="post-<?php the_ID(); ?>" <?php post_class( 'half left' ); ?>>
				
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumbnail', array(
								'class' => 'left',
								'alt'	=> trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt ))
							) ); ?>
						</a>
					<?php } ?>
					
					<a class="featured-product-text" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</li>
			 		 
				<?php endwhile; /* end the loop*/ ?>
		 	
			</ul>
				
		</aside>
		
		<?php rewind_posts(); ?>
	
	<?php }
	
}
add_action( 'tutsplus_sidebar', 'tutsplus_sidebar_products', 15 );

// category pages - image
function tutsplus_product_cats_before_content() {
if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<img src="' . $image . '" alt="' . trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )) . '" class="product-cat-image" />';
		}
	}
}
add_action( 'woocommerce_archive_description', 'tutsplus_product_cats_before_content', 5 );

function woocommerce_template_loop_product_thumbnail() {

	if( is_product()) {
		echo woocommerce_get_product_thumbnail( 'thumbnail' );
	}
	else {
		echo woocommerce_get_product_thumbnail();		
	}
}

// checkout customization
function tutsplus_checkout_text() { ?>
	<p>Thanks for shopping with us. Please complete your details below.</p>
<?php }
add_action( 'woocommerce_before_checkout_form', 'tutsplus_checkout_text', 5 );
?>