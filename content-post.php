<?php

the_post_thumbnail( '', array( 'class' => 'expand' ) );

echo "<div class='blog'>";

	echo "<header>";
    	echo "<h2><a href='" . esc_url( get_permalink() ) . "'>" . esc_html( get_the_title() ) . "</a></h2>";
    echo "</header>";

    $cat = get_the_category();

    echo "<h3>
    	<time datetime='" . esc_attr( get_the_time('Y-m-d') ) . "' pubdate='pubdate'>" . esc_html( get_the_time('l, F j, Y') ) . "</time>
    	in <a href='" . esc_url( get_category_link( $cat[0] ) ) . "'>" . esc_html( $cat[0]->cat_name ) . "</a>
    	</h3>";

    the_content();

echo "</div>";

?>
