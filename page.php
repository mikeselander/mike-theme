<?php get_header(); ?>

    <div <?php post_class('container'); ?>>
        <div class="content">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post();

	            echo "<article>";

	            	echo "<header>";
		                echo "<h1>".get_the_title()."</h1>";
					echo "</header>";

	                the_content();

	             echo "</article>";

			 endwhile; ?>

        </div>

    </div>

<?php get_footer(); ?>