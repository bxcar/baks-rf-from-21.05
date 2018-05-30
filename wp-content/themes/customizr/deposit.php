<?php
/**
 * Template Name: deposit
 */
// get_header();
// wp_head(); ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="ru-RU" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="ru-RU" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="ru-RU" prefix="og: http://ogp.me/ns#" class="no-js">
<!--<![endif]-->
<head>
    <?php wp_head(); ?>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' id='dashicons-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/css/dashicons.min.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='admin-bar-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/css/admin-bar.min.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='czr-gfonts-css' href='//fonts.googleapis.com/css?family=Source+Sans+Pro' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='table-sorter-custom-css-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/wp-style.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_bootstrap-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/bootstrap.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_jquery-ui-css'
          href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css?ver=4.9.3' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='kr_fa-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css?ver=4.9.3'
          type='text/css' media='all'/>
    <!--<link rel='stylesheet' id='kr_common.maven.min-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/common.maven.min.css?ver=4.9.3'
          type='text/css' media='all'/>-->
    <link rel='stylesheet' id='kr_common.4f395-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/common.4f3956d44b9b23a7f5960677c886d163.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_style-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/style.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_style_accordion-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/css/style.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='customizr-main-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/style.min.css?ver=4.0.14'
          type='text/css' media='all'/>
    <style id='customizr-main-inline-css' type='text/css'>
        .tc-header, #tc-sn .tc-sn-inner, .czr-overlay, .add-menu-button, .tc-header .socials a, .tc-header .socials a:focus, .tc-header .socials a:active, .nav__utils, .nav__utils a, .nav__utils a:focus, .nav__utils a:active, .czr-overlay a:hover, .dropdown-menu, .tc-header .navbar-brand-sitename, [class*=nav__menu] .nav__link, [class*=nav__menu] .nav__link-wrapper .caret__dropdown-toggler, [class*=nav__menu] .dropdown-menu .nav__link, [class*=nav__menu] .dropdown-item .nav__link:hover, .tc-header form.czr-form label, .czr-overlay form.czr-form label, .tc-header .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .tc-header .czr-form textarea, .tc-header .czr-form .form-control, .czr-overlay .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .czr-overlay .czr-form textarea, .czr-overlay .czr-form .form-control, .tc-header h1, .tc-header h2, .tc-header h3, .tc-header h4, .tc-header h5, .tc-header h6 {
            color: #313131
        }

        .tc-header .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .tc-header .czr-form textarea, .tc-header .czr-form .form-control, .czr-overlay .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .czr-overlay .czr-form textarea, .czr-overlay .czr-form .form-control {
            border-color: #313131
        }

        .ham__toggler-span-wrapper .line, [class*=nav__menu] .nav__title::before, .tc-header .navbar-brand-sitename.czr-underline span::after {
            background-color: #313131
        }

        .header-tagline, [class*=nav__menu] .nav__link:hover, [class*=nav__menu] .nav__link-wrapper .caret__dropdown-toggler:hover, [class*=nav__menu] .show:not(.dropdown-item) > .nav__link, [class*=nav__menu] .show:not(.dropdown-item) > .nav__link-wrapper .nav__link, [class*=nav__menu] li:not(.dropdown-item).current-active > .nav__link, [class*=nav__menu] li:not(.dropdown-item).current-active > .nav__link-wrapper .nav__link, [class*=nav__menu] .current-menu-item > .nav__link, [class*=nav__menu] .current-menu-item > .nav__link-wrapper .nav__link, [class*=nav__menu] .dropdown-item .nav__link, .czr-overlay a, .tc-header .socials a:hover, .nav__utils a:hover, .nav__utils a.current-active, .tc-header .czr-form .form-group.in-focus label, .czr-overlay .czr-form .form-group.in-focus label {
            color: rgba(49, 49, 49, 0.7)
        }

        .nav__utils .ham-toggler-menu.collapsed:hover .line {
            background-color: rgba(49, 49, 49, 0.7)
        }

        .topbar-navbar__wrapper, .dropdown-item:not(:last-of-type) {
            border-color: rgba(49, 49, 49, 0.09)
        }

        .tc-header {
            border-bottom-color: rgba(49, 49, 49, 0.09)
        }

        #tc-sn {
            outline-color: rgba(49, 49, 49, 0.09)
        }

        .mobile-nav__container, .header-search__container, .mobile-nav__nav, .vertical-nav > li:not(:last-of-type) {
            border-color: rgba(49, 49, 49, 0.075)
        }

        .tc-header, #tc-sn .tc-sn-inner, .dropdown-menu, .dropdown-item:active, .dropdown-item:focus, .dropdown-item:hover {
            background-color: #f4f4f4
        }

        .sticky-transparent.is-sticky .mobile-sticky, .sticky-transparent.is-sticky .desktop-sticky, .sticky-transparent.is-sticky .mobile-nav__nav {
            background-color: rgba(244, 244, 244, 0.9)
        }

        .czr-overlay {
            background-color: rgba(244, 244, 244, 0.98)
        }

        .dropdown-item:before, .vertical-nav .caret__dropdown-toggler {
            background-color: rgba(11, 11, 11, 0.045)
        }

        .tc-header.border-top {
            border-top-width: 5px;
            border-top-style: solid
        }

        .tc-singular-thumbnail-wrapper .entry-media__wrapper {
            max-height: 250px;
            height: 250px
        }

        #czr-push-footer {
            display: none;
            visibility: hidden;
        }

        .czr-sticky-footer #czr-push-footer.sticky-footer-enabled {
            display: block;
        }

    </style>
    <link rel='stylesheet' id='customizr-ms-respond-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/style-modular-scale.min.css?ver=4.0.14'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='heateor_sss_frontend_css-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/sassy-social-share/public/css/sassy-social-share-public.css?ver=3.1.6'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='heateor_sss_sharing_default_svg-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/sassy-social-share/public/../admin/css/sassy-social-share-svg.css?ver=3.1.6'
          type='text/css' media='all'/>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/jquery.tablesorter.min.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/jquery.metadata.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/wp-script.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=4.9.3'></script>
    <!--<script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/js/bootstrap.js?ver=4.9.3'></script>-->
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/js/jquery-ui.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/ui/jquery.ui.touch-punch.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.easing.1.3.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.mousewheel.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.vaccordion.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/js/theme-deposit.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/js/libs/modernizr.min.js?ver=4.0.14'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var CZRParams = {
            "assetsPath": "https:\/\/xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai\/wp-content\/themes\/customizr\/assets\/front\/",
            "_disabled": [],
            "centerSliderImg": "1",
            "isLightBoxEnabled": "1",
            "SmoothScroll": {"Enabled": true, "Options": {"touchpadSupport": false}},
            "isAnchorScrollEnabled": "",
            "anchorSmoothScrollExclude": {
                "simple": ["[class*=edd]", ".carousel-control", "[data-toggle=\"modal\"]", "[data-toggle=\"dropdown\"]", "[data-toggle=\"tooltip\"]", "[data-toggle=\"popover\"]", "[data-toggle=\"collapse\"]", "[data-toggle=\"tab\"]", "[class*=upme]", "[class*=um-]"],
                "deep": {"classes": [], "ids": []}
            },
            "timerOnScrollAllBrowsers": "1",
            "centerAllImg": "1",
            "HasComments": "",
            "LoadModernizr": "1",
            "stickyHeader": "",
            "extLinksStyle": "",
            "extLinksTargetExt": "",
            "extLinksSkipSelectors": {"classes": ["btn", "button"], "ids": []},
            "dropcapEnabled": "",
            "dropcapWhere": {"post": "", "page": ""},
            "dropcapMinWords": "",
            "dropcapSkipSelectors": {
                "tags": ["IMG", "IFRAME", "H1", "H2", "H3", "H4", "H5", "H6", "BLOCKQUOTE", "UL", "OL"],
                "classes": ["btn"],
                "id": []
            },
            "imgSmartLoadEnabled": "",
            "imgSmartLoadOpts": {
                "parentSelectors": ["[class*=grid-container], .article-container", ".__before_main_wrapper", ".widget-front", ".post-related-articles", ".tc-singular-thumbnail-wrapper"],
                "opts": {"excludeImg": [".tc-holder-img"]}
            },
            "imgSmartLoadsForSliders": "1",
            "pluginCompats": [],
            "isWPMobile": "",
            "menuStickyUserSettings": {"desktop": "stick_up", "mobile": "stick_always"},
            "adminAjaxUrl": "https:\/\/xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai\/wp-admin\/admin-ajax.php",
            "ajaxUrl": "https:\/\/xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai\/?czrajax=1",
            "frontNonce": {"id": "CZRFrontNonce", "handle": "41025f4105"},
            "isDevMode": "",
            "isModernStyle": "1",
            "i18n": {"Permanently dismiss": "\u0412\u0441\u0435\u0433\u0434\u0430 \u043e\u0442\u043a\u043b\u043e\u043d\u044f\u0442\u044c"},
            "frontNotifications": {
                "welcome": {
                    "enabled": false,
                    "content": "",
                    "dismissAction": "dismiss_welcome_note_front"
                }
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/js/tc-scripts.min.js?ver=4.0.14'></script>
    <link rel='https://api.w.org/' href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-json/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 4.9.3"/>
    <link rel='shortlink' href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/?p=639'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fxn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai%2Fbanki-kredity-onlajn%2Fkredit%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fxn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai%2Fbanki-kredity-onlajn%2Fkredit%2F&#038;format=xml"/>
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <style type="text/css" media="print">#wpadminbar {
            display: none;
        }</style>
    <link rel="icon"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/01/cropped-banki_kredity-3-1-32x32.jpg"
          sizes="32x32"/>
    <link rel="icon"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/01/cropped-banki_kredity-3-1-192x192.jpg"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/01/cropped-banki_kredity-3-1-180x180.jpg"/>
    <meta name="msapplication-TileImage"
          content="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/01/cropped-banki_kredity-3-1-270x270.jpg"/>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/front/css/sravni-style2.css">
