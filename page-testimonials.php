<?php 
/**
 * 	Template Name: Testimonials Page
*/
get_header();?>

<!-- Testimonials Page -->

<!-- Hero Banner -->
<div class="hero-testimonials">
  <div class="page-title-container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<section class="page-content">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

  <section class="testimonials-page-content">
    <?php the_content(); ?>
  </section>

	<?php endwhile; ?>

	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
<?php endif; ?>
  </section>

<?php get_footer(); ?>