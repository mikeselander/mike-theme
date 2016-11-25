<?php get_header(); ?>

    <div <?php post_class( 'container' ); ?>>

		<div class="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post();

				echo "<header>";
		            echo "<h1>" . esc_html( get_the_title() ) . "</h1>";
				echo "</header>";

            endwhile; ?>

		</div>

		<div class="blog">

			<?php the_content(); ?>

		</div>

    </div>

<?php get_footer(); ?>
