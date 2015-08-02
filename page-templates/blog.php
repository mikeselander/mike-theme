<?php
/*
Template Name: Blog
*/

get_header(); ?>

<div <?php post_class('container'); ?>>
	<main>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post();

		echo "<header class='content'>";
	        echo "<h1>".get_the_title()."</h1>";
		echo "</header>";

        the_content();

        endwhile;

        rewind_posts();

        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query( array(
        	'showposts'	=> 5,
        	'paged'		=> $paged
        ) );

    	while (have_posts()) : the_post();

			get_template_part( 'content', 'post' );

        endwhile;

        otm_paging_nav();

        wp_reset_query(); ?>

	</main>
</div>

<?php get_footer(); ?>