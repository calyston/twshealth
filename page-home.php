<?php 
/**
 * 	Template Name: Home Page
*/

get_header(); ?>

<!-- Homepage -->

<!-- Hero Banner -->
<div id="hero-home" class="hero-home">
  <div class="page-title-container-home">
		<h1>Bring Balance<br>To Your Being</h1>
		<h3>Make subtle changes to your diet and lifestyle habits and experience the amazing results in your mood, energy and body!</h3>
		<a href="https://twshealth.youcanbook.me/" target="blank"><button class="get-started">Get Started</button></a>
  </div>
</div>

<!-- Homepage Content -->
<section class="page-content">
	<section class="homepage">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
				<!-- <button class="main-button">Read More</button> -->

			<?php endwhile;?>
		<?php else : ?>
			<article class="post error">
				<h1 class="404">Nothing has been posted like that yet</h1>
			</article>
		<?php endif; ?>
	</section>
</section>
<section class="cta-footer">
  <div>
    <img src="https://tws.health/wp-content/uploads/2022/01/bookacall-scaled.jpeg">
    <a href="https://twshealth.youcanbook.me/" target="blank"><button class="main-button cta-button"">Book A Call</button></a>
    <p>Let's have a discussion to see what your goals are and how I can help get you there. Completely free, no obligation.</p>
  </div>
</section>

<?php get_footer();  ?>