</head>

<body class="page-template-default page page-id-639 page-child parent-pageid-2 logged-in no-customize-support czr-link-hover-underline header-skin-custom footer-skin-dark czr-l-sidebar tc-center-images czr-sticky-footer"
      itemscope itemtype="http://schema.org/WebPage">


<div id="tc-page-wrap" class="">

    <header class="tpnav-header__header tc-header sl-logo_left sticky-brand-shrink-on sticky-transparent border-top czr-submenu-fade czr-submenu-move"
            role="banner" data-czr-model_id="header" data-czr-template="templates/parts/header">
        <div class="topbar-navbar__wrapper hidden-md-down desktop-sticky" data-czr-model_id="topbar_wrapper"
             data-czr-template="templates/parts/header/topbar_wrapper">
            <div class="container-fluid">
                <div class="row flex-row flex-nowrap justify-content-end align-items-center topbar-navbar__row">
                    <div class="topbar-nav__container col col-auto">
                        <nav id="topbar-nav" class="topbar-nav__nav ">
                            <div class="nav__menu-wrapper topbar-nav__menu-wrapper czr-open-on-hover"
                                 data-czr-model_id="topbar_menu" data-czr-template="templates/parts/header/parts/menu">
                            </div>
                        </nav>
                    </div>
                    <div class="topbar-nav__socials social-links col col-auto">
                        <ul class="socials " data-czr-model_id="social_block"
                            data-czr-template="templates/parts/modules/common/social_block">
                            <li><a rel="nofollow" class="social-icon icon-feed" title="Подпишитесь на мою RSS ленту"
                                   aria-label="Подпишитесь на мою RSS ленту"
                                   href="http://feeds.feedburner.com/xn-----6kccbugwdmdcrtidm5a5byn/pbZP"
                                   target="_blank" style="color:#dd3333;font-size:20px"><i class="fa fa-rss"></i></a>
                            </li>
                            <li><a rel="nofollow" class="social-icon icon-facebook"
                                   title="Подпишитесь на нас в Facebook-f (alias"
                                   aria-label="Подпишитесь на нас в Facebook-f (alias"
                                   href="https://www.facebook.com/banki.kredity.online/" target="_blank"
                                   style="color:#1e73be;font-size:20px"><i class="fa fa-facebook"></i></a></li>
                            <li><a rel="nofollow" class="social-icon icon-vk" title="Подпишитесь на нас в Vk"
                                   aria-label="Подпишитесь на нас в Vk" href="https://vk.com/public139075058"
                                   target="_blank" style="color:#1e73be;font-size:20px"><i class="fa fa-vk"></i></a>
                            </li>
                            <li><a rel="nofollow" class="social-icon icon-google-plus"
                                   title="Подпишитесь на нас в Google-plus"
                                   aria-label="Подпишитесь на нас в Google-plus"
                                   href="https://plus.google.com/u/1/109166669758511888859" target="_blank"
                                   style="color:#dd3333;font-size:20px"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary-navbar__wrapper hidden-md-down has-horizontal-menu" data-czr-model_id="navbar_wrapper"
             data-czr-template="templates/parts/header/navbar_wrapper">
            <div class="container-fluid">
                <div class="row align-items-center flex-row primary-navbar__row">
                    <div class="branding__container col col-auto" data-czr-model_id="branding_wrapper"
                         data-czr-template="templates/parts/header/parts/branding_wrapper">
                        <div class="branding align-items-center flex-column tagline-below">
                            <div class="navbar-brand align-self-start " data-czr-model_id="logo_wrapper"
                                 data-czr-template="templates/parts/header/parts/logo_wrapper">
                                <a class="navbar-brand-sitelogo" href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/"
                                   title="Банки Кредиты Онлайн | Подобрать выгодный банковский кредит, оформить заявку на кредит онлайн, сравнить предложения банков на потребительские кредиты.">
                                    <img src="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/01/cropped-banki_kredity-1.jpg"
                                         alt="Вернуться на главную" class="" width="1600" height="1416"
                                         style="max-width:250px;max-height:100px" data-no-retina
                                         data-czr-model_id="logo" data-czr-template="templates/parts/header/parts/logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="primary-nav__container justify-content-lg-around col col-lg-auto flex-lg-column"
                         data-czr-model_id="nav_container"
                         data-czr-template="templates/parts/header/parts/nav_container">
                        <div class="primary-nav__wrapper flex-lg-row align-items-center justify-content-end">
                            <nav class="primary-nav__nav col" id="primary-nav">
                                <div class="nav__menu-wrapper primary-nav__menu-wrapper justify-content-end czr-open-on-hover"
                                     data-czr-model_id="navbar_primary_menu"
                                     data-czr-template="templates/parts/header/parts/menu">
                                    <ul id="primary-nav" class="primary-nav__menu regular-nav nav__menu nav">
                                        <li id="menu-item-234"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-page-ancestor menu-item-234">
                                            <a href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/"
                                               class="nav__link"><span class="nav__title">Банки кредиты</span></a></li>
                                        <li id="menu-item-235"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-235">
                                            <a href="#nav2" class="nav__link"><span
                                                        class="nav__title">Кредиты онлайн</span></a></li>
                                        <li id="menu-item-233"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-233">
                                            <a href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/stati/"
                                               class="nav__link"><span class="nav__title">Статьи</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="primary-nav__utils nav__utils col-auto" data-czr-model_id="primary_nav_utils"
                                 data-czr-template="templates/parts/header/parts/primary_nav_utils">
                                <ul class="nav utils flex-row flex-nowrap regular-nav">
                                    <li class="nav__search " data-czr-model_id="desktop_primary_search"
                                        data-czr-template="templates/parts/header/parts/nav_search">
                                        <a href="#" class="search-toggle_btn icn-search czr-overlay-toggle_btn"
                                           aria-expanded="false"><span class="sr-only">Search</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content_page page-cr-cards page-deposits">
        <div data-reactid="151" style="margin-bottom:120px"><!-- react-empty: 152 -->
            <section class="_2rXEs aqIhJ calculator-list-theme__wrapper">
                <div class="_20jzZ">
                    <div class="_3n9UL calculator-list-theme__image-container"></div>
                </div>
                <div class="_1zQdT BXky6">
                    <div class="_2BsQ1 debit-cards-serp i-DepositCalculatorBox">
                        <div data-reactid="158">
                            <div class="_2fyyM _1MiQb mjrcK _1Ow3t _3UTzX"><? wp_title(''); ?><!--</h1>--><span
                                        class="_1jaU-"><span
                                            class="calculator-list-theme__header-region-name"></span></span></div>
                        </div>

                        <div class="_30VPM">
                            <div class="WXTuD _Szkx fx">
                                <div class="_3SAiO _1wJD0 calculator-list-theme__label">Сумма вклада</div>
                                <div class="" data-test="ui-group">
                                    <div class="_2J6fq">
                                        <div class="_1Mbqb _2futP _2mpBR fx" data-test="ui-slider-input">
                                            <div class="_3_n91 AePXT _1fswf" data-test="ui-slider-input-input"><input
                                                        id="price" class="_2ARmF _2qJ6u _3uy56 _3I6R2" name="price"
                                                        value="100000" onkeypress="price_change()"
                                                        style="width:100%;"><input id="oldprice"
                                                                                   class="_2ARmF _2qJ6u _16cFN"
                                                                                   name="oldprice" type="hidden"><input
                                                        id="oldprice1" class="form-control" name="oldprice1"
                                                        type="hidden">
                                                <div id="slider-range"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="WXTuD WXTuD-fx">
                                    <div class="_3SAiO _1wJD0 calculator-list-theme__label fx">Валюта</div>
                                    <div data-test="ui-select" class="_129hA _129hA-fx">
                                        <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                            <div class="_1DCZo">
                                                <div data-test="ui-select" class="_129hA _2futP _1iN3s">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                                        <div class="_1DCZo czr-focus"><input onchange="Get_PotrKr();" id="cur_currency" type="text" readonly="" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" class="_2ARmF _2qJ6u _16cFN  czr-focusable" role="input" value="₽" onclick="select_cur();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9" data-test="ui-select-input-icon">
                                                                <svg class="SdEDi" data-reactid="189">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down-thin" data-reactid="190">
                                                                        <svg viewBox="0 0 8.1 4.8" id="arrow-down-thin" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                                                            <path d="M7.8.4L4.1 4.1.4.4"></path>
                                                                        </svg>
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="currency" class=" _2cR3J" data-test="ui-select-values">
                                                        <li value="RUB" class="_3NNjg" data-test="ui-menu-item" onclick="select_currency('₽')"><i class="fa fa-rub" aria-hidden="true"></i>
                                                        </li>
                                                        <li value="USD" class="_3NNjg" data-test="ui-menu-item" onclick="select_currency('$')"><i class="fa fa-usd" aria-hidden="true"></i>
                                                        </li>
                                                        <li value="EUR" class="_3NNjg" data-test="ui-menu-item" onclick="select_currency('€')"><i class="fa fa-eur" aria-hidden="true"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="WXTuD">
                                <div class="_3SAiO _1wJD0 calculator-list-theme__label fx"> Срок</div>
                                <div data-test="ui-select" class="_129hA _129hA-fx">
                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                        <div class="_1DCZo"><input onchange="Get_PotrKr()" id="cur_period" type="text" readonly=""
                                                                   autocomplete="off" autocorrect="off"
                                                                   autocapitalize="off"
                                                                   spellcheck="off" class="_2ARmF _2qJ6u _16cFN"
                                                                   role="input" value="1 год"
                                                                   onclick="select_period();">
                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                 data-test="ui-select-input-icon">
                                                <svg class="SdEDi">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="#arrow-down-thin">
                                                        <svg viewBox="0 0 8.1 4.8" id="arrow-down-thin"
                                                             xmlns="http://www.w3.org/2000/svg" width="100%"
                                                             height="100%">
                                                            <path d="M7.8.4L4.1 4.1.4.4"></path>
                                                        </svg>
                                                    </use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <ul id="period" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                        <!--<li value="P1M" label="1 месяц" class="_3NNjg" data-test="ui-menu-item"
                                            data-reactid="205" onclick="select_period_srok('1 месяц')">1 месяц
                                        </li>
                                        <li value="P3M" label="3 месяца" class="_3NNjg " data-test="ui-menu-item"
                                            onclick="select_period_srok('3 месяца')">3 месяца
                                        </li>
                                        <li value="P6M" label="6 мес¤цев" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('6 месяцев')">6 месяцев
                                        </li>
                                        <li value="P9M" label="9 месяцев" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('9 месяцев')">9 месяцев
                                        </li>-->
                                        <li value="P1Y" label="1 год" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('1 год')">1 год
                                        </li>
                                        <li value="P2Y" label="2 года" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('2 года')">2 года
                                        </li>
                                        <li value="P3Y" label="3 года" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('3 года')">3 года
                                        </li>
                                        <li value="P4Y" label="4 года" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('4 года')">4 года
                                        </li>
                                        <li value="P5Y" label="5 лет" class="_3NNjg" data-test="ui-menu-item"
                                            data-reactid="213" onclick="select_period_srok('5 лет')">5 лет
                                        </li>
                                        <li value="P6Y" label="6 лет" class="_3NNjg" data-test="ui-menu-item"
                                            data-reactid="214" onclick="select_period_srok('6 лет')">6 лет
                                        </li>
                                        <li value="P7Y" label="7 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('7 лет')">7 лет
                                        </li>
                                        <li value="P8Y" label="8 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('8 лет')">8 лет
                                        </li>
                                        <li value="P9Y" label="9 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('9 лет')">9 лет
                                        </li>
                                        <li value="P10Y" label="10 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('10 лет')">10 лет
                                        </li>
                                        <li value="P15Y" label="15 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('15 лет')">15 лет
                                        </li>
                                        <li value="P20Y" label="20 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('20 лет')">20 лет
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="WXTuD _129hA-fx1" data-reactid="221" style="display: none;">
                                <button onclick="show_dop()"
                                        class="_2sdWW calculator-list-theme__button-conditions _1VABv _3zDyU _3x77s"
                                        type="button" data-test="ui-button" data-reactid="222">+ Еще условия
                                </button>
                            </div>
                            <div class="WXTuD _1mLgv _129hA-fx1" data-reactid="223">
                                <button href="#list_bank"
                                        class="_2sdWW calculator-list-theme__button-selection RaZ2S _3zDyU _3x77s"
                                        type="button" data-test="ui-button" data-reactid="224"><span class="zTFG-"
                                                                                                     data-reactid="225">Подобрать</span><span
                                            class="-I2py" data-reactid="226"><svg class="_2MAZT" data-reactid="227"><use
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#arrow-down-thin"
                                                    data-reactid="228"></use></svg></span></button>
                            </div>
                        </div>
                        <div style="margin:30px; display: none;"><a class="dop_" onclick="show_dop()"> Дополнительные
                                условия <i
                                        class="fa fa-angle-down"></i></a></div>
            </section>
            <div data-reactid="270" id="sort-params">
                <div style="padding-bottom: 0;" data-reactid="271"></div>
                <div class="_3ThEC _7ol-- cr-cards" style="transform: translateZ(0px);" data-reactid="272">
                    <div class="_1Xn7Q" data-reactid="273">
                        <span class="" data-reactid="274"><!-- react-text: 275 -->Сортировка:<!-- /react-text --></span>
                    </div>
                    <div class="_1Xn7Q" data-cust-att="sort-parameter" data-reactid="276" data-type="rate">
                    <span class="_2BeSz" data-reactid="277" data-cust-att="sort-parameter" data-type="rate"><!-- react-text: 278 -->Ставка&nbsp;
                        <!-- /react-text -->
                        <svg data-cust-att="sort-parameter" data-type="rate" width="16" height="16"
                             viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                    </span>
                    </div>
                    <div class="_1Xn7Q" data-cust-att="sort-parameter" data-reactid="281" data-type="rating">
                    <span class="_2BeSz" data-reactid="282" data-cust-att="sort-parameter" data-type="rating"><!-- react-text: 283 -->Рейтинг
                        <!-- /react-text --><svg data-cust-att="sort-parameter" data-type="pay" width="16" height="16"
                                                 viewBox="0 0 1792 1792"
                                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                    </span>
                    </div>
                    <div class="_1Xn7Q h1KaH" data-cust-att="sort-parameter" data-reactid="286" data-type="income">
                    <span class="_2BeSz" data-reactid="287" data-cust-att="sort-parameter" data-type="income"><!-- react-text: 288 -->Доход&nbsp;
                        <!-- /react-text --><svg data-cust-att="sort-parameter" data-type="overpay" width="16"
                                                 height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                        </span>
                    </div>
                </div>
            </div>
            <input id="id_theme" name="id_theme" type="hidden" value="<? echo get_template_directory_uri() ?>">
            <div id="list_bank" class="only-this-form only-this-form2"></div>
            <a href="#" id="loadMore" class="cr-cards">Загрузить больше предложений&nbsp;
                <svg data-cust-att="sort-parameter" data-type="rate" width="16" height="16" viewBox="0 0 1792 1792"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                </svg>
            </a>
        </div>


        <!--<div class="kredit-request-form">
            <form class="krf-1" id="krf-1" action="/" method="post">

            </form>
        </div>-->
    </div>
