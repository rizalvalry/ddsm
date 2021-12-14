<style>
/* Contact Form Styling */

.textcenter {
	text-align: center;
}
.section1 {
	text-align: center;
	display: table;
	width: 100%;
}
.section1 .shtext {
	display: block;
	margin-top: 20px;
}
.section1 .seperator {
	border-bottom:1px solid #a2a2a2;
	width: 35px;
	display: inline-block;
	margin: 20px;
}

.section1 h1 {
	font-size: 40px;
	color: #A44DD8;
	font-weight: normal;
}

.section2 {
    width: 1200px;
    margin: 25px auto;
}
.section2 .col2 {
	width: 48.71%;
}
.section2 .col2.first {
	float: left;
}
.section2 .col2.last {
	float: right;
}
.section2 .col2.column2 {
	padding: 0 30px;
}
.section2 span.collig {
	color: #a2a2a2;
	margin-right: 10px;
	display: inline-block;
}
.section2 .sec2addr {
	display: block;
	line-height: 26px;
}
.section2 .sec2addr p:first-child {
	margin-bottom: 10px;
}
.section2 .sec2contactform input[type="text"], 
.section2 .sec2contactform input[type="email"],
.section2 .sec2contactform textarea {
    padding: 18px;
    border: 0;
    background: #EDEDED;
    margin: 7px 0;
}
.section2 .sec2contactform textarea {
	width: 100%;
	display: block;
	color: #666;
  resize:none;
}
.section2 .sec2contactform input[type="submit"] {
	padding: 15px 40px;
    color: #fff;
    border: 0;
    background: #00a85b;
    font-size: 16px;
    text-transform: uppercase;
    margin: 7px 0;
    cursor: pointer;
}
.section2 .sec2contactform h3 {
	font-weight: normal;
    margin: 20px 0;
    margin-top: 30px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 19px;
    color: #00a85b;
}

/* @media querries */

@media only screen and (max-width: 1266px) {
	.section2 {
		width: 100%;
	}
}
@media only screen and (max-width: 960px) {
	.container {
		padding: 0 30px 70px;
	}
	.section2 .col2 {
		width: 100%;
		display: block;
	}
	.section2 .col2.first {
		margin-bottom: 10px;
	}
	.section2 .col2.column2 {
		padding: 0;
	}
	body .sec2map {
		height: 250px !important;
	}
}
@media only screen and (max-width: 768px) {
	.section2 .sec2addr {
		font-size: 14px;
	}
	.section2 .sec2contactform h3 {
		font-size: 16px;
	}
	.section2 .sec2contactform input[type="text"], .section2 .sec2contactform input[type="email"], .section2 .sec2contactform textarea {
		padding: 10px;
		margin:3px 0;
	}
	.section2 .sec2contactform input[type="submit"] {
		padding: 10px 30px;
		font-size: 14px;
	}
}
@media only screen and (max-width: 420px) {
	.section1 h1 {
		font-size: 28px;
	}	
}
</style>

<?php $querytec = $db->query("SELECT * FROM banner where aktif='Y' AND id_banner = 23");
					  $rowtech = $querytec->fetch_assoc(); ?>

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
                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image:url('gambar/banner/<?= $rowtech['gambar'] ?>')">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-24e856b elementor-column elementor-col-100 elementor-top-column" data-id="24e856b" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-0f2424c p-no-margin elementor-widget elementor-widget-heading" data-id="0f2424c" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default"><?= $rowtech['judul_banner'] ?></h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-dac60f6 elementor-widget elementor-widget-text-editor" data-id="dac60f6" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <p><?= $rowtech['keterangan'] ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
														<!-- kosong juga nih -->
                                                        
                                                        <section class="section2 clearfix">
														<div class="col2 column1 first">
															<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
														</div>
														<div class="col2 column2 last">
															<div class="sec2innercont">
																<div class="sec2addr">
																	<p><?= $row00['alamat']; ?></p>
																	<p><span class="collig">Phone :</span> <?= $row00['nomor_hp']; ?></p>
																	<p><span class="collig">Email :</span> <?= $row00['email_pengelola']; ?></p>
																	<!-- <p><span class="collig">Fax :</span> <?= $row00['alamat']; ?></p> -->
																</div>
															</div>
															<div class="sec2contactform">
																<h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
																<form action="">
																	<div class="clearfix">
																		<input class="col2 first" type="text" placeholder="FirstName">
																		<input class="col2 last" type="text" placeholder="LastName">
																	</div>
																	<div class="clearfix">
																		<input  class="col2 first" type="Email" placeholder="Email">
																		<input class="col2 last" type="text" placeholder="Contact Number">
																	</div>
																	<div class="clearfix">
																		<textarea name="textarea" id="" cols="30" rows="7">Your message here...</textarea>
																	</div>
																	<div class="clearfix"><input type="submit" value="Send"></div>
																</form>
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


		
			