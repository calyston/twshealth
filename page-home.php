<?php 
/**
 * 	Template Name: Home Page
*/

get_header(); ?>

<div class="hero-home">
  <div class="page-title-container-home">
    <h1><?php the_title(); ?></h1>
		<h3>I'll help you to make subtle changes to your dietary and lifestyle habits and see the profound effects on your body!</h3>
  </div>
</div>

<section class="page-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<section>
    		<?php the_content(); ?>
				<!-- <button class="main-button">Read More</button> -->
  		</section>

		<?php endwhile;?>
	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>

	<?php endif; ?>
</section>

<?php get_footer();  ?>