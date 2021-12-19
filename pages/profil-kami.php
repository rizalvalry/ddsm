	<style type="text/css" id="wp-custom-css">
        /* #nav-menu .custom-nav, #sticky-nav-menu .custom-nav {
    padding: 0 15px;
    position: relative;
}

#nav-menu .custom-nav a, #sticky-nav-menu .custom-nav a {
    margin-top: calc(50% - 52px);
    height: 40px !important;
    background: #293189;
    color: white;
    border-radius: 8px;
    text-transform: capitalize;
} */
        
        .custom-nav .raven-menu-item:before {
            /* 	content: "\f2f6"; */
            content: "";
            background-image: url('https://ddsm.rimibyan.com/wp-content/uploads/2019/04/login-2.png');
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
            color: #293189;
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
            background-image: url('https://ddsm.rimibyan.com/wp-content/uploads/2019/11/mail_outline-24px.png');
            width: 20px;
            height: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            cursor: pointer;
        }
		
		*,
*:before,
*:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background-color: #1d1f20;
    font-family: 'Helvetica Neue', 'Helvetica', Arial, sans-serif;
}

#wrapper {
    margin-left: auto;
    margin-right: auto;
    max-width: 80em;
}

#container {
    float: left;
    padding: 1em;
    width: 100%;
}

ol.organizational-chart,
ol.organizational-chart ol,
ol.organizational-chart li,
ol.organizational-chart li > div {
    position: relative;
}

ol.organizational-chart,
ol.organizational-chart ol {
    list-style: none;
    margin: 0;
    padding: 0;
}

ol.organizational-chart {
    text-align: center;
}

ol.organizational-chart ol {
    padding-top: 1em;
}

ol.organizational-chart ol:before,
ol.organizational-chart ol:after,
ol.organizational-chart li:before,
ol.organizational-chart li:after,
ol.organizational-chart > li > div:before,
ol.organizational-chart > li > div:after {
    background-color: #00A85A;
    content: '';
    position: absolute;
}

ol.organizational-chart ol > li {
    padding: 1em 0 0 1em;
}

ol.organizational-chart > li ol:before {
    height: 1em;
    left: 50%;
    top: 0;
    width: 3px;
}

ol.organizational-chart > li ol:after {
    height: 3px;
    left: 3px;
    top: 1em;
    width: 50%;
}

ol.organizational-chart > li ol > li:not(:last-of-type):before {
    height: 3px;
    left: 0;
    top: 2em;
    width: 1em;
}

ol.organizational-chart > li ol > li:not(:last-of-type):after {
    height: 100%;
    left: 0;
    top: 0;
    width: 3px;
}

ol.organizational-chart > li ol > li:last-of-type:before {
    height: 3px;
    left: 0;
    top: 2em;
    width: 1em;
}

ol.organizational-chart > li ol > li:last-of-type:after {
    height: 2em;
    left: 0;
    top: 0;
    width: 3px;
}

ol.organizational-chart li > div {
    background-color: #fff;
    border-radius: 3px;
    min-height: 2em;
    padding: 0.5em;
}

/*** PRIMARY ***/
ol.organizational-chart > li > div {
    /* background-color: #4472C4; */
    margin-right: 1em;
	border-radius: 12px;
    box-shadow: 0 0 14px rgba(0,0,0,0.5);
	/* background-image: linear-gradient(to right, #4472C4 , #02a85c); */
    opacity: 0.9;
    margin-right: 1em;
    border-radius: 12px;
    box-shadow: 0 0 14px rgba(0,0,0,0.5);
}

ol.organizational-chart > li > div:before {
    bottom: 2em;
    height: 3px;
    right: -1em;
    width: 1em;
}

ol.organizational-chart > li > div:first-of-type:after {
    bottom: 0;
    height: 2em;
    right: -1em;
    width: 3px;
}

ol.organizational-chart > li > div + div {
    margin-top: 1em;
}

ol.organizational-chart > li > div + div:after {
    height: calc(100% + 1em);
    right: -1em;
    top: -1em;
    width: 3px;
}

/*** SECONDARY ***/
ol.organizational-chart > li > ol:before {
    left: inherit;
    right: 0;
}

ol.organizational-chart > li > ol:after {
    left: 0;
    width: 100%;
}

