<?php

/**
 * Template Name: Home Page
 *
 * @package Customer-Blvd
 *
 */

get_header(); 

?>

<div id="primary">

	<div id="content" role="main">
		
		<div class="hero">
			<div class="container ">
				<h1 class="notop"><?php the_field('hero_headline'); ?></h1>
				<p class="lead "><?php the_field('hero_description'); ?></p>
				<a class="waves-effect waves-light btn-large"><?php the_field('hero_button'); ?></a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<h2><?php the_field('process_headline'); ?></h2>


				<?php if( have_rows('process_info') ): ?>

					<ul class="process-steps">

						<?php while( have_rows('process_info') ): the_row(); 

					// vars
						$image = get_sub_field('process_image');
						$name = get_sub_field('process_name');
						$description = get_sub_field('process_description');

						?>

						<div class="col s12 m4">
							<div class="card">
								<div class="card-image icon-image waves-effect waves-block waves-light">
									<div class="valign-wrapper">
										<i class="activator valign fa fa-4x <?php echo $image; ?>"></i>
									</div>
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4"><?php echo $name; ?> <i class="mdi-navigation-more-vert right"></i></span>

								</div> 
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4"><?php echo $name; ?> <i class="mdi-navigation-close right"></i></span>
									<p><?php echo $description; ?></p>
								</div>
							</div>

						</div>



					<?php endwhile; ?>

				</ul>

			<?php endif; ?>


			<p><?php the_content(); ?></p>



		</div>
	</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>