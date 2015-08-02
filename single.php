<?php get_header(); ?>

<?php
$classes = get_post_class('blog content');

if ( in_array( 'post_format-post-format-link', $classes ) ){
	$content = get_the_content();
	$link_string = extract_from_string('<a href=', '/a>', $content);
	$link_bits = explode('"', $link_string);
	foreach( $link_bits as $bit ) {
		if( substr($bit, 0, 1) == '>') $link_text = substr($bit, 1, strlen($bit)-2);
		if( substr($bit, 0, 4) == 'http') $link_url = $bit;
	}
}
?>

    <div <?php post_class('container'); ?>>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post();

	        echo '<div class="content" role="main">';

	        echo "<article>";

	        	echo "</header>";
	                echo "<h1>".get_the_title()."</h1>";
				echo "</header>";

	            the_content();

	        echo "</article>";

	        $cat = get_the_category();

			echo "<p><i>Posted on: ".get_the_time('l, F j, Y')." in <a href='".get_category_link( $cat[0] )."'>".$cat[0]->cat_name."</a></i></p>";

			echo "</div>";

			if ( $link_url ){
				echo "<a href='$link_url'>See More Here</a>";
			}

	        otm_post_nav();

        endwhile; ?>

    </div>

<?php get_footer(); ?>