<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>

<div id="primary">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('custom_title'); ?></h1>

			<img src="<?php the_field('hero_image'); ?>" />

			<h2><?php the_field('process_headline'); ?></h2>


			<?php if( have_rows('process_info') ): ?>

				<ul class="process-steps">

					<?php while( have_rows('process_info') ): the_row(); 

					// vars
					$image = get_sub_field('process_image');
					$name = get_sub_field('process_name');
					$description = get_sub_field('process_description');

					?>

					<li class="step">
						<h3><?php echo $name; ?></h3>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<p>	<?php echo $description; ?></p>
					</li>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>


		<p><?php the_content(); ?></p>

	<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>