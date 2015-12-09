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

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<header id="header" class="header">
            <div id="header-inner" class="header__inner">
                <div id="page_0_header_0_Wrapper" class="header-mobile-menu visible-phone" data-ga-category="gex_topnav_phone" data-ga-action="Clicks" data-ga-label="gex_topnav_phone_clicks_all">
    <button type="button" class="header-mobile-menu__nav-toggle" data-menu="{&quot;target&quot;:&quot;#HeaderMobileMenu&quot;}"></button>
    <a id="page_0_header_0_LogoLink" class="header-mobile-menu__logo-link" href="http://www.gexaenergy.com/"><img src="http://www.gexaenergy.com/~/media/Images/Global/General/logo-mobile.ashx" class="header-mobile-menu__logo" alt="Logo" width="131" height="35"></a>
    <a id="page_0_header_0_CallLink" class="header-mobile-menu__link action action--call" data-ga-category="gex_button_call_phone" data-ga-action="Clicks" data-ga-label="gex_button_call_phone_topnav" href="tel:8669619399"><img id="page_0_header_0_Image1" class="header-mobile-menu__link__icon" src="http://www.gexaenergy.com/assets/images/global/icons/phone-mobile.png"></a>
    <a id="page_0_header_0_SearchLink" class="header-mobile-menu__link action action--search" href="http://www.gexaenergy.com/#search"><img id="page_0_header_0_Image2" class="header-mobile-menu__link__icon" src="http://www.gexaenergy.com/assets/images/global/icons/search-mobile.png"></a>
