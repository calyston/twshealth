<?php 
/**
 * 	Template Name: About Page
*/
get_header();?>

<!-- About Page -->
<section class="page-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<section class="about-page">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<a href="https://twshealth.youcanbook.me/" target="blank"><button class="main-button cta-button"">Book A Call</button></a>
		</section>

		<?php endwhile; ?>

		<?php else : ?>
			<section class="about-page">
				<h1>Oops! Looks like this page doesn't exist...</h1>
				<p><a href="https://tws.health">Back To Home</a></p>
    </section>
	<?php endif; ?>
</section>

<?php get_footer(); ?>