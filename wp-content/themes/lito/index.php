<?php get_header(); 
	if ( have_posts() ) :
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content();
				echo "<hr>";

			endwhile;

			// If no content, include the "No posts found" template.
		else :
			echo "nu exista postari";
		endif;
		?>
	<?php get_footer(); ?>
