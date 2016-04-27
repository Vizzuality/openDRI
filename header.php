<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
	        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css" />
		<script type="text/javascript">
			var LAT_VIS   = null;
			var LONG_VIS  = null;
			var POST_ID   = null;
		</script>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="container" class="<?php if(is_home() === false){?>no-home<?php } ?>">
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
 				<div id="inner-header" class="wrap cf">
					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
						<a href="<?php echo home_url(); ?>" rel="nofollow"> <img src="<?php echo get_template_directory_uri(); ?>/logo<?php if(is_home()) {?>-extended<?php } ?>.svg" alt="<?php bloginfo('name'); ?>"> </a>
					</p>
					<span class='hr'></span>
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<span id="menu-option-projects"><a href="<?php echo home_url(); ?>/project">projects</a></span>
						<span id="menu-option-news"><a href="<?php echo home_url(); ?>/category/news">news</a></span>
						<span id="menu-option-resources"><a href="<?php echo home_url(); ?>/resources">resources</a></span>
						<span id="menu-option-about"><a href="<?php echo home_url(); ?>/about">about</a></span>
						<span class="search-input">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/search.svg">
							<input type="text" id="searchODRI" placeholder="Search">
							<span class='search-container'><span class="search-open-dri"></span></span>
						</span>
					</nav>
				</div>
			</header>