<?php
/**
 * Template Name: Coming Soon Page
 *
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <section class="coming-soon">
      <img src="https://tws.health/wp-content/uploads/2021/11/logo.png" alt="logo">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </section>
	<?php endwhile; ?>

	<?php else : ?>
				
    <article class="post error">
      <h1 class="404">Nothing posted yet</h1>
    </article>

	<?php endif; ?>