</div><nav id="HeaderMobileMenu" class="menu menu--mobile" data-ga-category="gex_topnav_phone" data-ga-action="Clicks" data-ga-label="gex_topnav_phone_clicks_all">
    <ul class="menu--mobile__links menu--mobile__links--primary">
            <li class="menu--mobile__item menu--mobile__item--primary">
                <button id="page_0_header_1_PrimaryLinks_PrimaryLink_0" type="button" class="menu--mobile__link menu--mobile__link--primary menu--mobile__link--primary--first" data-menu="{&quot;target&quot;:&quot;#page_0_header_1_PrimaryLinks_Menu_0&quot;}">For Home</button>
                <ul id="page_0_header_1_PrimaryLinks_Menu_0" class="menu--mobile__links menu--mobile__links--secondary">
                    <li class="menu--mobile__item menu--mobile__item--secondary">
                        <a id="page_0_header_1_PrimaryLinks_OverviewLink_0" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--first" href="http://www.gexaenergy.com/for-home">Overview</a>
                    </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_0_Link_0" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-home/electricity-plans">Shop for Plans</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_0_Link_1" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-home/compare-and-switch">Why Gexa: Compare and Switch</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_0_Link_2" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-home/moving">Moving Help Center</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_0_Link_3" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-home/learn-and-explore">Learn &amp; Explore</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_0_Link_4" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-home/residential-service-areas">Service Areas</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_0_Link_5" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--last" href="http://www.gexaenergy.com/for-home/support">Support</a>
                            </li>

                </ul>
            </li>

            <li class="menu--mobile__item menu--mobile__item--primary">
                <button id="page_0_header_1_PrimaryLinks_PrimaryLink_1" type="button" class="menu--mobile__link menu--mobile__link--primary" data-menu="{&quot;target&quot;:&quot;#page_0_header_1_PrimaryLinks_Menu_1&quot;}">For Business</button>
                <ul id="page_0_header_1_PrimaryLinks_Menu_1" class="menu--mobile__links menu--mobile__links--secondary">
                    <li class="menu--mobile__item menu--mobile__item--secondary">
                        <a id="page_0_header_1_PrimaryLinks_OverviewLink_1" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--first" href="http://www.gexaenergy.com/for-business">Overview</a>
                    </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_1_Link_0" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-business/request-a-quote">Request a Quote</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_1_Link_1" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-business/small-business">Small Business</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_1_Link_2" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-business/large-business">Large Business</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_1_Link_3" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-business/national-business">National Business</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_1_Link_4" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-business/industries-we-serve">Industries We Serve</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_1_Link_5" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/for-business/business-service-areas">Service Areas</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_1_Link_6" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--last" href="http://www.gexaenergy.com/for-business/support">Support</a>
                            </li>

                </ul>
            </li>

            <li class="menu--mobile__item menu--mobile__item--primary">
                <button id="page_0_header_1_PrimaryLinks_PrimaryLink_2" type="button" class="menu--mobile__link menu--mobile__link--primary" data-menu="{&quot;target&quot;:&quot;#page_0_header_1_PrimaryLinks_Menu_2&quot;}">Channel Partners</button>
                <ul id="page_0_header_1_PrimaryLinks_Menu_2" class="menu--mobile__links menu--mobile__links--secondary">
                    <li class="menu--mobile__item menu--mobile__item--secondary">
                        <a id="page_0_header_1_PrimaryLinks_OverviewLink_2" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--first" href="http://www.gexaenergy.com/channel-partners">Overview</a>
                    </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_2_Link_0" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/channel-partners/why-gexa">Why Gexa Energy</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_2_Link_1" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/channel-partners/channel-portal-overview">Channel Portal</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_2_Link_2" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/channel-partners/become-a-partner">Become a Partner</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_2_Link_3" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--last" href="http://www.gexaenergy.com/channel-partners">Support</a>
                            </li>

                </ul>
            </li>

            <li class="menu--mobile__item menu--mobile__item--primary">
                <button id="page_0_header_1_PrimaryLinks_PrimaryLink_3" type="button" class="menu--mobile__link menu--mobile__link--primary" data-menu="{&quot;target&quot;:&quot;#page_0_header_1_PrimaryLinks_Menu_3&quot;}">My Account</button>
                <ul id="page_0_header_1_PrimaryLinks_Menu_3" class="menu--mobile__links menu--mobile__links--secondary">
                    <li class="menu--mobile__item menu--mobile__item--secondary">
                        <a id="page_0_header_1_PrimaryLinks_OverviewLink_3" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--first" href="http://www.gexaenergy.com/">Overview</a>
                    </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_3_Link_0" class="menu--mobile__link menu--mobile__link--secondary" href="https://residential.gexaenergy.com/LoginMain.aspx">Login</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_3_Link_1" class="menu--mobile__link menu--mobile__link--secondary" href="https://residential.gexaenergy.com/LoginCreateNewAccount.aspx">Register</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_3_Link_2" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/my-account/make-a-payment">Make a Payment</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_3_Link_3" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--last" href="https://residential.gexaenergy.com/Default.aspx">Renew Online</a>
                            </li>

                </ul>
            </li>

            <li class="menu--mobile__item menu--mobile__item--primary">
                <button id="page_0_header_1_PrimaryLinks_PrimaryLink_4" type="button" class="menu--mobile__link menu--mobile__link--primary" data-menu="{&quot;target&quot;:&quot;#page_0_header_1_PrimaryLinks_Menu_4&quot;}">About Us</button>
                <ul id="page_0_header_1_PrimaryLinks_Menu_4" class="menu--mobile__links menu--mobile__links--secondary">
                    <li class="menu--mobile__item menu--mobile__item--secondary">
                        <a id="page_0_header_1_PrimaryLinks_OverviewLink_4" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--first" href="http://www.gexaenergy.com/about-us">Overview</a>
                    </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_4_Link_0" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/about-us/community">Community</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_4_Link_1" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/about-us/press-room">Press Room</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_4_Link_2" class="menu--mobile__link menu--mobile__link--secondary" href="http://www.gexaenergy.com/about-us/leadership">Leadership</a>
                            </li>

                            <li class="menu--mobile__item menu--mobile__item--secondary">
                                <a id="page_0_header_1_PrimaryLinks_SecondaryLinks_4_Link_3" class="menu--mobile__link menu--mobile__link--secondary menu--mobile__link--secondary--last" href="http://www.gexaenergy.com/about-us/careers">Careers</a>
                            </li>

                </ul>
            </li>
        </ul>
</nav>

