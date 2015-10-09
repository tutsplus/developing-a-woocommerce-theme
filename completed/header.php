<!DOCTYPE html>
<!-- add a class to the html tag if the site is being viewed in IE, to allow for any big fixes -->
<!--[if lt IE 8]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><html><![endif]-->
<!--[if !IE]><html><![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?>
</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 

	<?php
	// action hook for any content placed before the header, including the widget area
	do_action ( 'tutsplus_before_header' );
	?>


	<header role="banner">
	
		<div class="site-name half left">			
			<!-- site name and description - site name is inside a div element on all pages execpt the front page and/or main blog page, where it is in a h1 element -->
			<h1 id="site-title">
				<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo apply_filters( 'tutsplus_sitetitle', get_bloginfo( 'name' ) ); ?></a>
			</h1>
			<h2 id="site-description"><?php echo apply_filters( 'tutsplus_sitedescription', get_bloginfo( 'description' ) ); ?></h2>
		</div>
		
		<div class="half right">
			<!-- This area is by default in the top right of the header. It contains contact details and is also where you might add social media or RSS links -->
		
			<?php
			// action hook for any content placed inside the right hand header, including the widget area.
			do_action ( 'tutsplus_in_header' );
			?>
		</div> <!-- .half right -->
		
		
	</header>

<div class="navwrapper"><!-- for full width styling -->	
	<!-- full width navigation menu - delete nav element if using top navigation -->
	<nav class="menu main">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<div class="skip-link screen-reader-text"><a href="#content" title="Skip to content"><?php _e( 'Skip to content', 'tutsplus' ); ?></a></div>
		<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>

	</nav><!-- .main -->
</div><!-- .navwrapper-->

	<div class="main">
	
		<?php if ( is_page_template( 'page-full-width.php' ) ) {
			
			echo '<div id ="content" class="full-width">';
		
		} else {
			
			echo '<div id="content" class="two-thirds left">';
		} ?>
		
			<?php
			// action hook for any content placed before the content, including the widget area
			do_action ( 'tutsplus_before_content' );
			?>