</div>
</div>
<?php get_footer(); ?>
<div class="_2Jclz _2fZko _1odi0 _3m0xh" id="overlay" style="display:none;">
    <div class="ud9DQ _21AWC _2t8V0"></div>
    <div class="_2TVkK  _3BjeW _3dfdz _2Muap">
        <section class="_2tiCJ">
            <div>
                <div class="_20lkO">
                    <div class="_282xc">
                        <div class="_321bS">
                            <div class="_1FhHf"><i class="fa fa-times-circle-o" aria-hidden="true"
                                                   style="font-size:40px" onclick="close_dop()"></i></div>
                            <div class="_1bMAp">
                                <div class="_1-qkH">
                                    <div class="_261bl">
                                        <div class="smgEc _1MiQb">Все условия</div>
                                        <div class="_3W8tQ">
                                            <div class="_1rc8I" data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Выберите сумму кредита</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="price_dop"
                                                                                       class="_2ARmF _2qJ6u _3uy56 _3I6R2"
                                                                                       name="price_dop"
                                                                                       onkeypress="price_change_dop()">
                                                                <div id="slider-range_dop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Валюта</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_currency_dop" type="text"
                                                                                       readonly="" autocomplete="off"
                                                                                       autocorrect="off"
                                                                                       autocapitalize="off"
                                                                                       spellcheck="off"
                                                                                       class="_2ARmF _2qJ6u _16cFN "
                                                                                       value="&#8381;"
                                                                                       onclick="select_cur_dop();">
                                                                <ul id="currency_dop" class=" _2cR3J"
                                                                    data-test="ui-select-values">
                                                                    <li value="RUB" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&#8381;')"><i
                                                                                class="fa fa-rub"
                                                                                aria-hidden="true"></i></li>
                                                                    <li value="USD" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&#36;')"><i
                                                                                class="fa fa-usd"
                                                                                aria-hidden="true"></i></li>
                                                                    <li value="EUR" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&euro;')"><i
                                                                                class="fa fa-eur"
                                                                                aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0"> Срок</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_period_dop" type="text"
                                                                                       readonly="" autocomplete="off"
                                                                                       autocorrect="off"
                                                                                       autocapitalize="off"
                                                                                       spellcheck="off"
                                                                                       class="_2ARmF _2qJ6u"
                                                                                       role="input" value="3 года"
                                                                                       onclick="select_period_dop();">
                                                                <ul id="period_dop" class="_3IKDE _2cR3J"
                                                                    data-test="ui-select-values">
                                                                   <!-- <li value="1m" label="1 месяц" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="205"
                                                                        onclick="select_period_srok_dop('1 месяц')">1
                                                                        месяц
                                                                    </li>
                                                                    <li value="3m" label="3 месяца" class="_3NNjg "
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('3 месяца')">3
                                                                        месяца
                                                                    </li>
                                                                    <li value="6m" label="6 мес¤цев" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('6 месяцев')">6
                                                                        месяцев
                                                                    </li>
                                                                    <li value="9m" label="9 месяцев" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('9 месяцев')">9
                                                                        месяцев
                                                                    </li>-->
                                                                    <li value="1" label="1 год" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('1 год')">1 год
                                                                    </li>
                                                                    <li value="2" label="2 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('2 года')">2
                                                                        года
                                                                    </li>
                                                                    <li value="3" label="3 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('3 года')">3
                                                                        года
                                                                    </li>
                                                                    <li value="4" label="4 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('4 года')">4
                                                                        года
                                                                    </li>
                                                                    <li value="5" label="5 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="213"
                                                                        onclick="select_period_srok_dop('5 лет')">5 лет
                                                                    </li>
                                                                    <li value="6" label="6 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="214"
                                                                        onclick="select_period_srok_dop('6 лет')">6 лет
                                                                    </li>
                                                                    <li value="7" label="7 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('7 лет')">7 лет
                                                                    </li>
                                                                    <li value="8" label="8 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok('8 лет')">8 лет
                                                                    </li>
                                                                    <li value="9" label="9 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('9 лет')">9 лет
                                                                    </li>
                                                                    <li value="10" label="10 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('10 лет')">10
                                                                        лет
                                                                    </li>
                                                                    <li value="15" label="15 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('15 лет')">15
                                                                        лет
                                                                    </li>
                                                                    <li value="20" label="20 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('20 лет')">20
                                                                        лет
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Ваш город</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_city_dop" type="text"
                                                                                       class="_2ARmF _2qJ6u" value=""
                                                                                       onchange="change_city();Get_PotrKr();">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_2xdGi _1wJD0">Цель</div>
                                                    <div class="_2J6fq">
                                                        <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                            <div class="_3_n91 AePXT _1fswf"
                                                                 data-test="ui-slider-input-input">
                                                                <div class="_1DCZo"><input id="cur_target" type="text"
                                                                                           readonly=""
                                                                                           class="_2ARmF _2qJ6u _16cFN"
                                                                                           value="Любая"
                                                                                           onclick="select_cur_target();">
                                                                    <ul id="target" class=" _2cR3J"
                                                                        data-test="ui-select-values">
                                                                        <li value="Любая" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Любая')">Любая
                                                                        </li>
                                                                        <li value="Рефинансирование" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Рефинансирование')">
                                                                            Рефинансирование
                                                                        </li>
                                                                        <li value="Ремонт" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Ремонт')">Ремонт
                                                                        </li>
                                                                        <li value="Обучение" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Обучение')">Обучение
                                                                        </li>
                                                                        </li>
                                                                        <li value="Развитие личного подсобного хозяйства"
                                                                            class="_3NNjg" data-test="ui-menu-item"
                                                                            onclick="select_target('Развитие личного подсобного хозяйства')">
                                                                            Развитие личного подсобного хозяйства
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Залог</label>
                                                        <div class="_1DCZo "><input id="zalog_cur" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="zalog_select()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="zalog" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item" onclick="select_zalog('Неважно')">
                                                            Неважно
                                                        </li>
                                                        <li value="Без залога" label="Без залога" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_zalog('Без залога')">Без залога
                                                        </li>
                                                        <li value="Залог имеющейся недвижимости"
                                                            label="Залог имеющейся недвижимости" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_zalog('Залог имеющейся недвижимости')">Залог
                                                            имеющейся недвижимости
                                                        </li>
                                                        <li value="Залог имеющегося ТС" label="Залог имеющегося ТС"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_zalog('Залог имеющегося ТС')">Залог
                                                            имеющегося ТС
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Поручительство</label>
                                                        <div class="_1DCZo "><input id="cur_poruch" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="select_cur_poruch();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="poruch" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item" onclick="select_poruch('Неважно')">
                                                            Неважно
                                                        </li>
                                                        <li value="Без поручителей" label="Без поручителей"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_poruch('Без поручителей')">Без поручителей
                                                        </li>
                                                        <li value="Требуется поручитель" label="Требуется поручитель"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_poruch('Требуется поручитель')">Требуется
                                                            поручитель
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Подтверждение дохода</label>
                                                        <div class="_1DCZo "><input id="cur_podtv_dohod" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Любое"
                                                                                    onclick="select_cur_podtv_dohod();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="podtv_dohod" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Любое" label="Любое" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Любое')">Любое
                                                        </li>
                                                        <li value="Без справок о доходах" label="Без справок о доходах"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Без справок о доходах')">Без
                                                            справок о доходах
                                                        </li>
                                                        <li value="Справка в свободной форме"
                                                            label="Справка в свободной форме" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка в свободной форме')">
                                                            Справка в свободной форме
                                                        </li>
                                                        <li value="Справка по форме банка"
                                                            label="Справка по форме банка" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка по форме банка')">
                                                            Справка по форме банка
                                                        </li>
                                                        <li value="Справка 2-НДФЛ" label="Справка 2-НДФЛ"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка 2-НДФЛ')">Справка
                                                            2-НДФЛ
                                                        </li>
                                                        <li value="Справка 3-НДФЛ" label="Справка 3-НДФЛ"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка 3-НДФЛ')">Справка
                                                            3-НДФЛ
                                                        </li>
                                                        <li value="Справка из ПФР" label="Справка из ПФР"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка из ПФР')">Справка из
                                                            ПФР
                                                        </li>
                                                        <li value="Выписка по счету" label="Выписка по счету"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Выписка по счету')">Выписка по
                                                            счету
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Форма выдачи</label>
                                                        <div class="_1DCZo "><input id="cur_form_vidach" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Любая"
                                                                                    onclick="select_cur_form_vidach()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="form_vidach" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Любая" label="Любая" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('Любая')">Любая
                                                        </li>
                                                        <li value="Наличными" label="Наличными" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('Наличными')">Наличными
                                                        </li>
                                                        <li value="На карту" label="На карту" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('На карту')">На карту
                                                        </li>
                                                        <li value="На счет" label="На счет" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('На счет')">На счет
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Срок рассмотрения</label>
                                                        <div class="_1DCZo "><input id="cur_srok_rasm" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_cur_srok_rasm()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="srok_rasm" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('Неважен')">Неважен
                                                        </li>
                                                        <li value="За 1 час" label="За 1 час" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('За 1 час')">За 1 час
                                                        </li>
                                                        <li value="В течение 1 дня" label="В течение 1 дня"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('В течение 1 дня')">В течение 1
                                                            дня
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I _1pC8g"><label id="label_strahov" class="_271MP"
                                                                              data-test="ui-checkbox"><input
                                                            id="strahov" type="checkbox" class="_13ChN"
                                                            onclick="select_strahov();"><span class="zDjae">Личное страхование заёмщика</span></label>
                                            </div>
                                        </div>
                                        <div class="_3W8tQ">
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Регистрация</label>
                                                        <div class="_1DCZo "><input id="cur_registr" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Не важно"
                                                                                    onclick="select_registr()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlНе важноink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="registr" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Не важно" label="Не важно"
                                                            class="_3NNjg _3R8Y8 _2Karn" data-test="ui-menu-item"
                                                            onclick="select_cur_registr('Не важно')">Не важно
                                                        </li>
                                                        <li value="Временная" label="Временная" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_registr('Временная')">Временная
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div class="_3_n91 _1fswf" data-test="ui-input"><label
                                                            class="_3CBLq _1wJD0">Возраст заемщика</label>
                                                    <div class="_1DCZo"><input id="cur_age" type="text"
                                                                               autocomplete="off" autocorrect="off"
                                                                               autocapitalize="off" spellcheck="off"
                                                                               class="_2ARmF _2qJ6u" role="input"
                                                                               value="" onchange="Get_PotrKr()"></div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Категория заёмщика</label>
                                                        <div class="_1DCZo "><input id="cur_category" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="select_category()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="category" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Неважно')">Неважно
                                                        </li>
                                                        <li value="Бюджетные" label="Бюджетные" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Бюджетные')">Бюджетные
                                                        </li>
                                                        <li value="Предприниматели" label="Предприниматели"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Предприниматели')">
                                                            Предприниматели
                                                        </li>
                                                        <li value="Зарплатные клиенты" label="Зарплатные клиенты"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Зарплатные клиенты')">
                                                            Зарплатные клиенты
                                                        </li>
                                                        <li value="Клиенты банка" label="Клиенты банка"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Клиенты банка')">Клиенты банка
                                                        </li>
                                                        <li value="Особая категория" label="Особая категория"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Особая категория')">Особая
                                                            категория
                                                        </li>
                                                        <li value="Пенсионеры" label="Пенсионеры" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Пенсионеры')">Пенсионеры
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Общий трудовой стаж</label>
                                                        <div class="_1DCZo "><input id="cur_stag" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_stag()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="stag" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_stag('Неважен')">Неважен
                                                        </li>
                                                        <li value="Менее 1 года" label="Менее 1 года"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag('Менее 1 года')">Менее 1 года
                                                        </li>
                                                        <li value="1 год и более" label="1 год и более"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag('1 год и более')">1 год и более
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Стаж на последнем месте</label>
                                                        <div class="_1DCZo "><input id="cur_stag_last" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_stag_last()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="stag_last" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Неважен')">Неважен
                                                        </li>
                                                        <li value="Менее 3 месяцев" label="Менее 3 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Менее 3 месяцев')">Менее 3
                                                            месяцев
                                                        </li>
                                                        <li value="От 3 до 6 месяцев" label="От 3 до 6 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('От 3 до 6 месяцев')">От 3 до
                                                            6 месяцев
                                                        </li>
                                                        <li value="Более 6 месяцев" label="Более 6 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Более 6 месяцев')">Более 6
                                                            месяцев
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I _1pC8g"><label id="label_gr" class="_271MP"
                                                                              data-test="ui-checkbox"><input id="cur_gr"
                                                                                                             type="checkbox"
                                                                                                             class="_13ChN"
                                                                                                             value="0"
                                                                                                             readonly=""
                                                                                                             onclick="select_gr()"><span
                                                            class="zDjae">Не являюсь гражданином РФ</span></label></div>
                                        </div>
                                    </div>
                                    <div id="footer_dop_cr" class="zPvOY">
                                        <button class="_2sdWW _2OZ3R RaZ2S _3zDyU _3x77s" type="button"
                                                data-test="ui-button">Найдено 32 кредита
                                        </button>
                                        <button class="_2sdWW _2OZ3R _1VABv _3zDyU _3x77s _3Ldwp" type="button">Сбросить
                                            фильтры
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery("._129hA-fx1").on("click", "button", function (event) {
            event.preventDefault();
            var id = jQuery(this).attr('href'),
                top = jQuery(id).offset().top - 80;
            jQuery('body,html').animate({scrollTop: top}, 500);
        });
    });
