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
		<div class=" hero-image">
			<div class="hero-overlay ">
				<div class="container hero ">
					<h1 class="hero-cta"><?php the_field('hero_headline'); ?></h1>
					<p class="lead "><?php the_field('hero_description'); ?></p>
					
					<a class="valign waves-effect waves-light btn-cta btn-large"><?php the_field('hero_button'); ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="valign-wrapper">
				<h2 class="valign hero-headline"><?php the_field('process_headline'); ?></h2>
			</div>

			<h3><?php the_field('process_summary'); ?></h3>
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
									<i class="activator valign icon-4x <?php echo $image; ?>"></i>
								</div>
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4"><?php echo $name; ?> <i class="mdi-navigation-more-vert right"></i></span>

							</div> 
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4"><?php echo $name; ?> <i class="mdi-navigation-close right"></i></span>
								<p class="card-description"><?php echo $description; ?></p>
							</div>
						</div>

					</div>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>

	</div>

</div><!-- #content -->

<div class="hero-solid">
	<div class="container hero">
	<h2 class="white-text"><?php the_field('hero_quote') ?></h2>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col s12 m12">
			<h2><?php the_field('service_headline'); ?></h2>
		</div>

		<?php if( have_rows('pricing_table') ): ?>

			<?php while( have_rows('pricing_table') ): the_row(); 

						// vars
			$cardTitle = get_sub_field('card_title');
			$cardPrice = get_sub_field('card_price');
			$cardDescription = get_sub_field('card_description');

			?>
			<div class="col s12 m4">
				<div class="card-panel">
					<div class="card-content">
						<h4 class="notop price-title"><?php echo $cardTitle; ?></h4>
						<span class="card-price"><?php echo $cardPrice; ?></span>
						<p class="card-description"><?php echo $cardDescription; ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<div class="col s12 m12">
		<h4><?php the_field('customer_service'); ?></h4>
	</div>



</div>

</div>
<div class="hero-solid">
	<div class="container hero">
		<div class="card-panel">
			<p><?php the_content(); ?></p>
		</div>
	</div>
</div>




</div><!-- #primary -->

<?php get_footer(); ?>