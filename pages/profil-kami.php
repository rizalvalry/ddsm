
    
	


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
														<?php $queryrowleft = $db->query("SELECT * FROM banner where aktif='Y' AND id_banner <> 20");
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
																							<div style="background-image: linear-gradient(to right, #ED7D31 , #02a85c);">
																								<h1>Direktur Utama : Ni'am Masykuri, S.E.</h1>
																							</div>

																							<ol>	
																								<li>
																									<div class="dirop">
																										<h2>Secondary</h2>
																									</div>
																									
																								</li>
																								<li>
																									<div class="dirkeu">
																										<h2>Secondary</h2>
																									</div>
																									
																								</li>
																								<li>
																									<div class="dirbis">
																										<h2>Secondary</h2>
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
																						$page = "Home";
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
																									x            </button>

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
    
    
    
	
    