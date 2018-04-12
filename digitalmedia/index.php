<?php 

// Home

?>

<?php get_header(); ?>

	<?php $landing = true; include 'hero.php'; ?>

	<main role="main">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

			<?php endif; ?>
	</main>

<?php get_footer(); ?>
