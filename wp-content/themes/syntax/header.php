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
<title>Data for Good | Blog <?php //wp_title( '|', true, 'right' ); ?></title>
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
	<header id="masthead" class="site-header" role="banner">
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
		<?php endif; // End header image check. ?>
		<div class="site-header-wrapper">

			<div class="site-branding" style="display:inline">
<a class="site-logo-link" href="http://dataforgood.co" style="vertical-align:middle">
<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/syntax/images/logo.jpg" />
 <!--svg width="161" height="24" style="vertical-align:-webkit-baseline-middle">
    <image xlink:href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/syntax/images/logo.svg" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/syntax/images/logo.jpg" width="161" height="24"/>
</svg--></a>
				<h1 class="site-title" style="vertical-align:inherit"><a  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
			</div>
			<?php if ( $facebook || $twitter || $tumblr || $linkedin || $google || $path || true) : ?>
				<div class="social-links" style="display:inline">
				<?php if ( $facebook ) : ?>
					<a href="<?php echo esc_url( $facebook ); ?>" class="facebook-link">
						<span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'syntax' ); ?></span>
					</a>
				<?php endif; ?>
				<?php if ( $google ) : ?>
					<a href="<?php echo esc_url( $google ); ?>" class="google-link">
						<span class="screen-reader-text"><?php esc_html_e( 'Google+', 'syntax' ); ?></span>
					</a>
				<?php endif; ?>
				<?php if ( $linkedin ) : ?>
					<a href="<?php echo esc_url( $linkedin ); ?>" class="linkedin-link">
						<span class="screen-reader-text"><?php esc_html_e( 'LinkedIn', 'syntax' ); ?></span>
					</a>
				<?php endif; ?>
				<?php if ( $path ) : ?>
					<a href="<?php echo esc_url( $path ); ?>" class="path-link">
						<span class="screen-reader-text"><?php esc_html_e( 'Path', 'syntax' ); ?></span>
					</a>
				<?php endif; ?>
				<?php if ( $twitter || true) : ?>

       <a href="https://twitter.com/opendataforgood" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @OpenDataForGood</a>
       <span class="twitter-script"><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></span>
				<?php endif; ?>
				<?php if ( $tumblr) : ?>
					<a href="<?php echo esc_url( $tumblr ); ?>" class="tumblr-link" >
						<span class="screen-reader-text"><?php esc_html_e( 'Tumblr', 'syntax' ); ?></span>
					</a>
				<?php endif; ?>
					</div>
			<?php endif; ?>


    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<hr style="clear:both; margin 0 auto; background-color: #444444; height:1px; margin-bottom: 0px"/>

		<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
	<div class="content-area">
		<form action="//dataforgood.us8.list-manage.com/subscribe/post?u=eafab9a0bb1bde69073468637&amp;id=9d821967b1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    		<div id="mc_embed_signup_scroll">
				<div class="mc-field-group" style="background-color: #f2f2f2; padding: 10px; padding-top:20px; border-radius: 5px;margin-top:10px">
	  				<div class="row">
	      				<div class="col-md-5">
	        				<label for="mce-EMAIL" style="display:inline-block; text-align:center; width:100%; line-height:32px; ">Get news about Data for Good</label>
	      				</div>
	      				<div class="col-md-5">
	        				<input type="email" value="" name="EMAIL" placeholder="Your email" class="required email" id="mce-EMAIL" style="height:32px; padding:0px; ">
	      				</div>
	      				<div class="col-md-2">
	          				<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button email-button" style="background-color:#8cc2d9; padding:0px; height:32px">
	      				</div>
	  				</div>
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none">Hmm, an error occured...</div>
					<div class="response" id="mce-success-response" style="display:none">Thanks for subscribing!</div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    		<div style="position: absolute; left: -5000px;">
	    			<input type="text" name="b_eafab9a0bb1bde69073468637_9d821967b1" tabindex="-1" value="">
	    		</div>
	    	</div>
		</form>
	</div>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</div>
<!--End mc_embed_signup-->

	</header><!-- #masthead -->
	<div id="main" class="site-main">
		<h1 id="toggle-nav" class="menu-toggle"><span class="screen-reader-text"><?php _e( 'Menu', 'syntax' ); ?></span></h1>
		<nav id="site-navigation" class="navigation-main" role="navigation">
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'syntax' ); ?>"><?php _e( 'Skip to content', 'syntax' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