<div class="header-links">
    <div class="header-links__inner container">
        <ul class="header-links__links">

                    <li class="header-links__item">
                        <a class="header-links__link" href="http://www.gexaenergy.com/about-us">
                            <img id="page_0_header_2_Links_Image_0" class="header-links__link__icon" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/about-us.ashx">
                            <img id="page_0_header_2_Links_HoverImage_0" class="header-links__link__icon header-links__link__icon--hover" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/about-us-selected.ashx">
                            <span id="page_0_header_2_Links_Text_0" class="header-links__link__text">About Us</span>
                        </a>
                    </li>

                    <li class="header-links__item">
                        <a class="header-links__link" href="http://www.gexaenergy.com/#search">
                            <img id="page_0_header_2_Links_Image_1" class="header-links__link__icon" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/search.ashx">
                            <img id="page_0_header_2_Links_HoverImage_1" class="header-links__link__icon header-links__link__icon--hover" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/search-selected.ashx">
                            <span id="page_0_header_2_Links_Text_1" class="header-links__link__text">Search</span>
                        </a>
                    </li>

                    <li class="header-links__item">
                        <a class="header-links__link" href="http://www.gexaenergy.com/#help">
                            <img id="page_0_header_2_Links_Image_2" class="header-links__link__icon" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/help.ashx">
                            <img id="page_0_header_2_Links_HoverImage_2" class="header-links__link__icon header-links__link__icon--hover" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/help-selected.ashx">
                            <span id="page_0_header_2_Links_Text_2" class="header-links__link__text">Help</span>
                        </a>
                    </li>

                    <li class="header-links__item">
                        <a class="header-links__link" href="http://www.gexaenergy.com/#location">
                            <img id="page_0_header_2_Links_Image_3" class="header-links__link__icon" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/location.ashx">
                            <img id="page_0_header_2_Links_HoverImage_3" class="header-links__link__icon header-links__link__icon--hover" src="http://www.gexaenergy.com/~/media/Images/Global/Icons/location-selected.ashx">
                            <span id="page_0_header_2_Links_Text_3" class="header-links__link__text">Select Location</span>
                        </a>
                    </li>

            <li class="header-links__item header-links__item--phone">

                    866-961-9399

            </li>
        </ul>
    </div>
</div>

