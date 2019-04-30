<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://use.typekit.net/ojw6ats.css">
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#343434">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#fbfbfb">
	<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<?php
    $overlaycolor = get_field("overlay-color");
    $overlayopacity = get_field("overlay-opacity") ?? '0.8';
    if ($overlaycolor) : ?>
	<style>
	.image-filters-enabled .site-header.featured-image .site-featured-image:before {
		background: <?php echo $overlaycolor ?>;
	}
	.image-filters-enabled .site-header.featured-image .site-featured-image:after {
		background: <?php echo $overlaycolor ?>;
		opacity: <?php echo $overlayopacity ?>!important;
	}
	</style>
	<?php endif	?>
	
	
</head>

<body <?php body_class(); ?>>
<header role="banner" class="header maxi">
   <div class="container">
      <div class="top-header">
		  <div class="left">
			<a class="logo ajax" href="<?php echo esc_url(home_url('/')); ?>">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 900 100" >
					<g>
						<path class="color-black" d="M119.83,43.87c-2.85-2.38-6.5-3.97-10.31-3.97c-2.85,0-6.66,1.67-6.66,5c0,3.49,4.2,4.84,6.9,5.71l3.97,1.19
							c8.33,2.46,14.75,6.66,14.75,16.34c0,5.95-1.43,12.05-6.18,16.1c-4.68,3.96-10.94,5.63-16.97,5.63c-7.53,0-14.91-2.54-21.01-6.82
							l6.66-12.53c3.88,3.41,8.48,6.18,13.8,6.18c3.65,0,7.53-1.82,7.53-6.03c0-4.36-6.1-5.87-9.44-6.82
							c-9.75-2.78-16.18-5.31-16.18-16.89c0-12.13,8.64-20.06,20.62-20.06c6.03,0,13.4,1.9,18.71,4.92L119.83,43.87z"/>
						<path class="color-black" d="M155.75,88.27h-15.54V41.65h-12.84V28.48h41.23v13.16h-12.84V88.27z"/>
						<path class="color-black" d="M185.88,41.65v9.99h17.52V64.8h-17.52v10.31h18.48v13.16h-34.02V28.48h34.02v13.16H185.88z M183.5,24.84l-6.42-4.68
							l11.18-13.64l8.8,6.34L183.5,24.84z"/>
						<path class="color-black" d="M210.06,28.48h23.79c12.84,0,21.73,5.95,21.73,19.67c0,14.11-7.61,20.3-21.17,20.3h-8.8v19.82h-15.54V28.48z M225.6,55.92
							h2.62c5.63,0,11.18,0,11.18-7.29c0-7.53-5.15-7.61-11.18-7.61h-2.62V55.92z"/>
						<path class="color-black" d="M296.57,51.56V28.48h15.54v59.79h-15.54v-24.5h-22.44v24.5h-15.54V28.48h15.54v23.08H296.57z"/>
						<path class="color-black" d="M333.52,77.89l-4.12,10.39H312.9l22.99-59.79h16.97l22.52,59.79h-16.57l-3.89-10.39H333.52z M344.38,46.96h-0.16
							l-6.42,19.03h12.92L344.38,46.96z"/>
						<path class="color-black" d="M376.33,28.48h15.54l28.47,36.56h0.16V28.48h15.54v59.79H420.5l-28.47-36.63h-0.16v36.63h-15.54V28.48z"/>
						<path class="color-black" d="M457.77,41.65v9.99h17.52V64.8h-17.52v10.31h18.48v13.16h-34.02V28.48h34.02v13.16H457.77z"/>
						<path class="color-black" d="M505.26,88.27V28.48h22.2c10.63,0,17.76,4.12,17.76,15.54c0,5.39-1.74,9.75-6.58,12.21v0.16
							c8.56,1.11,12.21,6.9,12.21,15.22c0,12.53-10.71,16.65-21.65,16.65H505.26z M520.8,51.96h1.74c4.12,0,8.41-0.71,8.41-5.79
							c0-5.47-4.84-5.79-9.04-5.79h-1.11V51.96z M520.8,76.38h1.98c4.6,0,12.37,0.24,12.37-6.34c0-7.22-7.69-6.5-12.77-6.5h-1.59V76.38z"
							/>
						<path class="color-black" d="M604.77,88.27h-19.35l-14.67-23h-0.16v23h-15.54V28.48h23.23c11.81,0,20.78,5.63,20.78,18.4c0,8.25-4.6,15.38-13.08,16.89
							L604.77,88.27z M570.59,55.29h1.51c5.07,0,10.78-0.95,10.78-7.45c0-6.5-5.71-7.45-10.78-7.45h-1.51V55.29z"/>
						<path class="color-black" d="M668.12,57.27c0,19.35-13.88,32.99-33.07,32.99c-19.19,0-33.07-13.64-33.07-32.99c0-18.08,15.86-30.77,33.07-30.77
							S668.12,39.19,668.12,57.27z M618.17,57.35c0,10.31,7.61,17.84,16.89,17.84s16.89-7.53,16.89-17.84c0-8.25-7.61-15.78-16.89-15.78
							S618.17,49.1,618.17,57.35z"/>
						<path class="color-black" d="M722.6,92l-4.76-5.63c-4.6,2.78-9.99,3.89-16.41,3.89c-19.19,0-33.07-13.64-33.07-32.99c0-18.08,15.86-30.77,33.07-30.77
							c18.63,0,33.06,12.61,33.06,32.03c0,7.93-2.69,14.83-7.69,21.01l10.07,10.23L722.6,92z M715.54,67.42c1.82-2.54,2.77-5.79,2.77-8.8
							c0-8.96-7.45-17.05-16.81-17.05c-9.28,0-16.97,7.53-16.97,15.78c0,10.31,7.69,17.84,16.97,17.84c1.59,0,3.17-0.24,4.76-0.79
							l-9.6-9.52l14.67-1.82L715.54,67.42z"/>
						<path class="color-black" d="M789.6,28.48v33.62c0,7.69-0.32,15.3-6.27,21.09c-5,4.92-12.85,6.66-19.82,6.66c-6.98,0-14.83-1.74-19.82-6.66
							c-5.95-5.79-6.27-13.4-6.27-21.09V28.48h15.54v31.48c0,7.77,0.55,16.25,10.55,16.25c9.99,0,10.54-8.48,10.54-16.25V28.48H789.6z"/>
						<path class="color-black" d="M811,41.65v9.99h17.52V64.8H811v10.31h18.48v13.16h-34.02V28.48h34.02v13.16H811z"/>
						<path class="color-black" d="M858.97,88.27h-15.54V41.65h-12.85V28.48h41.24v13.16h-12.85V88.27z"/>
					</g>
					<rect class="color-black" x="12" y="28.4" width="65.48" height="59.7"/>
				</svg>
			</a>
		  </div>
		  <div class="right">
		  	<button type="button" class="hamburger caf" id='hamburger'> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="sr">Toggle navigation</span> </button> 
			<?php if (has_nav_menu('menu-1')) : ?>
			<nav class="collapse navbar-collapse" aria-label="<?php esc_attr_e('Top Menu', 'themebroquet'); ?>">
				<?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_class'     => 'nav navbar-nav',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    )
                );
                ?>
			</nav><!-- #site-navigation -->
			<?php endif; ?>
		  </div>
      </div>
   </div>
</header>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'themebroquet'); ?></a>
	<?php if (is_singular() && !is_front_page()) : ?>
		<div id="masthead" class="site-header featured-image">
				<div class="site-featured-image">
					<?php
                        themebroquet_post_thumbnail();
                        the_post();
                        $discussion = ! is_page() && themebroquet_can_show_post_thumbnail() ? themebroquet_get_discussion_data() : null;

                        $classes = 'entry-header';
                    if (! empty($discussion) && absint($discussion->responses) > 0) {
                        $classes = 'entry-header has-discussion';
                    }
                    ?>
					<div class="container <?php echo $classes; ?>">
						<?php get_template_part('template-parts/header/entry', 'header'); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			
		</div><!-- #masthead -->
		<?php endif; ?>
	<div id="content" class="site-content">
