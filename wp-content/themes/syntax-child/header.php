<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Syntax
 */

$facebook = get_theme_mod( 'jetpack-facebook' );
$twitter  = get_theme_mod( 'jetpack-twitter' );
$tumblr   = get_theme_mod( 'jetpack-tumblr' );
$linkedin = get_theme_mod( 'jetpack-linkedin' );
$google   = get_theme_mod( 'jetpack-google_plus' );
$path     = get_theme_mod( 'jetpack-path' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>DataLook | Blog <?php //wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="//use.typekit.net/aiq0hlt.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link rel='stylesheet' id='bootstrap-style-css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' type='text/css' media='all' />
<style type="text/css">

</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="header" role="banner">
			<div class="nav-module header-logo">
				<h1 class="logo logo-image">
					<a href="/">
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/syntax-child/images/logo-datalook.svg" alt="DataLook">
					</a>
				</h1>
			</div>
		  <div class="nav-module">
			</div>
		  <div class="nav-module header-menu">
				<strong>Blog</strong> | <a href="http://datalook.io" style="text-decoration: none;">Home</a>
        | <a href="http://datalook.io/about" style="text-decoration: none;">About</a>
			</div>
	</header><!-- #masthead -->
	<!-- Begin MailChimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

	<div id="mc_embed_signup" class="mc_embed_signup">
		<div class="content-area">
			<form action="//datalook.us9.list-manage.com/subscribe/post?u=4aa126af9096681d9931557cf&amp;id=dabaf9c94f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="newsletter-dl mc-field-group" style="">
						<div class="row">
							<div class="col-md-5">
								<label for="mce-EMAIL" style="display:inline-block; text-align:center; width:100%; line-height:32px; ">Get news about Data for Good</label>
							</div>
							<div class="col-md-5">
								<input type="email" value="" name="EMAIL" placeholder="Your email" class="required email" id="mce-EMAIL" style="height:32px; padding:0px; border-radius:0px; ">
							</div>
							<div class="col-md-2">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button email-button email-button-dl" style="background-color:#8cc2d9; padding:0px; height:32px; border-radius:0px;">
							</div>
						</div>
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none">Hmm, an error occured...</div>
						<div class="response" id="mce-success-response" style="display:none">Thanks for subscribing!</div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;">
						<input type="text" name="b_4aa126af9096681d9931557cf_dabaf9c94f" tabindex="-1" value="">
					</div>
				</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	</div>
	<!--End mc_embed_signup-->
	<div id="main" class="site-main">
		<h1 id="toggle-nav" class="menu-toggle"><span class="screen-reader-text"><?php _e( 'Menu', 'syntax' ); ?></span></h1>
		<nav id="site-navigation" class="navigation-main" role="navigation">
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'syntax' ); ?>"><?php _e( 'Skip to content', 'syntax' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

