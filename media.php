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
        <html lang="en-US" data-markup-id="jupiterx_html">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

        <head data-markup-id="jupiterx_head">
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
    <link rel="alternate" type="application/rss+xml" title="Trans Pacific International Logistics &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Trans Pacific International Logistics &raquo; Comments Feed" href="comments/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11.2.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11.2.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/www.transpac-logistics.co.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.1.11"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
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
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.1.11" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embede69e.json?url=http%3A%2F%2Fwww.transpac-logistics.co.id%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed8d8f?url=http%3A%2F%2Fwww.transpac-logistics.co.id%2F&amp;format=xml" />
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="pingback" href="xmlrpc.php">
    <link rel="icon" href="wp-content/uploads/2019/03/cropped-logo-trans-paific-02-32x32.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2019/03/cropped-logo-trans-paific-02-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2019/03/cropped-logo-trans-paific-02-180x180.png" />
    <meta name="msapplication-TileImage" content="http://www.transpac-logistics.co.id/wp-content/uploads/2019/03/cropped-logo-trans-paific-02-270x270.png" />
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
            background-image: url(wp-content/uploads/2019/04/login-2.png);
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
    </style>
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-6 no-js elementor-default elementor-template-full-width elementor-page elementor-page-6 jupiterx-header-sticky jupiterx-header-tablet-behavior-off jupiterx-header-mobile-behavior-off jupiterx-header-overlapped jupiterx-header-overlapped-tablet jupiterx-header-overlapped-mobile"
    itemscope="itemscope" itemtype="http://schema.org/WebPage" data-markup-id="jupiterx_body">
    

    <!-- main body -->
    <?php include "tengah.php";?>
    <!-- end main body -->
    

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
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/www.transpac-logistics.co.id\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
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
        var cherryHandlerAjaxUrl = {
            "ajax_url": "http:\/\/www.transpac-logistics.co.id\/wp-admin\/admin-ajax.php"
        };
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
        var ajaxurl = "index.html\/\/www.transpac-logistics.co.id\/wp-admin\/admin-ajax.php";
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
                    "_id": "ba579eb",
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