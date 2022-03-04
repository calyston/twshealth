<?php
/**
 * The template for displaying any single page.
 *
 */

get_header(); ?>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
						<h1 class="title"><?php the_title(); ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div>
						
					</article>

				<?php endwhile; ?>

			<?php else : ?>
				<section class="about-page">
					<h1>Oops! Looks like this page doesn't exist...</h1>
					<p><a href="https://tws.health">Back To Home</a></p>
    		</section>
			<?php endif;?>

		</div>
	</div>
<?php get_footer();?>