<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Job
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-job' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			
				<nav id="site-navigation" class="main-navigation navbar-expand-lg navbar-light row">
					<div id="top-logo" class="col-lg-3">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$theme_job_description = get_bloginfo( 'description', 'display' );
						if ( $theme_job_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $theme_job_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
        	        </div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
						<span class="navbar-toggler-icon"></span> 
					</button>
					<div class="collapse navbar-collapse col-lg-9" id="navbarSupportedContent">
						<div class="navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'container' => 'ul',
										'menu_id' => 'main-menu',
									'menu_class' => 'nav navbar-nav',
									)
								);
							?>	
						</div>
					</div> 
					
				</nav><!-- #site-navigation -->
			
		</div>
		
	</header><!-- #masthead -->
