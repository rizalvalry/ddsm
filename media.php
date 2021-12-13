<?php
error_reporting(0);
session_start();
require "config/koneksi.php";
$query00 = $db->query("SELECT nama_toko,email_pengelola,nomor_hp,meta_deskripsi,static_content, alamat, nomor_hp, email_protokol, gambar, alamat_web FROM profil");
$row00 = $query00->fetch_assoc();
$nama_toko00 = explode(" ", $row00['nama_toko']);
$tahun = date("Y");
?>


        <!DOCTYPE html>
        <html lang="en-US">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

        <head>
        <title><?= $row00['nama_toko']; ?> | <?php include 'seo/dina_meta1.php'; ?></title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta property="twitter:twitter" content="<?php include 'seo/dina_meta1.php'; ?>" />
        <meta property="twitter:description" content="<?php include 'seo/dina_meta1.php'; ?>" />
        <meta property="og:type" content="website" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
        <meta name="<?php include 'seo/dina_meta2.php'; ?>" content="True" />
        <meta name="description" content="<?php include 'seo/dina_meta2.php'; ?>" />
        <meta name="keywords" content="<?php include 'seo/dina_meta2.php'; ?>" />
        <meta name="robots" content="index, follow" />
        
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- individu source -->
	



    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="<?php include 'seo/dina_meta2.php'; ?> Feed" href="feed/" />
    <link rel="alternate" type="application/rss+xml" title="<?php include 'seo/dina_meta2.php'; ?> Comments Feed" href="comments/feed/" />

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min34b1.css?ver=5.1.11' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles3c21.css?ver=5.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='jupiterx-css' href='wp-content/uploads/jupiterx/compiler/jupiterx/b22a5b97359.css?ver=1.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-handler-css-css' href='wp-content/plugins/jet-elements/cherry-framework/modules/cherry-handler/assets/css/cherry-handler-styles.min8c67.css?ver=1.5.11' type='text/css' media='all' />
    <link rel='stylesheet' id='jet-elements-css' href='wp-content/plugins/jet-elements/assets/css/jet-elementsedf9.css?ver=1.15.4' type='text/css' media='all' />
    <link rel='stylesheet' id='jet-elements-skin-css' href='wp-content/plugins/jet-elements/assets/css/jet-elements-skinedf9.css?ver=1.15.4' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minb2f9.css?ver=4.3.0' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.min355d.css?ver=2.5.7' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min355d.css?ver=2.5.7' type='text/css' media='all' />
    <link rel='stylesheet' id='raven-frontend-css' href='wp-content/plugins/raven/assets/css/frontend.minf488.css?ver=1.1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/global3efd.css?ver=1564730200' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-6-css' href='wp-content/uploads/elementor/css/post-6bcf5.css?ver=1619600746' type='text/css' media='all' />
    <link rel='stylesheet' id='popup-maker-site-css' href='wp-content/uploads/pum/pum-site-styles809a.css?generated=1574326896&amp;ver=1.8.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-87-css' href='wp-content/uploads/elementor/css/post-87ca65.css?ver=1564730204' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-102-css' href='wp-content/uploads/elementor/css/post-1025640.css?ver=1564730205' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.1.11" />
    <!-- <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embede69e.json?url=http%3A%2F%2Fwww.transpac-logistics.co.id%2F" /> -->
    <!-- <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed8d8f?url=http%3A%2F%2Fwww.transpac-logistics.co.id%2F&amp;format=xml" /> -->
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="pingback" href="xmlrpc.php">
    <!-- <link rel="icon" href="wp-content/uploads/2019/03/cropped-logo-trans-paific-02-32x32.png" sizes="32x32" /> -->
    <!-- <link rel="icon" href="wp-content/uploads/2019/03/cropped-logo-trans-paific-02-192x192.png" sizes="192x192" /> -->
    <!-- <link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2019/03/cropped-logo-trans-paific-02-180x180.png" /> -->
    <!-- <meta name="msapplication-TileImage" content="http://www.transpac-logistics.co.id/wp-content/uploads/2019/03/cropped-logo-trans-paific-02-270x270.png" /> -->
    <style type="text/css" id="wp-custom-css">
        /* #nav-menu .custom-nav, #sticky-nav-menu .custom-nav {
    padding: 0 15px;
    position: relative;
}

#nav-menu .custom-nav a, #sticky-nav-menu .custom-nav a {
    margin-top: calc(50% - 52px);
    height: 40px !important;
    background: #19ac54;
    color: white;
    border-radius: 8px;
    text-transform: capitalize;
} */
        
        .custom-nav .raven-menu-item:before {
            /* 	content: "\f2f6"; */
            content: "";
            background-image: url('wp-content/uploads/2019/04/login-2.png');
            width: 20px;
            height: 20px;
            background-size: contain;
        }
        
        .custom-nav .raven-menu-item {
            height: 100%;
        }
        
        .custom-nav .raven-menu-item:hover {
            background: none !important;
        }
        
        .p-no-margin p {
            margin: 0;
        }
        
        .link-footer a {
            color: #19ac54;
        }
        
        .margin-min {
            margin-bottom: 10px !important;
        }
        
        .custom-icon .elementor-icon-list-icon {
            width: 10px !important;
        }
        
        .custom-nav {
            display: none !important;
        }
        
        @media only screen and (max-width: 480px) {
            .elementor-text-editor {
                text-align: center !important
            }
            html.pum-open.pum-open-overlay,
            html.pum-open.pum-open-overlay.pum-open-fixed .pum-overlay {
                overflow: hidden!important;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .raven-search-form-button {
                padding-right: 20px !important;
            }
        }
        
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            /* 	.raven-site-logo img,
	.raven-site-logo-tablet{
		width: 260px !important;
	} */
            .p-no-margin.link-footer {
                margin-bottom: 6px !important;
            }
        }
        
        @media only screen and (min-width: 1025px) {
            #nav-menu * {
                height: 100% !important;
            }
            #nav-menu .elementor-widget-raven-search-form {
                height: fit-content !important;
            }
        }
        
        .Icon-Mail {
            background-image: url('wp-content/uploads/2019/11/mail_outline-24px.png');
            width: 20px;
            height: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            cursor: pointer;
        }

        /* display this row with flex and use wrap (= respect columns' widths) */

        .row-flex {
        display: flex;
        flex-wrap: wrap;
        }


        /* vertical spacing between columns */

        /* [class*="col-"] {
        margin-bottom: 30px;
        } */

        .content {
        height: 100%;
        padding: 20px 20px 10px;
        color: #fff;
        }

        [class^="ico-"], [class*=" ico-"]{
        font: normal 1em/1 Arial, sans-serif;
        display: inline-block;
        }


        .ico-times:before{ content: "\2716"; }
        .ico-check:before{ content: "\2714"; }
    </style>
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-6 no-js elementor-default elementor-template-full-width elementor-page elementor-page-6 jupiterx-header-sticky jupiterx-header-tablet-behavior-off jupiterx-header-mobile-behavior-off jupiterx-header-overlapped jupiterx-header-overlapped-tablet jupiterx-header-overlapped-mobile"
    itemscope="itemscope" itemtype="http://schema.org/WebPage" data-markup-id="jupiterx_body">
    <div class="jupiterx-site" data-markup-id="jupiterx_site">
        
        
    <!-- header -->
    <header class="jupiterx-header jupiterx-header-custom jupiterx-header-sticky-custom" data-jupiterx-settings="{&quot;breakpoint&quot;:&quot;767.98&quot;,&quot;template&quot;:&quot;87&quot;,&quot;stickyTemplate&quot;:&quot;102&quot;,&quot;behavior&quot;:&quot;sticky&quot;,&quot;offset&quot;:&quot;50&quot;,&quot;overlap&quot;:&quot;desktop,tablet,mobile&quot;}"
            role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader" data-markup-id="jupiterx_header">
            <!-- open output: jupiterx_custom_header_template -->
            <div data-elementor-type="header" data-elementor-id="87" class="elementor elementor-87" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section class="elementor-element elementor-element-06c7e40 elementor-section-content-middle custom-header elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="06c7e40"
                            data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-ab2966c elementor-column elementor-col-33 elementor-top-column" data-id="ab2966c" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ecbed5c elementor-widget elementor-widget-raven-site-logo" data-id="ecbed5c" data-element_type="widget" data-widget_type="raven-site-logo.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="raven-widget-wrapper">
                                                            <div class="raven-site-logo">
                                                                <a class="raven-site-logo-link" href="">
                                                                    <img src="gambar/toko/<?php echo $row00['gambar']; ?>" alt="<?php include 'seo/dina_meta2.php'; ?>" class="raven-site-logo-desktop raven-site-logo-tablet raven-site-logo-mobile" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d5e1e31 raven-column-flex-end raven-column-flex-horizontal elementor-column elementor-col-66 elementor-top-column" data-id="d5e1e31" data-element_type="column" id="nav-menu">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-70220dc raven-breakpoint-tablet raven-nav-menu-align-right raven-nav-menu-stretch elementor-widget elementor-widget-raven-nav-menu" data-id="70220dc" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;mobile_layout&quot;:&quot;dropdown&quot;,&quot;submenu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;submenu_position&quot;:&quot;top&quot;}"
                                                    data-widget_type="raven-nav-menu.default">
                                                    <div class="elementor-widget-container">
                                                        <nav class="raven-nav-menu-main raven-nav-menu-horizontal">
                                                            <ul id="menu-70220dc" class="raven-nav-menu">
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-20"><a href="" aria-current="page" class="raven-menu-item raven-menu-item-<?php echo (basename($_SERVER['PHP_SELF'])=="home") ? "" : "" ?>">Home</a></li>
                                                            <?php
                                                                $query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE aktif=? AND lokasi=? ORDER BY urutan ASC");
                                                                $query4->bind_param("ss", $aktif4,$lokasi4);
                                                                $lokasi4 = "Public";
                                                                $aktif4  = "Y";
                                                                $query4->execute();
                                                                $result4 = $query4->get_result();
                                                                while ( $row4 = $result4->fetch_assoc() ){ ?>

                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a class="raven-menu-item" href="<?= $row4['link']; ?>"><?= $row4['nama_menu']; ?></a></li>

                                                            <?php } ?>
                                                            </ul>
                                                        </nav>
                                                        <div class="raven-nav-menu-toggle">
                                                            <div class="raven-nav-menu-toggle-button">
                                                                <span class="fa fa-bars"></span>
                                                            </div>
                                                        </div>
                                                        <nav class="raven-nav-menu-mobile raven-nav-menu-dropdown">
                                                            <div class="raven-container">
                                                                <ul id="menu-70220dc" class="raven-nav-menu">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-20"><a href="" aria-current="page" class="raven-menu-item raven-menu-item-">Home</a></li>
                                                                    <?php
                                                                        $query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE aktif=? AND lokasi=? ORDER BY urutan ASC");
                                                                        $query4->bind_param("ss", $aktif4,$lokasi4);
                                                                        $lokasi4 = "Public";
                                                                        $aktif4  = "Y";
                                                                        $query4->execute();
                                                                        $result4 = $query4->get_result();
                                                                        while ( $row4 = $result4->fetch_assoc() ){ ?>

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a class="raven-menu-item" href="<?= $row4['link']; ?>"><?= $row4['nama_menu']; ?></a></li>

                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3bf7239 elementor-widget elementor-widget-raven-search-form" data-id="3bf7239" data-element_type="widget" data-settings="{&quot;_skin&quot;:&quot;full&quot;}" data-widget_type="raven-search-form.full">
                                                    <div class="elementor-widget-container">
                                                        <form class="raven-search-form raven-search-form-full" method="get" action="http://www.transpac-logistics.co.id/" role="search">
                                                            <div class="raven-search-form-container">
                                                                <span class="raven-search-form-button raven-search-form-toggle fa fa-search" tabindex="-1"></span>
                                                            </div>
                                                            <div class="raven-search-form-lightbox">
                                                                <span class="raven-search-form-close" tabindex="-1">&times;</span>
                                                                <input class="raven-search-form-input" type="search" name="s" placeholder="" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- close output: jupiterx_custom_header_template -->
            <!-- open output: jupiterx_custom_header_sticky_template -->
            <div data-elementor-type="header" data-elementor-id="102" class="elementor elementor-102" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section class="elementor-element elementor-element-fab280b elementor-section-content-middle elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                            data-id="fab280b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-a194311 elementor-column elementor-col-50 elementor-top-column" data-id="a194311" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-08517ea elementor-widget elementor-widget-raven-site-logo" data-id="08517ea" data-element_type="widget" data-widget_type="raven-site-logo.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="raven-widget-wrapper">
                                                            <div class="raven-site-logo">
                                                                <a class="raven-site-logo-link" href="">
                                                                    <img src="gambar/toko/<?php echo $row00['gambar']; ?>" alt="<?php include 'seo/dina_meta2.php'; ?>" class="raven-site-logo-desktop" />
                                                                    <img src="gambar/toko/<?php echo $row00['gambar']; ?>" alt="<?php include 'seo/dina_meta2.php'; ?>" class="raven-site-logo-tablet raven-site-logo-mobile" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b7fdcb6 raven-column-flex-end raven-column-flex-horizontal elementor-column elementor-col-50 elementor-top-column" data-id="b7fdcb6" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-40464e6 raven-breakpoint-tablet raven-nav-menu-align-right raven-nav-menu-stretch elementor-widget elementor-widget-raven-nav-menu" data-id="40464e6" data-element_type="widget" id="sticky-nav-menu" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;mobile_layout&quot;:&quot;dropdown&quot;,&quot;submenu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;submenu_position&quot;:&quot;top&quot;}"
                                                    data-widget_type="raven-nav-menu.default">
                                                    <div class="elementor-widget-container">
                                                        <nav class="raven-nav-menu-main raven-nav-menu-horizontal">
                                                            <ul id="menu-40464e6" class="raven-nav-menu">
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-20"><a href="" aria-current="page" class="raven-menu-item raven-menu-item-">Home</a></li>
                                                            <?php
                                                                        $query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE aktif=? AND lokasi=? ORDER BY urutan ASC");
                                                                        $query4->bind_param("ss", $aktif4,$lokasi4);
                                                                        $lokasi4 = "Public";
                                                                        $aktif4  = "Y";
                                                                        $query4->execute();
                                                                        $result4 = $query4->get_result();
                                                                        while ( $row4 = $result4->fetch_assoc() ){ ?>

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a class="raven-menu-item" href="<?= $row4['link']; ?>"><?= $row4['nama_menu']; ?></a></li>

                                                                    <?php } ?>
                                                            </ul>
                                                        </nav>
                                                        <div class="raven-nav-menu-toggle">
                                                            <div class="raven-nav-menu-toggle-button">
                                                                <span class="fa fa-bars"></span>
                                                            </div>
                                                        </div>
                                                        <nav class="raven-nav-menu-mobile raven-nav-menu-dropdown">
                                                            <div class="raven-container">
                                                                <ul id="menu-40464e6" class="raven-nav-menu">
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-20"><a href="" aria-current="page" class="raven-menu-item raven-menu-item-">Home</a></li>
                                                            <?php
                                                                        $query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE aktif=? AND lokasi=? ORDER BY urutan ASC");
                                                                        $query4->bind_param("ss", $aktif4,$lokasi4);
                                                                        $lokasi4 = "Public";
                                                                        $aktif4  = "Y";
                                                                        $query4->execute();
                                                                        $result4 = $query4->get_result();
                                                                        while ( $row4 = $result4->fetch_assoc() ){ ?>

                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a class="raven-menu-item" href="<?= $row4['link']; ?>"><?= $row4['nama_menu']; ?></a></li>

                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c0bec16 elementor-widget elementor-widget-raven-search-form" data-id="c0bec16" data-element_type="widget" data-settings="{&quot;_skin&quot;:&quot;full&quot;}" data-widget_type="raven-search-form.full">
                                                    <div class="elementor-widget-container">
                                                        <form class="raven-search-form raven-search-form-full" method="get" action="http://www.transpac-logistics.co.id/" role="search">
                                                            <div class="raven-search-form-container">
                                                                <span class="raven-search-form-button raven-search-form-toggle fa fa-search" tabindex="-1"></span>
                                                            </div>
                                                            <div class="raven-search-form-lightbox">
                                                                <span class="raven-search-form-close" tabindex="-1">&times;</span>
                                                                <input class="raven-search-form-input" type="search" name="s" placeholder="" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- close output: jupiterx_custom_header_sticky_template -->
        </header>
    <!-- close header -->

    <!-- main body -->
    <?php include "tengah.php";?>
    <!-- end main body -->
                                                            
    <footer class="jupiterx-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter" data-markup-id="jupiterx_footer">
        <!-- open output: jupiterx_custom_footer_template -->
        <div data-elementor-type="footer" data-elementor-id="99" class="elementor elementor-99" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section class="elementor-element elementor-element-552d2fd elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="552d2fd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-266dcf6 elementor-column elementor-col-25 elementor-top-column" data-id="266dcf6" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f67120f elementor-widget elementor-widget-raven-site-logo" data-id="f67120f" data-element_type="widget" data-widget_type="raven-site-logo.default">
                                                <div class="elementor-widget-container">
                                                    <div class="raven-widget-wrapper">
                                                        <div class="raven-site-logo">
                                                            <a class="raven-site-logo-link" href="">
                                                                <img src="gambar/toko/<?php echo $row00['gambar']; ?>" alt="<?php include 'seo/dina_meta2.php'; ?>" class="raven-site-logo-desktop raven-site-logo-tablet raven-site-logo-mobile" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-08e681f elementor-column elementor-col-25 elementor-top-column" data-id="08e681f" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-5a37585 margin-min elementor-widget elementor-widget-heading" data-id="5a37585" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">at a glance</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f200894 elementor-mobile-align-center custom-icon elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="f200894" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <a href=""> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                <span class="elementor-icon-list-text">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="about-us-2/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                <span class="elementor-icon-list-text">About Us</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="request-for-quote/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                <span class="elementor-icon-list-text">Request for Quote</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="network-partner/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                <span class="elementor-icon-list-text">Network Partners</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="technology/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                <span class="elementor-icon-list-text">Technology</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-011f2f4 elementor-column elementor-col-25 elementor-top-column" data-id="011f2f4" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-e74f36a margin-min elementor-widget elementor-widget-heading" data-id="e74f36a" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">our products</h2>
                                                </div>
                                            </div>
                                            <section class="elementor-element elementor-element-2e4e145 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="2e4e145" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-element elementor-element-79b2579 elementor-column elementor-col-50 elementor-inner-column" data-id="79b2579" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-818350b elementor-mobile-align-center elementor-align-left custom-icon elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="818350b" data-element_type="widget" data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li class="elementor-icon-list-item">
                                                                                    <a href="shipping-to-usa-2/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                                        <span class="elementor-icon-list-text">Dompet Duafa</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="elementor-icon-list-item">
                                                                                    <a href="sea-freight-3/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                                        <span class="elementor-icon-list-text">Banking</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="elementor-icon-list-item">
                                                                                    <a href="air-freight-3/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                                        <span class="elementor-icon-list-text">Infaq</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="elementor-icon-list-item">
                                                                                    <a href="ecommerce/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                                        <span class="elementor-icon-list-text">E-commerce</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-23d3fd8 elementor-column elementor-col-50 elementor-inner-column" data-id="23d3fd8" data-element_type="column">
                                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-8c49c3b elementor-mobile-align-center custom-icon elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="8c49c3b" data-element_type="widget" data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li class="elementor-icon-list-item">
                                                                                    <a href="logistics-2/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                                        <span class="elementor-icon-list-text">Laboratorium</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="elementor-icon-list-item">
                                                                                    <a href="land-transportation-3/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                                        <span class="elementor-icon-list-text">Mobile Transportation</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="elementor-icon-list-item">
                                                                                    <a href="cargo-insurance-2/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                                        <span class="elementor-icon-list-text">Health Insurance</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c806083 elementor-column elementor-col-25 elementor-top-column" data-id="c806083" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-88f7731 margin-min elementor-widget elementor-widget-heading" data-id="88f7731" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">our CONTACT</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d33d377 p-no-margin link-footer elementor-widget elementor-widget-text-editor" data-id="d33d377" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p><a href="tel:+62 21 5890 5226">+62 857 8157 1742</a></p>
                                                        <p><a style="font-size: 14px;" href="mailto:<?= $row00['email_pengelola']?>">info@ddsaranamedika.id</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8bf346a elementor-mobile-align-center custom-icon elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="8bf346a" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <a href="contact-us/"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                <span class="elementor-icon-list-text">Contact Us</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d072895 elementor-mobile-align-center custom-icon elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="d072895" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <a href="http://ddsaranamedika.id:2095/" target="_blank"> <span class="elementor-icon-list-icon">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</span>
                                                                <span class="elementor-icon-list-text">Webmail ( Staff Only )</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- close output: jupiterx_custom_footer_template -->
    </footer>

    </div>
    <script type="text/javascript">
        (function() {
            document.body.className = document.body.className.replace('no-js', 'js');
        }());
    </script>
    <link rel='stylesheet' id='elementor-post-99-css' href='wp-content/uploads/elementor/css/post-999d20.css?ver=1573547849' type='text/css' media='all' />
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wp_load_style = ["wp-block-library.css", "contact-form-7.html", "jupiterx.html", "cherry-handler-css.html", "jet-elements.html", "jet-elements-skin.html", "elementor-icons.html", "font-awesome.html", "elementor-animations.html", "elementor-frontend.html", "raven-frontend.html", "elementor-global.html", "elementor-post-6.html", "popup-maker-site.html", "elementor-post-87.html", "elementor-post-102.css"];
        var wp_load_script = ["cherry-js-core.js", "contact-form-8.html", "jupiterx-2.html", "cherry-handler-js.html", "popup-maker-site.js"];
        var cherry_ajax = "f100ffc625";
        var ui_init_object = {
            "auto_init": "false",
            "targets": []
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/jet-elements/cherry-framework/modules/cherry-js-core/assets/js/min/cherry-js-core.min8c67.js?ver=1.5.11'></script>
    <!-- <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/www.transpac-logistics.co.id\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script> -->
    <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts3c21.js?ver=5.1.1'></script>
    <script type='text/javascript' src='wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
    <script type='text/javascript' src='wp-content/uploads/jupiterx/compiler/jupiterx/9f110407359.js?ver=1.2.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var jet_subscribe_form_ajax = {
            "action": "jet_subscribe_form_ajax",
            "nonce": "f2f5c5e21e",
            "type": "POST",
            "data_type": "json",
            "is_public": "true",
            "sys_messages": {
                "invalid_base_data": "Unable to process the request without nonce or server error",
                "no_right": "No right for this action",
                "invalid_nonce": "Stop CHEATING!!!",
                "access_is_allowed": "Access is allowed",
                "wait_processing": "Please wait, processing the previous request"
            }
        };
        // var cherryHandlerAjaxUrl = {
        //     "ajax_url": "http:\/\/www.transpac-logistics.co.id\/wp-admin\/admin-ajax.php"
        // };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/jet-elements/cherry-framework/modules/cherry-handler/assets/js/min/cherry-handler.min8c67.js?ver=1.5.11'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var pum_vars = {
            "version": "1.8.3",
            "ajaxurl": "http:\/\/www.transpac-logistics.co.id\/wp-admin\/admin-ajax.php",
            "restapi": "http:\/\/www.transpac-logistics.co.id\/wp-json\/pum\/v1",
            "rest_nonce": null,
            "default_theme": "433",
            "debug_mode": "",
            "disable_tracking": "",
            "home_url": "\/",
            "message_position": "top",
            "core_sub_forms_enabled": "1",
            "popups": []
        };
        var ajaxurl = "\/\/www.transpac-logistics.co.id\/wp-admin\/admin-ajax.php";
        var pum_debug_vars = {
            "debug_mode_enabled": "Popup Maker: Debug Mode Enabled",
            "debug_started_at": "Debug started at:",
            "debug_more_info": "For more information on how to use this information visit https:\/\/docs.wppopupmaker.com\/?utm_medium=js-debug-info&utm_campaign=ContextualHelp&utm_source=browser-console&utm_content=more-info",
            "global_info": "Global Information",
            "localized_vars": "Localized variables",
            "popups_initializing": "Popups Initializing",
            "popups_initialized": "Popups Initialized",
            "single_popup_label": "Popup: #",
            "theme_id": "Theme ID: ",
            "label_method_call": "Method Call:",
            "label_method_args": "Method Arguments:",
            "label_popup_settings": "Settings",
            "label_triggers": "Triggers",
            "label_cookies": "Cookies",
            "label_delay": "Delay:",
            "label_conditions": "Conditions",
            "label_cookie": "Cookie:",
            "label_settings": "Settings:",
            "label_selector": "Selector:",
            "label_mobile_disabled": "Mobile Disabled:",
            "label_tablet_disabled": "Tablet Disabled:",
            "label_event": "Event: %s",
            "triggers": {
                "click_open": "Click Open",
                "auto_open": "Time Delay \/ Auto Open"
            },
            "cookies": {
                "on_popup_close": "On Popup Close",
                "on_popup_open": "On Popup Open",
                "pum_sub_form_success": "Subscription Form: Successful",
                "pum_sub_form_already_subscribed": "Subscription Form: Already Subscribed",
                "manual": "Manual JavaScript",
                "cf7_form_success": "Contact Form 7 Success"
            }
        };
        var pum_sub_vars = {
            "ajaxurl": "http:\/\/www.transpac-logistics.co.id\/wp-admin\/admin-ajax.php",
            "message_position": "top"
        };
        var pum_popups = {
            "pum-949": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 949,
                "slug": "nias-marlina-2"
            },
            "pum-1266": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 1266,
                "slug": "sri-widawati"
            },
            "pum-1196": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 1196,
                "slug": "stefany-sagita"
            },
            "pum-1192": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 1192,
                "slug": "haniahwaty"
            },
            "pum-940": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 940,
                "slug": "r-r-endang-khamelianti"
            },
            "pum-942": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 942,
                "slug": "bagas-benardhy"
            },
            "pum-934": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 934,
                "slug": "junaedi-alqatiri"
            },
            "pum-947": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 947,
                "slug": "diana-fitriasari"
            },
            "pum-945": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 945,
                "slug": "ronald-austin"
            },
            "pum-937": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 937,
                "slug": "lelly-rosfiah"
            },
            "pum-930": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 930,
                "slug": "vendi-sjahlendra"
            },
            "pum-925": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 925,
                "slug": "lindawati-soedojo"
            },
            "pum-913": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "triggers": [{
                    "type": "click_open",
                    "settings": {
                        "cookie_name": "",
                        "extra_selectors": ".verdi-popup"
                    }
                }],
                "theme_id": "910",
                "size": "normal",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 913,
                "slug": "verdi-headquarter-2"
            },
            "pum-927": {
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "custom_height_auto": false,
                "scrollable_content": false,
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": false,
                "disable_accessibility": false,
                "theme_id": "910",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height": "380px",
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "zindex": "1999999999",
                "close_button_delay": "0",
                "triggers": [],
                "cookies": [],
                "theme_slug": "custom-popup",
                "id": 927,
                "slug": "jenny-sutandi"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/uploads/pum/pum-site-scriptsc195.js?defer&amp;generated=1574326896&amp;ver=1.8.3'></script>
    <script type='text/javascript' src='wp-includes/js/wp-embed.min34b1.js?ver=5.1.11'></script>
    <script type='text/javascript' src='wp-content/plugins/raven/assets/lib/smartmenus/jquery.smartmenus.minf488.js?ver=1.1.0'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/slick/slick.minc245.js?ver=1.8.1'></script>
    <script type='text/javascript' src='wp-content/plugins/jet-elements/assets/js/lib/tweenjs/tweenjs.min4c56.js?ver=2.0.2'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules355d.js?ver=2.5.7'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.min6996.js?ver=4.7.1'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min4f24.js?ver=4.4.6'></script>
    <script type='text/javascript'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "version": "2.5.7",
            "urls": {
                "assets": "http:\/\/www.transpac-logistics.co.id\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "general": {
                    "elementor_global_image_lightbox": "yes",
                    "elementor_enable_lightbox_in_editor": "yes"
                }
            },
            "post": {
                "id": 6,
                "title": "Home",
                "excerpt": ""
            }
        };
    </script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min355d.js?ver=2.5.7'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var jetElements = {
            "messages": {
                "invalidMail": "Please specify a valid e-mail"
            },
            "jetParallaxSections": {
                "06c7e40": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "f0c7939",
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"],
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    }
                }],
                "fab280b": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "f0c7939",
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"],
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    }
                }],
                "669bb9e": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "256f0ed",
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"],
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    }
                }],
                "c887114": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "a0a96a7",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "d4ae3f4": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "880433d",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "7a1db90": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "8fa4ea3",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "67d84b2": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "3bb9a78",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "f57d666": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "880433d",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "ceeecf7": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "79abe00",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "f9c1805": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "db2f8a5",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "eb97523": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "6272d2b",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "0cf4b7c": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "ddbe9ef",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "cda3976": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "52a3a9e",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"],
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "4772b71": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "b78023d",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }],
                "552d2fd": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "1718c21",
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"],
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    }
                }],
                "2e4e145": [{
                    "jet_parallax_layout_image": {
                        "url": "",
                        "id": ""
                    },
                    "_id": "9bf8dd9",
                    "jet_parallax_layout_image_tablet": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_image_mobile": {
                        "url": "",
                        "id": ""
                    },
                    "jet_parallax_layout_speed": {
                        "unit": "%",
                        "size": 50,
                        "sizes": []
                    },
                    "jet_parallax_layout_type": "scroll",
                    "jet_parallax_layout_z_index": "",
                    "jet_parallax_layout_bg_x": 50,
                    "jet_parallax_layout_bg_y": 50,
                    "jet_parallax_layout_bg_size": "auto",
                    "jet_parallax_layout_animation_prop": "transform",
                    "jet_parallax_layout_on": ["desktop", "tablet"]
                }]
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/jet-elements/assets/js/jet-elementsedf9.js?ver=1.15.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-includes/js/wp-util.min34b1.js?ver=5.1.11'></script>
    <script type='text/javascript' src='wp-content/plugins/raven/assets/js/frontend.minf488.js?ver=1.1.0'></script>
</body>


</html>