<nav class="menu menu--header hidden-phone">
    <div class="menu__inner menu--header__inner container">
        <a id="page_0_header_3_LogoLink" class="menu--header__logo-link" href="http://www.gexaenergy.com/"><img src="http://www.gexaenergy.com/~/media/Images/Global/General/logo.ashx" class="menu--header__logo" alt="Logo" width="169" height="45" data-pin-nopin="true"></a>
        <ul class="menu--header__links">

                    <li id="page_0_header_3_MainLinks_MenuItem_0" class="menu--header__links__item" data-menu="{&quot;target&quot;:&quot;#page_0_header_3_MainLinks_MegaNav_0&quot;,&quot;close&quot;:&quot;#page_0_header_3_MainLinks_CloseMeganav_0&quot;,&quot;hoverOpen&quot;:true}">
                        <a id="page_0_header_3_MainLinks_Link_0" class="menu--header__link menu--header__link--first" href="http://www.gexaenergy.com/for-home"><span id="page_0_header_3_MainLinks_LinkText_0" class="menu--header__link__text">For Home</span></a>
                        <div id="page_0_header_3_MainLinks_MegaNav_0" class="menu--header__meganav">
                            <div id="page_0_header_3_MainLinks_MeganavInner_0" class="menu--header__meganav__inner">
                                <button id="page_0_header_3_MainLinks_CloseMeganav_0" type="button" class="menu--header__meganav__close-button visible-tablet">
                                    <img class="menu--header__meganav__close-icon" src="http://www.gexaenergy.com/assets/images/global/icons/close-small.png">
                                </button>
                                <div class="menu--header__meganav__marketing">
                                    <h3 id="page_0_header_3_MainLinks_MarketingHeader_0" class="menu--header__meganav__marketing__header">WHY GEXA FOR YOUR HOME?</h3>
                                    <div id="page_0_header_3_MainLinks_MarketingContent_0" class="menu--header__meganav__marketing__content">We are proud to call Texas home. We take pride in our excellent customer service.</div>
                                    <a id="page_0_header_3_MainLinks_MarketingLink_0" class="menu--header__meganav__marketing__link" href="http://www.gexaenergy.com/for-home">Learn More</a>
                                </div>
                                <ul class="menu--header__meganav__sublinks">
                                        <li id="page_0_header_3_MainLinks_SubLinks_0_SubLinkItem_0" class="menu--header__meganav__sublinks__item menu--header__meganav__sublinks__item--first">
                                            <a class="menu--header__meganav__sublink menu--header__meganav__sublink--first" href="http://www.gexaenergy.com/for-home/electricity-plans">
                                                Shop for Plans
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_0_SubLinkItem_1" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-home/compare-and-switch">
                                                Why Gexa: Compare and Switch
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_0_SubLinkItem_2" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-home/moving">
                                                Moving Help Center
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_0_SubLinkItem_3" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-home/learn-and-explore">
                                                Learn &amp; Explore
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_0_SubLinkItem_4" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-home/residential-service-areas">
                                                Service Areas
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_0_SubLinkItem_5" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-home/support">
                                                Support
                                            </a>
                                        </li>
                                    </ul>
                                <a id="page_0_header_3_MainLinks_CTALink_0" data-ga-category="gex_button_getstarted" data-ga-action="Clicks" data-ga-label="gex_button_getstarted_topnav" href="http://www.gexaenergy.com/customer-type"><div id="page_0_header_3_MainLinks_CTAContent_0" class="menu--header__meganav__cta"><img height="76" alt="Get Started" width="224" src="http://www.gexaenergy.com/~/media/Images/Gexa/Buttons/get-started.ashx"></div></a>

                            </div>
                        </div>
                    </li>

                    <li id="page_0_header_3_MainLinks_MenuItem_1" class="menu--header__links__item" data-menu="{&quot;target&quot;:&quot;#page_0_header_3_MainLinks_MegaNav_1&quot;,&quot;close&quot;:&quot;#page_0_header_3_MainLinks_CloseMeganav_1&quot;,&quot;hoverOpen&quot;:true}">
                        <a id="page_0_header_3_MainLinks_Link_1" class="menu--header__link" href="http://www.gexaenergy.com/for-business"><span id="page_0_header_3_MainLinks_LinkText_1" class="menu--header__link__text">For Business</span></a>
                        <div id="page_0_header_3_MainLinks_MegaNav_1" class="menu--header__meganav menu--header__meganav--offset-left">
                            <div id="page_0_header_3_MainLinks_MeganavInner_1" class="menu--header__meganav__inner">
                                <button id="page_0_header_3_MainLinks_CloseMeganav_1" type="button" class="menu--header__meganav__close-button visible-tablet">
                                    <img class="menu--header__meganav__close-icon" src="http://www.gexaenergy.com/assets/images/global/icons/close-small.png">
                                </button>
                                <div class="menu--header__meganav__marketing">
                                    <h3 id="page_0_header_3_MainLinks_MarketingHeader_1" class="menu--header__meganav__marketing__header">WHY GEXA FOR YOUR BUSINESS?</h3>
                                    <div id="page_0_header_3_MainLinks_MarketingContent_1" class="menu--header__meganav__marketing__content">We are a leader in providing energy solutions to meet our customer's toughest challenges.</div>
                                    <a id="page_0_header_3_MainLinks_MarketingLink_1" class="menu--header__meganav__marketing__link" href="http://www.gexaenergy.com/for-business">For Business</a>
                                </div>
                                <ul class="menu--header__meganav__sublinks">
                                        <li id="page_0_header_3_MainLinks_SubLinks_1_SubLinkItem_0" class="menu--header__meganav__sublinks__item menu--header__meganav__sublinks__item--first">
                                            <a class="menu--header__meganav__sublink menu--header__meganav__sublink--first" href="http://www.gexaenergy.com/for-business/small-business">
                                                Small Business
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_1_SubLinkItem_1" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-business/large-business">
                                                Large Business
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_1_SubLinkItem_2" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-business/national-business">
                                                National Business
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_1_SubLinkItem_3" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-business/industries-we-serve">
                                                Industries We Serve
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_1_SubLinkItem_4" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-business/business-service-areas">
                                                Service Areas
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_1_SubLinkItem_5" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/for-business/support">
                                                Support
                                            </a>
                                        </li>
                                    </ul>
                                <a id="page_0_header_3_MainLinks_CTALink_1" data-ga-category="gex_button_getaquote" data-ga-action="Clicks" data-ga-label="gex_button_getaquote_topnav" href="http://www.gexaenergy.com/for-business/request-a-quote"><div id="page_0_header_3_MainLinks_CTAContent_1" class="menu--header__meganav__cta"><img height="76" alt="Get a Quote" width="224" src="http://www.gexaenergy.com/~/media/Images/Gexa/Buttons/get-a-quote.ashx"></div></a>

                            </div>
                        </div>
                    </li>

                    <li id="page_0_header_3_MainLinks_MenuItem_2" class="menu--header__links__item" data-menu="{&quot;target&quot;:&quot;#page_0_header_3_MainLinks_MegaNav_2&quot;,&quot;close&quot;:&quot;#page_0_header_3_MainLinks_CloseMeganav_2&quot;,&quot;hoverOpen&quot;:true}">
                        <a id="page_0_header_3_MainLinks_Link_2" class="menu--header__link" href="http://www.gexaenergy.com/channel-partners"><span id="page_0_header_3_MainLinks_LinkText_2" class="menu--header__link__text">Channel Partners</span></a>
                        <div id="page_0_header_3_MainLinks_MegaNav_2" class="menu--header__meganav menu--header__meganav--right">
                            <div id="page_0_header_3_MainLinks_MeganavInner_2" class="menu--header__meganav__inner">
                                <button id="page_0_header_3_MainLinks_CloseMeganav_2" type="button" class="menu--header__meganav__close-button visible-tablet">
                                    <img class="menu--header__meganav__close-icon" src="http://www.gexaenergy.com/assets/images/global/icons/close-small.png">
                                </button>
                                <div class="menu--header__meganav__marketing">
                                    <h3 id="page_0_header_3_MainLinks_MarketingHeader_2" class="menu--header__meganav__marketing__header">Become a Channel Partner</h3>
                                    <div id="page_0_header_3_MainLinks_MarketingContent_2" class="menu--header__meganav__marketing__content">Partnering with us allows your customers to take advantage of energy choice.</div>
                                    <a id="page_0_header_3_MainLinks_MarketingLink_2" class="menu--header__meganav__marketing__link" href="http://www.gexaenergy.com/channel-partners">Learn More</a>
                                </div>
                                <ul class="menu--header__meganav__sublinks">
                                        <li id="page_0_header_3_MainLinks_SubLinks_2_SubLinkItem_0" class="menu--header__meganav__sublinks__item menu--header__meganav__sublinks__item--first">
                                            <a class="menu--header__meganav__sublink menu--header__meganav__sublink--first" href="http://www.gexaenergy.com/channel-partners/why-gexa">
                                                Why Gexa Energy?
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_2_SubLinkItem_1" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/channel-partners/channel-portal-overview">
                                                Channel Portal
                                            </a>
                                        </li>

                                        <li id="page_0_header_3_MainLinks_SubLinks_2_SubLinkItem_2" class="menu--header__meganav__sublinks__item">
                                            <a class="menu--header__meganav__sublink" href="http://www.gexaenergy.com/channel-partners/become-a-partner">
                                                Become a Partner
                                            </a>
                                        </li>
                                    </ul>
                                <a id="page_0_header_3_MainLinks_CTALink_2" data-ga-category="gex_button" data-ga-action="Clicks" data-ga-label="gex_button_topnav_channelportal" href="http://channelportal.gexaenergy.com" target="_blank"><div id="page_0_header_3_MainLinks_CTAContent_2" class="menu--header__meganav__cta"><h4><span style="font-size: 24px;">Interested in partnering with us?</span></h4>
