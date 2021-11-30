<?php 
/**
 * 	Template Name: Free Workout Plan Page
*/
get_header();?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<!-- Intro -->
	<section class="fwp intro">
			<img src="https://tws.health/wp-content/uploads/2021/11/landing-page-1.jpeg" alt="workout-results"/>
			<div>
				<h2>Discover The Fast & Effective Way To Enjoy More Strength, Energy And
					Vitality In Your Life... Starting Today!</h2>
				<p>(Even if you’re stretched for time or don't know where to begin)</p>
				<a href="https://view.flodesk.com/pages/61a68146aadf79eb40035343"><button class="main-button">Get Free Workout Plan</button></a>
			</div>
    </section>

		<!-- What You'll Learn -->
    <section class="fwp learn">
			<img src="https://tws.health/wp-content/uploads/2021/11/landing-page-2-scaled.jpeg" alt="weights">
			<div>
				<h2>Here’s What You’ll Learn...</h2>
				<ul>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>How to master the art of quick workouts to lose fat in as little as 4 weeks!
				</li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>The quick and efficient way to get strong and lean – it works so well you’ll think
					it's magic!</li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>You’ll discover the ridiculously easy way to implement exercise into your
					schedule – even if you can’t tell a kettle from a kettlebell!
				</li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>How to quickly recognize and avoid inefficient exercises!</li>
				<li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>Why it’s NOT your fault if you're not seeing fast results – and what you can do
					starting today to achieve your fitness goals!</li>
				</ul>
			</div>
    </section>

		<!-- Meet Tim -->
    <section class="fwp tim">
			<img src="https://tws.health/wp-content/uploads/2021/11/landing-page-3-scaled.jpeg" alt="healthy-eating">
			<div>
				<h2>Meet Tim...</h2>
				<p>Timothy Williams-Silvera is a nutrition and weight management specialist and has
					helped multiple clients reach their individual weight loss targets and total life
					transformation.</p>
				<p>For the past year, Tim has been helping working professionals that were pressed for
					time and struggling to lose weight unlock the secret to long term results - maintaining
					a healthy diet and lifestyle, creating a life they’re truly excited about.</p>
				<p>In this life-changing FREE programme, Tim will guide you through the PROVEN method
					to unlock the body you want... without spending all of your time and money on
					working out and meal prep.</p>
				<p>This essential plan has helped many professionals worldwide, and is yours to
					download free below...</p>
			</div>
    </section>

		<section class="get-plan">
			<a href="https://view.flodesk.com/pages/61a68146aadf79eb40035343"><button class="main-button">Get Free Workout Plan</button></a>	
		</section>

	<?php endwhile; ?>

	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
<?php endif; ?>

<?php get_footer(); ?>