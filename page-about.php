<?php 
/**
 * 	Template Name: About Page
*/
get_header();?>

<!-- About Page -->

<!-- Hero Banner -->
<div class="hero-about">
  <div class="page-title-container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<section class="page-content">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	
  <?php the_content(); ?>

	<?php endwhile; ?>

	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
<?php endif; ?>
  </section>

<?php get_footer(); ?>