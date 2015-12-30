<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bowie_Tutoring
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<!-- Favicon Business -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,700italic|Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a href="http://bowiereading.com/" alt="Back to Bowie Center" id="back-to-bowie-link">
		<div id="back-to-bowie">
			Click to Return to The Bowie Center's Main Website
		</div>
	</a>
	<header id="masthead" class="site-header" role="banner">
		<div class="container header-copy">
			<div class="row">
				<div class="col-sm-8">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<h2 class="site-description"><small><?php echo $description; /* WPCS: xss ok. */ ?></small></h2>
					<?php endif; ?>
					<div id="mission-statement">
						<p>Personalized Education for the Individual Learner</p>
					</div>
				</div>
				<div class="col-sm-4 hidden-xs">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive">
				</div>
			</div><!-- .row -->
		</div><!-- .container -->

		<nav id="site-navigation" class="navbar" role="navigation">
			<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navigation">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
				<?php wp_nav_menu( array(
	          'menu'              => 'primary',
	          'theme_location'    => 'primary',
	          'depth'             => 2,
	          'container'         => 'div',
	          'container_class'   => 'collapse navbar-collapse',
	  				'container_id'      => 'primary-navigation',
	          'menu_class'        => 'nav navbar-nav',
	          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	          'walker'            => new wp_bootstrap_navwalker())
	        );
	      ?>
    	</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="container">
