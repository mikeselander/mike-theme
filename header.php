<?php
/**
 * The template for displaying the site header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mike-simple
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

	<?php wp_head(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-25947533-1', 'auto');
	  ga('send', 'pageview');

	</script>

</head>

<body <?php body_class(); ?>>

    <div class="site-header">

		<p class="logo">
			<a href='<?php echo esc_url( site_url() ); ?>'>Mike Selander</a>
		</p>

		<nav>

        	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

	    </nav>

	</div>

	<?php
		if ( get_the_post_thumbnail() != '' && !is_single() ){
        	echo '<div class="banner container">';
	        	the_post_thumbnail( '', array( 'class' => 'expand' ) );
	        echo "</div>";

        }
	?>
