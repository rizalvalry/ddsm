<style>

img.attachment-medium_large.size-medium_large.icons {
    border-radius: 50%;
}
section.elementor-element.elementor-element-f30b298.elementor-section-stretched.elementor-section-full_width.elementor-section-height-default.elementor-section-height-default.elementor-section.elementor-top-section.services-on {
    background-color: #1B7043;
    clip-path: polygon( 0 20%, 99% 0, 90% 0, 100% 0%, 100% 100%, 90% 100%, 10% 100%, 0% 100%, 0% 10% );
}
a.services {
    color: wheat;
}
.elementor-container.elementor-column-gap-narrow.services {
    display: contents;
}
h3.elementor-heading-title.elementor-size-default.services {
    margin: 0.5em;
    display: flex;
}
</style>    

<?php $querytec = $db->query("SELECT * FROM banner where aktif='Y' AND id_banner = 22");
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
														<?php
                                                        $page = "Technology";
                                                        $galeri2 = $db->query("SELECT * FROM foto where id_galeri = 40");

                                                        ?>
                                                        <?php while ($rowgallery2 = $galeri2->fetch_assoc()) {?>
                                                        <div class="">
                                                            <img src="gambar/foto/<?= $rowgallery2['foto']?>">
                                                        </div>
                                                        <?php } ?>

														<section class="elementor-element elementor-element-f30b298 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section services-on" data-id="f30b298" data-element_type="section"
                                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-8ea52bf elementor-column elementor-col-100 elementor-top-column" data-id="8ea52bf" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-5666634 elementor-widget elementor-widget-heading" data-id="5666634" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h3 class="elementor-heading-title elementor-size-default services"><strong style="color:white;">Layanan Kami</strong></h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-4b53f43 elementor-widget elementor-widget-text-editor" data-id="4b53f43" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
																						
																						<!-- isi hirarki -->

																						</div>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                                <section class="elementor-element elementor-element-0cf4b7c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="2b72b74" data-element_type="section">
                                                                                    <div class="elementor-container elementor-column-gap-narrow services">
                                                                                        <div class="elementor-row">
                                                                                            
																						
																						<!-- start here -->
																							<div class="elementor-element elementor-element-10ba9db center-caption elementor-column elementor-col-33 elementor-inner-column" data-id="10ba9db" data-element_type="column">
                                                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                    <div class="elementor-widget-wrap">
																									<div class="elementor-element elementor-element-ad872fd popmake-<?= $rowgallery['id_foto']?> elementor-widget elementor-widget-image" data-id="ad872fd" data-element_type="widget" data-widget_type="image.default">
                                                                                                            <div class="elementor-widget-container">
                                                                                                                <div class="elementor-image">
                                                                                                                    <div id="myBtn" data-elementor-open-lightbox="">
                                                                                                                        <img src="icons/hme.png" class="attachment-medium_large size-medium_large icons" alt="" srcset="icons/hme.png 768w, icons/hme.png 300w, icons/hme.png 1024w"
                                                                                                                            sizes="(max-width: 768px) 100vw, 768px" />                                                                                                                        
																														</div>
                                                                                                                        <div class="elementor-widget-container">
                                                                                                                <h5 class="elementor-heading-title elementor-size-default"><a href="#" class="services">Hospital Management Expert</a></h5>
                                                                                                            </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- start here -->
																							<div class="elementor-element elementor-element-10ba9db center-caption elementor-column elementor-col-33 elementor-inner-column" data-id="10ba9db" data-element_type="column">
                                                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                    <div class="elementor-widget-wrap">
																									<div class="elementor-element elementor-element-ad872fd popmake-<?= $rowgallery['id_foto']?> elementor-widget elementor-widget-image" data-id="ad872fd" data-element_type="widget" data-widget_type="image.default">
                                                                                                            <div class="elementor-widget-container">
                                                                                                                <div class="elementor-image">
                                                                                                                    <div id="myBtn" data-elementor-open-lightbox="">
                                                                                                                        <img src="icons/mta.png" class="attachment-medium_large size-medium_large icons" alt="" srcset="icons/mta.png 768w, icons/mta.png 300w, icons/mta.png 1024w"
                                                                                                                            sizes="(max-width: 768px) 100vw, 768px" />                                                                                                                        
																														</div>
                                                                                                                        
                                                                                                            <div class="elementor-widget-container">
                                                                                                                <h5 class="elementor-heading-title elementor-size-default"><a href="#" class="services">Medical Tenancy Agent</a></h5>
                                                                                                            </div>
                                                                                                       
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- start here -->
																							<div class="elementor-element elementor-element-10ba9db center-caption elementor-column elementor-col-33 elementor-inner-column" data-id="10ba9db" data-element_type="column">
                                                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                    <div class="elementor-widget-wrap">
																									<div class="elementor-element elementor-element-ad872fd popmake-<?= $rowgallery['id_foto']?> elementor-widget elementor-widget-image" data-id="ad872fd" data-element_type="widget" data-widget_type="image.default">
                                                                                                            <div class="elementor-widget-container">
                                                                                                                <div class="elementor-image">
                                                                                                                    <div id="myBtn" data-elementor-open-lightbox="">
                                                                                                                        <img src="icons/healthme.png" class="attachment-medium_large size-medium_large icons" alt="" srcset="icons/healthme.png 768w, icons/healthme.png 300w, icons/healthme.png 1024w"
                                                                                                                            sizes="(max-width: 768px) 100vw, 768px" />                                                                                                                        
																														</div>
                                                                                                                        <div class="elementor-widget-container services">
                                                                                                                <h5 class="elementor-heading-title elementor-size-default"><a href="#" class="services">Healthcare Marketing Expert</a></h5>
                                                                                                            </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                       
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- start here -->
																							<div class="elementor-element elementor-element-10ba9db center-caption elementor-column elementor-col-33 elementor-inner-column" data-id="10ba9db" data-element_type="column">
                                                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                    <div class="elementor-widget-wrap">
																									<div class="elementor-element elementor-element-ad872fd popmake-<?= $rowgallery['id_foto']?> elementor-widget elementor-widget-image" data-id="ad872fd" data-element_type="widget" data-widget_type="image.default">
                                                                                                            <div class="elementor-widget-container">
                                                                                                                <div class="elementor-image">
                                                                                                                    <div id="myBtn" data-elementor-open-lightbox="">
                                                                                                                        <img src="icons/me.png" class="attachment-medium_large size-medium_large icons" alt="" srcset="icons/me.png 768w, icons/me.png 300w, icons/me.png 1024w"
                                                                                                                            sizes="(max-width: 768px) 100vw, 768px" />                                                                                                                        
																														</div>
                                                                                                                        <div class="elementor-widget-container services">
                                                                                                                <h5 class="elementor-heading-title elementor-size-default"><a href="#" class="services">Medicolegal Expert</a></h5>
                                                                                                            </div>
                                                                                                                </div>
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