</script>
<script src="<?= get_template_directory_uri(); ?>/assets/front/css/kredit_theme/js/table-sort-and-load-more-deposits.js"></script>
<script>$(function () {
        $("#slider-range").slider({
            range: true,
            min: 1,
            max: 1500,
            values: [1, 100],
            step: 1,
            slide: function (event, ui) {
                $("#price").val(ui.values[1] * 1000);
                $("#slider-range_dop").slider("option", "values", [1, ui.values[1] * 1000]);
                document.getElementById('price_dop').value = ui.values[1] * 1000;
                Get_PotrKr();
            }
        });
        $("#price").val($("#slider-range").slider("values", 1) * 1000);
    });    </script>
<script>$(function () {
        $("#slider-range_dop").slider({
            range: true,
            min: 1,
            max: 1500,
            values: [1, 1500],
            step: 1,
            slide: function (event, ui) {
                $("#price_dop").val(ui.values[1] * 1000);
                $("#slider-range").slider("option", "values", [1, ui.values[1] * 1000]);
                document.getElementById('price').value = ui.values[1] * 1000;
                Get_PotrKr();
            }
        });
        $("#price_dop").val($("#slider-range_dop").slider("values", 1) * 1000);
    });    </script>
<script>        function show_dop() {
        $('#overlay').show();
    }
    function close_dop() {
        $('#overlay').hide();
    }
    function clear_dop() {
        $("#slider-range_dop").slider("option", "values", [1, 102]); //changeFX was 500
        $("#price_dop").val(100000); //changeFX was 500
        $("#slider-range").slider("option", "values", [1, 102]); //changeFX was 500
        $("#price").val(100000); //changeFX was 500
        $("#cur_period").val('3 года');
        $("#cur_period_dop").val('3 года');
        $("#cur_city_dop").val('');
        $("#zalog_cur").val('Неважно');
        $("#cur_target").val('Любая');
        $("#cur_poruch").val('Неважно');
        $("#cur_podtv_dohod").val('Любое');
        $("#cur_form_vidach").val('Любая');
        $("#cur_srok_rasm").val('Неважен');
        $("#cur_registr").val('Не важно');
        $("#cur_category").val('Неважно');
        $("#cur_stag").val('Неважен');
        $("#cur_stag_last").val('Неважен');
        select_currency("₽");
        Get_PotrKr();
    }            </script>
