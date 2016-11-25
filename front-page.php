<?php get_header(); ?>

    <div <?php post_class( 'container' ); ?>>

		<div class="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post();

				echo "<header>";
		            echo "<h1>".esc_html( get_the_title() )."</h1>";
				echo "</header>";

				echo "<h3>";
		            the_content();
		        echo "</h3>";

            endwhile; ?>

		</div>

		<?php

			$query = array(
				'post_type'		 => 'post',
				'posts_per_page' => 3,
				'no_found_rows'  => true,  
			);

			$posts = new WP_Query( $query );

			if ( $posts->have_posts() )	:

				while ( $posts->have_posts() ) : $posts->the_post();

					get_template_part( 'content', 'post' );

				endwhile;

			endif;
		?>

    </div>

<?php get_footer(); ?>