<p><span style="font-size: 14px; line-height: 18px; font-family: HelveticaNeueW01-55Roma, Helvetica, sans-serif; color: #595959;">We are committed to making it easier for our channel partners to do business.&nbsp;</span></p>
<p><img width="171" height="40" src="http://www.gexaenergy.com/~/media/Images/Gexa/Buttons/channel.ashx" alt="Channel Portal"></p></div></a>

                            </div>
                        </div>
                    </li>

            <li id="page_0_header_3_MyAccountItem" class="menu--header__links__item" data-menu="{&quot;target&quot;:&quot;#page_0_header_3_MyAccountMegaNav&quot;,&quot;close&quot;:&quot;#page_0_header_3_MyAccountCloseBtn&quot;,&quot;hoverOpen&quot;:true}">
                <a id="page_0_header_3_MyAccountLink" class="menu--header__link menu--header__link--last" href="http://www.gexaenergy.com/"><span id="page_0_header_3_MyAccountLinkText" class="menu--header__link__text">My Account</span></a>

            </li>
            <li class="menu--header__item menu--header__item--phone">

                    <span id="page_0_header_3_PhoneNumber" class="menu--header__phone">866-961-9399</span>

            </li>
        </ul>
    </div>

</nav>
            </div>
        </header>

<body <?php body_class(); ?>>
