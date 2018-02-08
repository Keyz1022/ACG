<?php
/* *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */

if ( isset( $_SERVER['HTTP_USER_AGENT'] ) && (strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE' ) !== false) ) { header( 'X-UA-Compatible: IE=edge,chrome=1' );
} ?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="<?php echo of_get_option( 'nav_bg_color' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
<div id="page" class="hfeed site">
	<div class="row">
		<header id="masthead" class="site-header" role="banner">
			<nav class="navbar navbar-default" <?php if ( of_get_option( 'sticky_header' ) ) { echo 'navbar-fixed-top';} ?>" role="navigation">
					<div class="container">
					<div class="site-navigation-inner">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div id="logo">
							    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							        <img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" style="height: 60px;">
							    </a>
							</div><!-- end of #logo -->
						</div>
						<div>
							<div class="topWrap">
								<div class="languages"> 
					                <div class="Module Module-136">
					                	<ul class="language">
					                        <li class="active">
					                            <a href="" title="Tiếng Việt">
					                                <img src="https://acgvietnam.com.vn/wp-content/themes/acg-theme/images/vn.gif" alt="Tiếng Việt">
					                            </a>
					                        </li>
					                        <li>
					                            <a href="https://acgvietnam.com.vn/?page_id=599" title="English">
					                                <img src="https://acgvietnam.com.vn/wp-content/themes/acg-theme/images/us.gif" alt="English">
					                            </a>
					                        </li>
					                    </ul>
					                </div>
					            </div>
					        </div>
			                <div id="menu">
			                <?php sparkling_header_menu(); // main navigation ?>
			                </div>	
	            		</div>
            		</div>
						<!-- <div id="md-menu" class="col col-xs-12 col-md-12 md-menu"></div> -->
				</div>
			</nav><!-- .site-navigation -->
		</header><!-- #masthead -->
	</div>

<div id="content" class="site-content">

		<div class="top-section">
			<?php sparkling_featured_slider(); ?>
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container-fluid main-content-area">
			<?php $layout_class = get_layout_class(); ?>
			<div class="row <?php echo $layout_class; ?>">  
				<div class="main-content-inner"><!--  <?php echo sparkling_main_content_bootstrap_classes(); ?> -->