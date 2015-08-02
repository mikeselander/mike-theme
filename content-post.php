<?php

$classes = get_post_class( 'blog content' );
foreach ( $classes as $class ){
	$theclasses .= $class . " ";
}

$link_url = get_classes_and_parse_for_links_format( $classes );

echo "<article class='$theclasses'>";

	echo "<header>";
    	echo "<h2><a href='$link_url'>".get_the_title()."</a></h2>";
    echo "</header>";

    $cat = get_the_category();

    echo "<p>
    	<time datetime='".get_the_time('Y-m-d')."' pubdate='pubdate'>".get_the_time('l, F j, Y')."</time>
    	in <a href='".get_category_link( $cat[0] )."'>".$cat[0]->cat_name."</a>
    	</p>";

    the_post_thumbnail();

    echo apply_filters( 'the_content', wp_trim_words( get_the_content(), '75' ) );

	echo "<a href='$link_url' class='button' role='button'>Read More</a>";

echo "</article>";

?>