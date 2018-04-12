<?php 

// Template Name: blog post

?>

<?php get_header(); ?>

	<main role="main">

			<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

			<?php endif; ?>
	</main>

<?php get_footer(); ?>