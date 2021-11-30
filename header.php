<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php ?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body 
	<?php body_class(); ?>>
	<header>
		<?php if (is_page(array('free-workout-plan', 'coming-soon', 'subscribed'))) { ?>
			<nav>
				<img id="logo" src="https://tws.health/wp-content/uploads/2021/11/logo.png" alt="logo">
			</nav>
		<?php } else { ?>
			<nav>
				<img id="logo" src="https://tws.health/wp-content/uploads/2021/11/logo.png" alt="logo">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			;?>
			<?php } ?>
</header>

<main>
