<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=487948191255171";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">






<!--

<table border="1" width="100%">
  <tr>
    <th width="60%"></th>
    <th width="10%">
<a href="javascript:var%20d=document,f='http://www.facebook.com/share',l=d.location,e=encodeURIComponent,p='.php?src=bm&v=4&i=1216453911&u='+e('http://tantrafestival.ee/')+'&t='+e('International Tantra Festival');1;try{if%20(!/^(.*\.)?facebook. ^.]*$/.test(l.host))throw(0);share_internal_bookmarklet(p)}catch(z)%20{a=function()%20{if%20(!window.open(f+'r'+p,'sharer','toolbar=0,status=0,resizable=1,width=626,height=436'))l.href=f+p};if%20(/Firefox/.test(navigator .userAgent))setTimeout(a,0);else{a()}}void(0)">
<img src="http://tantrafestival.ee/wp-content/uploads/2013/03/like.png" border="0" width="52" height="21"></a>
    </th>
    <th width="30%"> <a href="http://tantrafestival.ee/et/">EST</a> | <a href="http://tantrafestival.ee/">ENG</a></th>
  </tr>
</table>

-->
    <div id="header">
        <div id="language">
					<a href="http://tantrafestival.ee/et/">EST</a> | <a href="http://tantrafestival.ee/">ENG</a>
        </div><!-- .language -->
        <div class="fb-like" data-href="http://tantrafestival.ee/" data-send="false" data-width="150" data-show-faces="false"></div>
    
        <div id="keke">
         
			<img src="<?php echo get_template_directory_uri(); ?>/img/Festival_logo.png" style="margin-top: 0;">
         
        </div><!-- .keke -->

    </div><!-- #header -->





		<img src="http://tantrafestival.ee/wp-content/uploads/2013/03/line_menu.png" style="margin-top: 20px;">
		<nav id="site-navigation" class="main-navigation" role="navigation" style="margin-top: -5px; ">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<img src="http://tantrafestival.ee/wp-content/uploads/2013/03/line_menu.png" style="margin-top: 0px;">
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">