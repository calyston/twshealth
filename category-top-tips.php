<?php
/**
 * 	Template Name: Top Tips Page
*/

get_header(); ?>

<!-- Top Tips Category Page -->

<!-- Hero Banner -->
<div class="hero-top-tips">
  <div class="page-title-container">
    <h1>Top Tips</h1>
  </div>
</div>

<section class="page-content">
  <section class="top-tips-page-content">
    <p><?php echo category_description(); ?></p>

    <!-- Top Tips Posts -->
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article class="top-tip-post">
          <img src=<?php the_post_thumbnail(); ?>>
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