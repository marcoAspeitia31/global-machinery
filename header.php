<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Global_Machinery
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
<!--====== Start Preloader ======-->
<div class="preloader">
	<div class="lds-ellipsis">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<!--====== End Preloader ======-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'global-machinery' ); ?></a>
	<!--====== Start Header ======-->
	<header id="masthead" class="header-area header-area-v1 site-header">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="top-left">
							<ul>
								<li><span><i class="flaticon-factory"></i> We work with global industries!</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="top-right">
							<ul class="social-link">
								<li><a href="#"><i class="icofont-facebook"></i></a></li>
								<li><a href="#"><i class="icofont-twitter"></i></a></li>
								<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								<li><a href="#"><i class="icofont-skype"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-navigation">
			<div class="nav-container">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3 logo-col col-6">
							<div class="site-branding">
								<div class="brand-logo">
									<a href="<?php esc_attr( esc_url( home_url( '/' ) ) );?>"><img src="<?php echo esc_attr( esc_url( get_template_directory_uri(  ) ) ); ?>/assets/images/logo-global-machinery.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-6">
							<div class="nav-menu">
								<!-- Navbar Close Icon -->
								<div class="navbar-close">
									<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
								</div>
								<nav id="site-navigation" class="main-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</nav>
							</div>
							<!-- Navbar Toggler -->
							<div class="navbar-toggler float-right">
								<span></span><span></span><span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!--====== End Header ======-->
