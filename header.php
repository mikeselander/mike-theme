<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Person",
  "image": "http://mikeselander.com/wp-content/themes/mike/images/me.png",
  "name": "Mike Selander",
  "additionalName": "Mike",
  "email": "mikeselander@gmail.com",
  "jobTitle": "Head of Development",
  "affiliation": "Old Town Media, Inc.",
  "url": "http://mikeselander.com/",
  "sameAs": "https://twitter.com/Mike_Selander",
  "sameAs": "http://www.linkedin.com/in/mikeselander/",
  "sameAs": "https://github.com/mikeselander",
  "sameAs": "https://profiles.wordpress.org/mikeselander",
  "colleague": [
    "http://oldtownmediainc.com/staff/vallene-kailburn/",
    "http://oldtownmediainc.com/staff/miles-kailburn/",
    "http://oldtownmediainc.com/staff/kerrie-luginbill/",
    "http://oldtownmediainc.com/staff/ryan-mckenna/",
    "http://oldtownmediainc.com/staff/brianne-witt/",
	"http://oldtownmediainc.com/staff/cassidy-lundmark/",
  ]
}
</script>

<?php wp_head() ?>

<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/ie8.css" />
<![endif]-->

</head>

<body <?php body_class(); ?>>

    <header>

    <div class="header">

	    <a id="menu-toggle" href="#mobile-nav" class="nav-icon trigger"><span></span></a>

		<img src="<?php echo get_template_directory_uri(); ?>/images/me.png">

		<h2><a href="<?php echo site_url(); ?>">Mike Selander</a></h2>

		<nav>
			<div class="menu">

				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

			</div>
		</nav>

		<p class="social">
			<a href="https://profiles.wordpress.org/mikeselander" target="_blank"><i class="fa fa-wordpress"></i></a>
			<a href="https://github.com/mikeselander" target="_blank"><i class="fa fa-github"></i></a>
			<a href="https://twitter.com/Mike_Selander" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="http://www.linkedin.com/in/mikeselander/" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="mailto:mikeselander@gmail.com"><i class="fa fa-envelope"></i></a>
		</p>

	</div>

	<div class="mobile-header">

		<img src="<?php echo get_template_directory_uri(); ?>/images/me.png">

		<h4><a href="<?php echo site_url(); ?>">Mike Selander</a></h4>

		<a id="menu-toggle" href="#mobile-nav" class="nav-icon trigger"><span></span></a>

	</div>

    </header>

	<?php
		if ( get_the_post_thumbnail() != '' && !is_single() ){
        	echo '<div class="banner container">';
	        	the_post_thumbnail();
	        echo "</div>";

        }
	?>