<script> function select_cur_dop() {
        if ($("#currency_dop").css('visibility') == 'hidden') {
            $("#currency_dop").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#currency_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    } </script>
<script>function select_cur() {
        if ($("#currency").css('visibility') == 'hidden') {
            $("#currency").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#currency").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    } </script>
<script>function select_cur_target() {
        if ($("#target").css('visibility') == 'hidden') {
            $("#target").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#target").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_poruch() {
        if ($("#poruch").css('visibility') == 'hidden') {
            $("#poruch").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#poruch").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_form_vidach() {
        if ($("#form_vidach").css('visibility') == 'hidden') {
            $("#form_vidach").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#form_vidach").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_srok_rasm() {
        if ($("#srok_rasm").css('visibility') == 'hidden') {
            $("#srok_rasm").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#srok_rasm").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_podtv_dohod() {
        if ($("#podtv_dohod").css('visibility') == 'hidden') {
            $("#podtv_dohod").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#podtv_dohod").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_category() {
        if ($("#category").css('visibility') == 'hidden') {
            $("#category").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#category").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_stag() {
        if ($("#stag").css('visibility') == 'hidden') {
            $("#stag").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#stag").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_stag_last() {
        if ($("#stag_last").css('visibility') == 'hidden') {
            $("#stag_last").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#stag_last").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_registr() {
        if ($("#registr").css('visibility') == 'hidden') {
            $("#registr").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#registr").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_period() {
        if ($("#period").css('visibility') == 'hidden') {
            $("#period").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#period").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>
    function select_period_kr_form() {
        $("#period-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_employment_type_kr_form() {
        $("#employment-type-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_creditSecurity_kr_form() {
        $("#creditSecurity-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>function select_period_dop() {
        if ($("#period_dop").css('visibility') == 'hidden') {
            $("#period_dop").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#period_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function zalog_select() {
        if ($("#zalog").css('visibility') == 'hidden') {
            $("#zalog").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#zalog").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function price_change_dop() {
        a = document.getElementById('price_dop').value;
        if (a >= 10000 && a <= 15000000) {
            $("#slider-range_dop").slider("option", "values", [1, a / 10000]);
            $("#slider-range").slider("option", "values", [1, a / 10000]);
            Get_PotrKr();
        }
    }</script>
<script>function price_change() {
        a = document.getElementById('price').value;
        if (a >= 10000 && a <= 15000000) {
//            $("#slider-range").slider("option", "values", [1, a / 10000]);
//            $("#slider-range_dop").slider("option", "values", [1, a / 10000]);
            Get_PotrKr();
        }
    }</script>
<script>function select_currency(a) {
        $("#cur_currency").val(a);
        $("#cur_currency_dop").val(a);
        $("#currency").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_currency_dop(a) {
        $("#cur_currency_dop").val(a);
        $("#cur_currency").val(a);
        $("#currency_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_poruch(a) {
        $("#cur_poruch").val(a);
        $("#poruch").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_podtv_dohod(a) {
        $("#cur_podtv_dohod").val(a);
        $("#podtv_dohod").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_form_vidach(a) {
        $("#cur_form_vidach").val(a);
        $("#form_vidach").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_srok_rasm(a) {
        $("#cur_srok_rasm").val(a);
        $("#srok_rasm").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_registr(a) {
        $("#cur_registr").val(a);
        $("#registr").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_category(a) {
        $("#cur_category").val(a);
        $("#category").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_stag(a) {
        $("#cur_stag").val(a);
        $("#stag").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_stag_last(a) {
        $("#cur_stag_last").val(a);
        $("#stag_last").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_zalog(a) {
        $("#zalog_cur").val(a);
        $("#zalog").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_target(a) {
        $("#cur_target").val(a);
        $("#target").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_period_srok(a) {
        $("#cur_period").val(a);
        $("#cur_period_dop").val(a);
        $("#period").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>
    function select_period_srok_kr_form(a) {
        $("#cur_period-kr-form").val(a);
        $("#period-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_employment_type_ul_kr_form(a) {
        $("#employmentType").val(a);
        $("#employment-type-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_creditSecurity_ul_kr_form(a) {
        $("#creditSecurity").val(a);
        $("#creditSecurity-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>function select_period_srok_dop(a) {
        $("#cur_period_dop").val(a);
        $("#cur_period").val(a);
        $("#period_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function toggle_menu(i) {
        el = document.getElementsByClassName('-link');
        $(".-link").removeClass("-active");
        $('#navigation').attr('data-current', i);
        /*el[i].addClass('-active');*/
    }</script>
<script>function select_strahov() {
        var c = document.querySelector('#strahov');
        if (c.checked) {
            $("#label_strahov").addClass('_3QFEG');
        } else {
            $("#label_strahov").removeClass('_3QFEG');
        }
        Get_PotrKr();
    }
    function select_gr() {
        var gr = document.querySelector('#cur_gr');
        if (gr.checked) {
            $("#label_gr").addClass('_3QFEG');
        } else {
            $("#label_gr").removeClass('_3QFEG');
        }
        Get_PotrKr();
    }</script>
<script>function Get_PotrKr() {
        $.ajax({
            url: "https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/select_deposits.php",
            type: "POST",
            error: function (response) {
                $(".status").html(response.status + "<br>" + response.msg);
                console.log("Ошибка");
            },
            success: function (response) {
                res = jQuery.parseJSON(response);

                if ($('#navigation').attr('data-current', '1')) {
                    res.sort(function (a, b) {
                        return a.rating < b.rating;
                    });
                    res.sort();
                    console.log(res);
                }
                else {
                    res.sort(function (a, b) {
                        return a.name > b.name;
                    });
                    res.sort();
                    console.log(res);
                }
                var data = {"bank_offers": res};
                console.log(data);
                change(data);
                loadmore();
//                console.log("Успешно загрузили данные");
            },
        });
    }
    Get_PotrKr();</script>
<!--Openstat-->
<span id="openstat1"></span>
<script type="text/javascript">
    var openstat = {counter: 1, next: openstat};
    (function (d, t, p) {
        var j = d.createElement(t);
        j.async = true;
        j.type = "text/javascript";
        j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
        var s = d.getElementsByTagName(t)[0];
        s.parentNode.insertBefore(j, s);
    })(document, "script", document.location.protocol);
</script>
<!--/Openstat-->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2953540", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div>
        <img src="//top-fwz1.mail.ru/counter?id=2953540;js=na" style="border:0;position:absolute;left:-9999px;" alt=""/>
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter47665804 = new Ya.Metrika2({
                    id: 47665804,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    ut: "noindex"
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/47665804?ut=noindex" style="position:absolute; left:-9999px;" alt=""/>
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->