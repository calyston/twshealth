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
				<button class="main-button" onClick='getPlan()'>Get Free Workout Plan</button>
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

		<!-- Contact Form -->
		<!--
		<section id="getPlan">
		<form action="https://health.us5.list-manage.com/subscribe/post?u=0d9ee34e7472722183c711a2f&amp;id=fc9d9887c4" name="myForm" method="post" class="fwp-contact-form" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
		<p class="indicates-required"><span class="asterisk">*</span> indicates required</p>

			<label for="mce-FNAME">First Name <span class="asterisk">*</span> :</label>
			<input type="text" value="" name="FNAME" class="fwp-input" id="mce-FNAME" required>

			<label for="mce-LNAME">Last Name <span class="asterisk">*</span> :</label>
			<input type="text" value="" name="LNAME" class="fwp-input" id="mce-LNAME" required>

			<label for="mce-EMAIL">Email Address <span class="asterisk">*</span> :</label>
			<input type="email" value="" name="EMAIL" class="fwp-input required email" id="mce-EMAIL" required>

			Responses 
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    real people should not fill this in and expect good things - do not remove this or risk form bot signups
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0d9ee34e7472722183c711a2f_fc9d9887c4" tabindex="-1" value=""></div>
				<input type="submit" value="Get Free Workout Plan" name="subscribe" id="mc-embedded-subscribe" class="main-button fwp-submit">
			</form>
		</section> -->

		<!-- Contact Form -->
		<section id="getPlan">
			<div class="ff-61a659aaaadf79eb400352c4" data-ff-el="root" data-ff-version="3" data-ff-type="inline" data-ff-name="ribbonBanner">
  		<div data-ff-el="config" data-ff-config="eyJ0cmlnZ2VyIjp7Im1vZGUiOiJpbW1lZGlhdGVseSIsInZhbHVlIjowfSwib25TdWNjZXNzIjp7Im1vZGUiOiJtZXNzYWdlIiwibWVzc2FnZSI6IiIsInJlZGlyZWN0VXJsIjoiIn0sImNvaSI6dHJ1ZSwic2hvd0ZvclJldHVyblZpc2l0b3JzIjp0cnVlLCJub3RpZmljYXRpb24iOnRydWV9" style="display: none"></div>
  	
    	<form class="fwp-contact-form ff-61a659aaaadf79eb400352c4__form" action="https://form.flodesk.com/forms/61a659aaaadf79eb400352c4/submit" method="post" data-ff-el="form">
				<p class="indicates-required"><span class="asterisk">*</span> indicates required</p>
				<label class="ff-61a659aaaadf79eb400352c4__label fd-form-label">First name <span class="asterisk">*</span> :</label>
        <input class="fwp-input ff-61a659aaaadf79eb400352c4__control fd-form-control" type="text" name="firstName" placeholder="First Name" data-ff-tab="firstName::lastName" required />

				<label class="ff-61a659aaaadf79eb400352c4__label fd-form-label">Last name <span class="asterisk">*</span> :</label>
        <input class="fwp-input ff-61a659aaaadf79eb400352c4__control fd-form-control" type="text" name="lastName" placeholder="Last Name" data-ff-tab="lastName:firstName:email" required />

				<label class="ff-61a659aaaadf79eb400352c4__label fd-form-label">Email <span class="asterisk">*</span> :</label>
        <input class="fwp-input ff-61a659aaaadf79eb400352c4__control fd-form-control" type="text" name="email" placeholder="Email" data-ff-tab="email:lastName:submit" required />

        <input type="text" name="confirm_email_address" style="display: none" />
        
      	<input type="submit" data-ff-el="submit" data-ff-tab="submit" value="Get Free Workout Plan" name="subscribe" id="mc-embedded-subscribe" class="main-button fwp-submit ff-61a659aaaadf79eb400352c4__button fd-btn">

      	<div class="ff-61a659aaaadf79eb400352c4__error fd-form-error" data-ff-el="error"></div>

    	</form>
  		</div>
			</div>
		</section>

	<?php endwhile; ?>

	<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article>
<?php endif; ?>

<?php get_footer(); ?>