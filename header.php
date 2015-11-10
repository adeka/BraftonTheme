<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
		<script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

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


	<link rel="stylesheet" href="http://nexteraenergy.com/css/nav.css">
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<header id="energy-header">

	<tr><td>
	<div id="wrapper">

	<div class="topLogo">
	<a href="/index.shtml"><img src="http://www.nexteraenergy.com/wrapper/nav_images/logo_NE.gif" width="144" height="64" alt=""></a>
	</div>


	<div class="topInfo">
	<span id="FPLGcurrent">
	<div style="height:0; width: 282px; padding:0; margin:0;"></div>
	<!--<img src="http://quotes.corporate-ir.net/media_files/irol/88/88486/qi/fpl_qi.gif"/>-->
	</span>
	</div>


	 <meta http-equiv="keywords" content="">


	    <div class="headText">


	</div>


	<div class="par parsys"><div class="parbase code_snippet_input section">


	<div id="topSearch">
	<!--googleon: all-->
	<form id="autosearch" name="autosearch" method="get" action="http://fplgoogle.fpl.com/search" onsubmit="return validateSearch();">
	<div class="searchPS_s" id="hdr"><input class="inputboxPSearch" id="searchField" maxlength="45" value="Search" name="q" type="text" onclick="javascript:this.value='';"></div>
	<div id="PSbutton"><input type="image" name="btnG" src="http://www.nexteraenergy.com/images/transparent.gif" width="15" height="15" id="" onclick="submit"></div>
	<input type="hidden" name="output" value="xml_no_dtd">
	<input type="hidden" name="site" value="nexteraenergy">
	<input type="hidden" name="client" value="nexteraenergy_client">
	<input type="hidden" name="proxystylesheet" value="nexteraenergy_client">

	</form>

	</div>

	      </div>

	</div>


	<div id="topMenu">
	<a class="nav" href="http://www.nexteraenergy.com/company/index.shtml">Our Company</a>
	<a class="nav" href="http://www.nexteraenergy.com/viewpoints/index.shtml">Viewpoints</a>
	<a class="nav" href="http://www.investor.nexteraenergy.com/">Investor Relations</a>
	<a class="nav" href="http://www.nexteraenergy.com/news/index.shtml">News Room</a>
	<a class="nav" id="last" href="http://www.nexteraenergy.com/careers/index.shtml">Careers</a>
	</div>
	<!-- SiteCatalyst code version: H.19.3.
	Copyright 1997-2009 Omniture, Inc. More info available at
	http://www.omniture.com -->
	<script language="JavaScript" type="text/javascript" src="/scripts/s_code.js"></script>
	<script language="JavaScript" type="text/javascript">

	/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
	var s_code=s.t();if(s_code)document.write(s_code)//--></script>
	<!-- End SiteCatalyst code version: H.19.3. -->


	</div>

	</td></tr>


	<tr><td>

	<div id="topLine"><img src="http://www.nexteraenergy.com/wrapper/nav_images/topLine.gif" width="983" height="4" data-pin-nopin="true"></div>

	</td></tr>

</header>

<body <?php body_class(); ?>>
