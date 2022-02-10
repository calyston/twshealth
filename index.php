<?php
/**
 * Template Name: Knowledge Hub Blog
 */

get_header(); ?>

<!-- Knowledge Hub Page -->
<section class="page-content">
  <section class="knowledge-hub-page">
	<h1>Knowledge Hub</h1>
	
    <!-- Knowledge Hub Posts -->
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article class="knowledge-hub-post">
          <img src=<?php the_post_thumbnail(); ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink();?>"><button class="main-button">Read More</button></a>
        </article>
    </section>

	<?php endwhile;  ?>

	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
	<?php endif; ?>

<?php get_footer(); ?>