ol.organizational-chart > li > ol > li > div {
    /* background-color: #ED7D31; */
	/* background-image: linear-gradient(to right, red , #02a85c); */
	border-radius: 12px;
    box-shadow: 0 0 14px rgba(0,0,0,0.5);
}

/*** TERTIARY ***/
ol.organizational-chart > li > ol > li > ol > li > div {
    background-color: #fd6470;
}

/*** QUATERNARY ***/
ol.organizational-chart > li > ol > li > ol > li > ol > li > div {
    background-color: #fca858;
}

/*** QUINARY ***/
ol.organizational-chart > li > ol > li > ol > li > ol > li > ol > li > div {
    background-color: #fddc32;
}

/*** MEDIA QUERIES ***/
@media only screen and ( min-width: 64em ) {

    ol.organizational-chart {
        margin-left: -1em;
        margin-right: -1em;
    }

    /* PRIMARY */
    ol.organizational-chart > li > div {
        display: inline-block;
        float: none;
        margin: 0 1em 1em 1em;
        vertical-align: bottom;
    }

    ol.organizational-chart > li > div:only-of-type {
        margin-bottom: 0;
        width: calc((100% / 1) - 2em - 4px);
    }

    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(2),
    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(2) ~ div {
        width: calc((100% / 2) - 2em - 4px);
    }

    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(3),
    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(3) ~ div {
        width: calc((100% / 3) - 2em - 4px);
    }

    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(4),
    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(4) ~ div {
        width: calc((100% / 4) - 2em - 4px);
    }

    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(5),
    ol.organizational-chart > li > div:first-of-type:nth-last-of-type(5) ~ div {
        width: calc((100% / 5) - 2em - 4px);
    }

    ol.organizational-chart > li > div:before,
    ol.organizational-chart > li > div:after {
        bottom: -1em!important;
        top: inherit!important;
    }

    ol.organizational-chart > li > div:before {
        height: 1em!important;
        left: 50%!important;
        width: 3px!important;
    }

    ol.organizational-chart > li > div:only-of-type:after {
        display: none;
    }

    ol.organizational-chart > li > div:first-of-type:not(:only-of-type):after,
    ol.organizational-chart > li > div:last-of-type:not(:only-of-type):after {
        bottom: -1em;
        height: 3px;
        width: calc(50% + 1em + 3px);
    }

    ol.organizational-chart > li > div:first-of-type:not(:only-of-type):after {
        left: calc(50% + 3px);
    }

    ol.organizational-chart > li > div:last-of-type:not(:only-of-type):after {
        left: calc(-1em - 3px);
    }

    ol.organizational-chart > li > div + div:not(:last-of-type):after {
        height: 3px;
        left: -2em;
        width: calc(100% + 4em);
    }

    /* SECONDARY */
    ol.organizational-chart > li > ol {
        display: flex;
        flex-wrap: nowrap;
    }

    ol.organizational-chart > li > ol:before,
    ol.organizational-chart > li > ol > li:before {
        height: 1em!important;
        left: 50%!important;
        top: 0!important;
        width: 3px!important;
    }

    ol.organizational-chart > li > ol:after {
        display: none;
    }

    ol.organizational-chart > li > ol > li {
        flex-grow: 1;
        padding-left: 1em;
        padding-right: 1em;
        padding-top: 1em;
    }

    ol.organizational-chart > li > ol > li:only-of-type {
        padding-top: 0;
    }

    ol.organizational-chart > li > ol > li:only-of-type:before,
    ol.organizational-chart > li > ol > li:only-of-type:after {
        display: none;
    }

    ol.organizational-chart > li > ol > li:first-of-type:not(:only-of-type):after,
    ol.organizational-chart > li > ol > li:last-of-type:not(:only-of-type):after {
        height: 3px;
        top: 0;
        width: 50%;
    }

    ol.organizational-chart > li > ol > li:first-of-type:not(:only-of-type):after {
        left: 50%;
    }

    ol.organizational-chart > li > ol > li:last-of-type:not(:only-of-type):after {
        left: 0;
    }

    ol.organizational-chart > li > ol > li + li:not(:last-of-type):after {
        height: 3px;
        left: 0;
        top: 0;
        width: 100%;
    }

}

	.colorfull-hirarky {
		color:white;
	}

	ol.organizational-chart > li > ol > li > ol > li > .dirop {
    	/* background-color: #A5A5A5; */
		background-image: linear-gradient(to right, #A5A5A5 , #02a85c);
		-webkit-transform: skew(20deg);
		-moz-transform: skew(20deg);
		-o-transform: skew(20deg);
		-ms-transform: skew(20deg);
	}
	ol.organizational-chart > li > ol > li > ol > li > .dirkeu {
    	/* background-color: #00A859; */
		background-image: linear-gradient(to right, #01BC5A , #02a85c);
		-webkit-transform: skew(20deg);
		-moz-transform: skew(20deg);
		-o-transform: skew(20deg);
		-ms-transform: skew(20deg);
	}
	ol.organizational-chart > li > ol > li > ol > li > .dirbis {
    	/* background-color: #7030A0; */
		background-image: linear-gradient(to right, #7030A0 , #02a85c);
		-webkit-transform: skew(20deg);
		-moz-transform: skew(20deg);
		-o-transform: skew(20deg);
		-ms-transform: skew(20deg);
	}

	ol.organizational-chart > li > ol > li > ol > li > div {
    border-radius: 12px;
    box-shadow: 0 0 14px rgba(0,0,0,0.5);
	}

	ol.organizational-chart > li > ol > li > ol > li > .dirut {
    	background-color: #7030A0;
	}

    </style>
	


<?php $query00 = $db->query("SELECT * FROM banner where aktif='Y' AND id_banner = 20");
					  $rowcrumb = $query00->fetch_assoc(); ?>


    <div class="jupiterx-site" data-markup-id="jupiterx_site">
        
        <main class="jupiterx-main" data-markup-id="jupiterx_main">
            <div class="jupiterx-main-content" data-markup-id="jupiterx_main_content">
                <div class="container" data-markup-id="jupiterx_fixed_wrap[_main_content]">
                    <div class="row" data-markup-id="jupiterx_main_grid">
                        <div class="jupiterx-primary col-lg-12" data-markup-id="jupiterx_primary">
                            <div class="jupiterx-content" role="main" itemprop="mainEntityOfPage" data-markup-id="jupiterx_content">
                                <article id="268" class="jupiterx-post post-268 page type-page status-publish hentry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork" data-markup-id="jupiterx_post">
                                    <header class="jupiterx-post-header" data-markup-id="jupiterx_post_header"></header>
                                    <div class="jupiterx-post-body" itemprop="articleBody" data-markup-id="jupiterx_post_body">
                                        <div class="jupiterx-post-content clearfix" itemprop="text" data-markup-id="jupiterx_post_content">
                                            <div data-elementor-type="post" data-elementor-id="268" class="elementor elementor-268" data-elementor-settings="[]">
                                                <div class="elementor-inner">
                                                    <div class="elementor-section-wrap">
                                                        <section class="elementor-element elementor-element-3bf34cc elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="3bf34cc" data-element_type="section"
                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image:url('gambar/banner/<?= $rowcrumb['gambar'] ?>')">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-24e856b elementor-column elementor-col-100 elementor-top-column" data-id="24e856b" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-0f2424c p-no-margin elementor-widget elementor-widget-heading" data-id="0f2424c" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default"><?= $rowcrumb['judul_banner'] ?></h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-dac60f6 elementor-widget elementor-widget-text-editor" data-id="dac60f6" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <p><?= $rowcrumb['keterangan'] ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
														<!-- ga di pakai section gambar kiri nya -->
                                                        <!-- <section class="elementor-element elementor-element-6b33bec elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="6b33bec" data-element_type="section"
                                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-bf47d14 elementor-column elementor-col-33 elementor-top-column" data-id="bf47d14" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-669545e elementor-widget elementor-widget-image-carousel" data-id="669545e" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500,&quot;direction&quot;:&quot;ltr&quot;}"
                                                                                    data-widget_type="image-carousel.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image-carousel-wrapper elementor-slider" dir="ltr">
                                                                                            <div class="elementor-image-carousel image-stretch">
                                                                                                <div class="slide">
                                                                                                    <figure class="slide-inner"><img class="slide-image" src="https://ddsm.rimibyan.com/wp-content/uploads/elementor/thumbs/bitmap1-pg4ap56qcz1whltqua9dfwisfqtj1xo057pzmw87js.jpg" alt="bitmap(1)" /></figure>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-77cc4f4 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-spacer" data-id="77cc4f4" data-element_type="widget" data-widget_type="spacer.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-spacer">
                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-b11c39a elementor-column elementor-col-66 elementor-top-column" data-id="b11c39a" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-8a13f4a elementor-widget elementor-widget-heading" data-id="8a13f4a" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h3 class="elementor-heading-title elementor-size-default">Who We Are</h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-e153960 elementor-widget elementor-widget-text-editor" data-id="e153960" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <p>Since our humble beginning in 2005, our founder/CEO is having a clear vision to create a seamless logistics solution. We understand that logistics can be challenging
                                                                                                for most people. Being a trustworthy agent/partner with integrity is the cornerstone and paramount in this industry.</p>
                                                                                            <p>We believe that technology is our friend and a solution for the future. We invest on people and cutting-edge technology to help our clients and partners to enjoy
                                                                                                the direct benefit.</p>
                                                                                            <p>Our teams of professionals are passionate with logistics. We offer a full-range logistics solutions: Sea/Air Freight Forwarders, NVOCC, custom brokerage, land
                                                                                                transportation, e-commerce solution, marine insurance and bonded and distribution center warehousing to name a few.0</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section> -->
														<?php $queryrowleft = $db->query("SELECT * FROM banner where aktif='Y' AND id_banner <> 20 AND id_banner <> 22 AND id_banner <> 23 AND id_banner <> 24");
					  									$rowleft = $queryrowleft->fetch_assoc(); ?>
                                                        <section class="elementor-element elementor-element-53560ab elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="53560ab" data-element_type="section"
                                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-480fe9c elementor-column elementor-col-66 elementor-top-column" data-id="480fe9c" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-922405f elementor-widget elementor-widget-text-editor" data-id="922405f" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <p><?= $rowleft['keterangan']; ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-052f08e elementor-column elementor-col-33 elementor-top-column" data-id="052f08e" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-7324740 elementor-widget elementor-widget-image" data-id="7324740" data-element_type="widget" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="720" height="547" src="gambar/banner/<?= $rowleft['gambar'] ?>" class="attachment-large size-large" alt="" srcset="gambar/banner/<?= $rowleft['gambar'] ?> 720w, gambar/banner/<?= $rowleft['gambar'] ?> 300w"
                                                                                                sizes="(max-width: 720px) 100vw, 720px" /> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        

														<section class="elementor-element elementor-element-f30b298 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f30b298" data-element_type="section"
                                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-8ea52bf elementor-column elementor-col-100 elementor-top-column" data-id="8ea52bf" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-5666634 elementor-widget elementor-widget-heading" data-id="5666634" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h3 class="elementor-heading-title elementor-size-default"><strong>Our Team</strong></h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-4b53f43 elementor-widget elementor-widget-text-editor" data-id="4b53f43" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
																						
																						<!-- hirarki -->
																			<div id="wrapper">
																				<div id="container">

																				<ol class="organizational-chart colorfull-hirarky">
																						<li>
																							<div style="background-image: linear-gradient(to right, #4472C4 , #02a85c);">
																								<h1>Komisaris Utama : drg. Istiqamah Y, Sp.PM</h1>
																								<h2>Komisaris : dr. Ikhwan Afwan</h2>
																							</div>

																					<ol class="organizational-chart">
																						<li>
																							<div style="background-image: linear-gradient(to right, #c2dc5d , #02a85c);">
																								<h1>Direktur Utama : Ni'am Masykuri, S.E.</h1>
																							</div>

																							<ol>	
																								<li>
																									<div class="dirop">
																										<h2>Direktur Operasional : dr. Ihsan Satria</h2>
																									</div>
																									
																								</li>
																								<li>
																									<div class="dirkeu">
																										<h2>Direktur Keuangan : Poppy Jane Intania, S.SiT., M.Kes</h2>
																									</div>
																									
																								</li>
																								<li>
																									<div class="dirbis">
																										<h2>Direktur Pengembangan Bisnis : drg. Wahyu Prabowo</h2>
																									</div>
																								
																								</li>
																							</ol>
																							
																						</li>
																						</ol>																							

																				</div>
																			</div>
																						<!-- end hirarki -->

																						</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-a844274 elementor-widget elementor-widget-spacer" data-id="a844274" data-element_type="widget" data-widget_type="spacer.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-spacer">
                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <section class="elementor-element elementor-element-0cf4b7c img-grayscale elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="2b72b74" data-element_type="section">
                                                                                    <div class="elementor-container elementor-column-gap-narrow">
                                                                                        <div class="elementor-row">
                                                                                            
																						<?php
																						$page = "Profil";
																						$galeri1 = $db->query("SELECT * FROM foto where id_galeri = 39");

																						?>

																						<?php while ($rowgallery = $galeri1->fetch_assoc()) {?>
																						<!-- start here -->
																							<div class="elementor-element elementor-element-10ba9db center-caption elementor-column elementor-col-33 elementor-inner-column" data-id="10ba9db" data-element_type="column">
                                                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                    <div class="elementor-widget-wrap">
																									<div class="elementor-element elementor-element-ad872fd popmake-<?= $rowgallery['id_foto']?> elementor-widget elementor-widget-image" data-id="ad872fd" data-element_type="widget" data-widget_type="image.default">
                                                                                                            <div class="elementor-widget-container">
                                                                                                                <div class="elementor-image">
                                                                                                                    <div id="myBtn" data-elementor-open-lightbox="">
                                                                                                                        <img width="768" height="393" src="gambar/foto/<?= $rowgallery['foto']?>" class="attachment-medium_large size-medium_large" alt="" srcset="gambar/foto/<?= $rowgallery['foto']?> 768w, gambar/foto/<?= $rowgallery['foto']?> 300w, gambar/foto/<?= $rowgallery['foto']?> 1024w"
                                                                                                                            sizes="(max-width: 768px) 100vw, 768px" />                                                                                                                        
																														</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="elementor-element elementor-element-10f0030 txt-caption elementor-widget elementor-widget-heading" data-id="10f0030" data-element_type="widget" data-widget_type="heading.default">
                                                                                                            <!-- <div class="elementor-widget-container">
                                                                                                                <h2 class="elementor-heading-title elementor-size-default"><a href="<?= $row00['alamat_web']; ?>shipping-to-usa-2/index.html"><?= $rowgallery['judul_foto']?></a></h2>
                                                                                                            </div> -->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            

																							<!-- modal  -->
																							<div id="pum-<?= $rowgallery['id_foto']?>" class="pum pum-overlay pum-theme-910 pum-theme-custom-popup popmake-overlay click_open" data-popmake="{&quot;id&quot;:<?= $rowgallery['id_foto']?>,&quot;slug&quot;:&quot;verdi-headquarter-2&quot;,&quot;theme_id&quot;:910,&quot;cookies&quot;:[],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;cookie_name&quot;:&quot;&quot;,&quot;extra_selectors&quot;:&quot;.verdi-popup&quot;}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;normal&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;100%&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center top&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;center top&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:false,&quot;esc_press&quot;:false,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}"
																								role="dialog" aria-hidden="true">

																								<div id="popmake-<?= $rowgallery['id_foto']?>" class="pum-container popmake theme-910 pum-responsive pum-responsive-normal responsive size-normal">

																									<div class="pum-content popmake-content">
																										<div class="content-popup">
																											<div class="box-img"><img src="gambar/foto/<?= $rowgallery['foto']?>" /></div>
																											<div class="box-desc">
																												<h4><?= $rowgallery['judul_foto']?></h4>
																												<!-- <h6>Founder and CEO</h6> -->
																												<div class="desc">
																													<p><?= $rowgallery['keterangan']?></p>
																													<p><a href="https://www.linkedin.com/in/verdi-madison-sjahlendra-9182b33a/" target="_blank" rel="noopener noreferrer">Verdi&#8217;s LinkedIn Profile</a></p>
																												</div>
																											</div>
																										</div>
																									</div>

																									<button type="button" class="pum-close popmake-close" aria-label="Close">
																									<i class="ico-times" role="img" aria-label="Cancel"></i>            </button>

																								</div>
																							</div>
																							<!-- end modal -->

																							<?php } ?>
                                                                                            <!-- end -->
                                                                                                    
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        
                                                                                
                                                        
                                                        
                                                        <!-- kosong nih section nya -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <div class="jupiterx-corner-buttons" data-jupiterx-scroll="{&quot;offset&quot;:1000}" data-markup-id="jupiterx_corner_buttons"><button class="jupiterx-scroll-top jupiterx-icon-angle-up" data-jupiterx-scroll-target="0" data-markup-id="jupiterx_scroll_top_button"></button></div>
    </div>
    
    
    
	
    