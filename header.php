<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
    <!--
	<link href='https://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(''); ?></title>
	<meta name="title" content="<?php wp_title(''); ?>">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->

	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->


<!--		 <link rel="stylesheet" href="http://www.gexaenergy.com/assets/css/gexa.css"> -->
<link rel="stylesheet" href="">
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <!-- Include google font 'PT Sans'-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>



	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<header id="header" class="header">

<div id="ci-header">
            <div id="ci-logo">
                <a href="/"><img src="http://www.ci-inc.com/wp-content/themes/computerinsights/images/header-logo.png" border="0" alt="Computer Insights - Logo"></a>
            </div>
            <div id="ci-spacer"></div>
            <div id="ci-name">
                <a href="/" title="Computer Insights Inc - The Best Software For Tracking Your Fasteners"><img src="http://www.ci-inc.com/wp-content/themes/computerinsights/images/header-name.png" border="0" style="margin-top: 20px;" alt="Computer Insights Inc - The Best Software For Tracking Your Fasteners" data-pin-nopin="true"></a>
            </div>
            <div id="ci-address">
                <b>Computer Insights, Inc</b>
                <br>108 South Third Street
                <br>Bloomingdale, IL 60108
                <p>(800) 539-1233
            </p></div>
        </div>

<div id="ci-navigation">
            <div class="menu-main-w-subs-container"><ul id="menu-main-w-subs" class="menu"><li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-74"><a href="http://www.ci-inc.com/">Home</a></li>
<li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-72"><a href="http://www.ci-inc.com/software-overview/">Software Overview</a>
<ul class="sub-menu">
    <li id="menu-item-2854" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2854"><a href="http://www.ci-inc.com/api/">API Web Services</a></li>
    <li id="menu-item-2154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2154"><a href="http://www.ci-inc.com/credit-card-integration/">Credit Card Integration</a></li>
    <li id="menu-item-384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-384"><a href="http://www.ci-inc.com/data-conversion/">Data Conversion</a></li>
    <li id="menu-item-376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-376"><a href="http://www.ci-inc.com/documentconnection/">documentConnection</a></li>
    <li id="menu-item-1124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1124"><a href="http://www.ci-inc.com/iso-9001-compliant/">ISO 9001 Compliant</a></li>
    <li id="menu-item-751" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-751"><a href="http://www.ci-inc.com/software-overview/">Software Overview</a></li>
    <li id="menu-item-2855" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2855"><a href="http://www.ci-inc.com/tbe-mobile/">TBE Mobile</a></li>
    <li id="menu-item-377" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-377"><a href="http://www.ci-inc.com/vendor-managed-inventory/">Vendor Managed Inventory</a></li>
    <li id="menu-item-2996" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2996"><a href="http://www.ci-inc.com/videos/wireless-warehouse-2015/">Wireless Warehouse</a></li>
</ul>
</li>
<li id="menu-item-3022" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3022"><a href="http://www.ci-inc.com/supply-chain-network/">Supply Chain Network</a>
<ul class="sub-menu">
    <li id="menu-item-3024" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3024"><a href="http://www.ci-inc.com/brighton-best-connection/">The Brighton-Best Connection</a></li>
    <li id="menu-item-3023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3023"><a href="http://www.ci-inc.com/the-kanebridge-connection/">The Kanebridge Connection</a></li>
    <li id="menu-item-3030" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3030"><a href="http://www.ci-inc.com/the-fch-connection/">The FCH Connection</a></li>
</ul>
</li>
<li id="menu-item-1785" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1785"><a title="Client Testimonials" href="http://www.ci-inc.com/testimonials/">Testimonials</a></li>
<li id="menu-item-2108" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2108"><a title="Frequently Asked Questions (FAQs)" href="http://www.ci-inc.com/frequently-asked-questions/">FAQs</a></li>
<li id="menu-item-387" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-387"><a href="/events/upcoming/">Events</a></li>
<li id="menu-item-2049" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2049"><a href="http://www.ci-inc.com/contact-us-sales/">Contact Us</a></li>
<li id="menu-item-830" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-830"><a href="http://www.ci-inc.com/support/">Support</a>
<ul class="sub-menu">
    <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a href="http://www.ci-inc.com/articles/">Article Archives</a></li>
    <li id="menu-item-943" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-943"><a href="http://www.ci-inc.com/contact-us/">Contact Us</a></li>
    <li id="menu-item-1106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1106"><a href="http://www.ci-inc.com/employees/">Employees</a></li>
    <li id="menu-item-2109" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2109"><a href="http://www.ci-inc.com/frequently-asked-questions/">Frequently Asked Questions (FAQ)</a></li>
    <li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890"><a href="http://www.ci-inc.com/support/">QuickSupport</a></li>
    <li id="menu-item-656" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-656"><a href="http://www.ci-inc.com/release-notes/">Release Notes</a></li>
    <li id="menu-item-1580" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1580"><a href="http://www.ci-inc.com/tips/">Tips</a></li>
    <li id="menu-item-381" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-381"><a href="http://www.ci-inc.com/videos/">Video Archive</a></li>
</ul>
</li>
</ul></div>     </div>

</header>

<body <?php body_class(); ?>>
