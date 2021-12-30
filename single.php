<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); ?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title(); // Display the title of the post ?></h1>
						<div class="post-meta">
							<?php the_time('m.d.Y'); // Display the time it was published ?>
						
						</div>
						
						<div class="the-content">
							<?php the_content(); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags
							?>
							
							<?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
						</div><!-- the-content -->
						
						<div class="meta clearfix">
							<div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
						</div><!-- Meta -->
						
					</article>

				<?php endwhile; ?>
				
				<?php
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; ?>

<?php get_footer(); ?>
