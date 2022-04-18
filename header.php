<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stsp2021
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <link rel="image_src" href="./assets/link_thumbnail.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/site.css'; ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stsp2021' ); ?></a>
	<div class="social-header">
		<div class="container">
			<!-- <div class="row pt-2 pb-2 justify-content-end">
				<div class="col-auto">
					<input type="text" placeholder="搜尋關鍵字" />
				</div>
				<div class="col-auto">
					<a href="https://www.youtube.com/watch?v=smcPi9eupuE" target="_blank" class="d-inline-block">
						<span class="icon d-inline-block"><img src="<?php echo get_template_directory_uri().'/assets/ic_yt.png'; ?>"/></span>
						Youtube
					</a>
					
				</div>
				<div class="col-auto">
					<a href="https://www.facebook.com/stsp543/?ref=page_internal" target="_blank" class="d-inline-block">
						<span class="icon d-inline-block"><img src="<?php echo get_template_directory_uri().'/assets/ic_fb.png'; ?>"/></span>
						官方粉專
					</a>
				</div>
			</div> -->
		</div>
	</div>
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-auto">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="d-inline-block">
					<div class="site-branding">
						<img src="<?php echo get_template_directory_uri().'/assets/img_site_logo.png'; ?>" style="width: 100px;"/>
					</div><!-- .site-branding -->
				</a>
				</div>
		
				<div class="col">
					<nav id="site-navigation" class="main-navigation">
						<div class="d-inline-block d-lg-none">
							<a href="https://www.facebook.com/stsp543/?ref=page_internal" target="_blank" class="mx-2 d-lg-none d-inline-block">
								<span class="icon d-inline-block"><img src="<?php echo get_template_directory_uri().'/assets/ic_fb.png'; ?>"/></span>
							</a>
							<a href="https://www.youtube.com/channel/UCMhZSdgRIa26xxWF-PMk61g/videos" target="_blank" class="mx-2 d-lg-none d-inline-block">
								<span class="icon d-inline-block"><img src="<?php echo get_template_directory_uri().'/assets/ic_yt.png'; ?>"/></span>
							</a>
							<span class="mobile-menu-button open">
								<img src="<?php echo get_template_directory_uri().'/assets/ic_menu.png'; ?>"/>
							</span>
							<span class="mobile-menu-button close d-none">
								<img src="<?php echo get_template_directory_uri().'/assets/ic_close.png'; ?>"/>
							</span>
							<div class="mobile-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'mobile-menu',
									)
								);
								?>
							</div>
						</div>
						<div class="d-none d-lg-inline-block">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</div>
						
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-auto d-none d-lg-inline-block">
					<a href="https://www.youtube.com/watch?v=smcPi9eupuE" target="_blank" class="d-inline-block">
						<span class="icon d-inline-block"><img src="<?php echo get_template_directory_uri().'/assets/ic_yt.png'; ?>"/></span>
					</a>
					
				</div>
				<div class="col-auto d-none d-lg-inline-block">
					<a href="https://www.facebook.com/stsp543/?ref=page_internal" target="_blank" class="d-inline-block">
						<span class="icon d-inline-block"><img src="<?php echo get_template_directory_uri().'/assets/ic_fb.png'; ?>"/></span>
					</a>
				</div>
		</div>
		</div>
	</header><!-- #masthead -->
	<div class="side-menu">
		<a href="https://www.facebook.com/stsp543/?ref=page_internal" target="_blank" class="mb-3 d-inline-block icon">
		<img src="<?php echo get_template_directory_uri().'/assets/ic_fb.png'; ?>"/>
		</a>
		<a href="#" class="d-inline-block icon">
		<img src="<?php echo get_template_directory_uri().'/assets/ic_to_top.png'; ?>"/>
		</a>
	</div>
