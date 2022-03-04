<?php
/**
 * Template Name: Knowledge Hub Blog
 */

get_header(); ?>

<!-- Knowledge Hub Page -->
<section class="page-content">
  <section class="knowledge-hub-page">	
    <!-- Knowledge Hub Posts -->
    <?php if ( have_posts() ) : ?>
      <h1>Knowledge Hub</h1>
      <?php while ( have_posts() ) : the_post(); ?>
        <article class="knowledge-hub-post">
          <?php the_post_thumbnail(); ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink();?>"><button class="main-button">Read More</button></a>
        </article>
    </section>

	<?php endwhile;  ?>

	<?php else : ?>
		<section class="about-page">
			<h1>Oops! Looks like this page doesn't exist...</h1>
      <p><a href="https://tws.health">Back To Home</a></p>
    </section>
	<?php endif; ?>

<?php get_footer(); ?>