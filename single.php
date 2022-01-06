<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); ?>

<!-- Single Post -->

<section class="page-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="post">
				<h1><?php the_title(); ?></h1>
				<p class="post-date"><?php the_time('l jS F Y'); ?></p>
				<div class="post-content">
					<img src=<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>
			</article>
		<?php endwhile; ?>

		<?php else : ?>
			<article class="post error">
				<h1 class="404">Nothing has been posted like that yet</h1>
			</article>
	<?php endif; ?>
</section>

<?php get_footer(); ?>
