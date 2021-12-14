<?php $querytec = $db->query("SELECT * FROM banner where aktif='Y' AND id_banner = 24");
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
                                                        <?php $queryrowleft = $db->query("SELECT * FROM foto where id_galeri = 41"); 
                                                        $count = 0;
                                                        ?>
                                                          <?php while ($rowleft = $queryrowleft->fetch_assoc()) {
                                                            if($count % 2 == 0){  
                                                            ?>
                                                        <section class="elementor-element elementor-element-53560ab elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="53560ab" data-element_type="section"
                                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                <div class="elementor-element elementor-element-b11c39a elementor-column elementor-col-66 elementor-top-column" data-id="b11c39a" data-element_type="column">
                                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-8a13f4a elementor-widget elementor-widget-heading" data-id="8a13f4a" data-element_type="widget" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h3 class="elementor-heading-title elementor-size-default"><?= $rowleft['judul_foto']; ?></h3>		</div>
                                                                                </div>
                                                                            <div class="elementor-element elementor-element-e153960 elementor-widget elementor-widget-text-editor" data-id="e153960" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-text-editor elementor-clearfix"><p><?= $rowleft['keterangan']; ?></p></div>
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
                                                                                            <img width="720" height="547" src="gambar/foto/<?= $rowleft['foto'] ?>" class="attachment-large size-large" alt="" srcset="gambar/foto/<?= $rowleft['foto'] ?> 720w, gambar/foto/<?= $rowleft['foto'] ?> 300w"
                                                                                                sizes="(max-width: 720px) 100vw, 720px" /> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <?php } else { ?>
                                                                
                                                            <section class="elementor-element elementor-element-6b33bec elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="6b33bec" data-element_type="section"
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
                                                                                                    <figure class="slide-inner">
                                                                                                    <img width="720" height="547" src="gambar/foto/<?= $rowleft['foto'] ?>" class="attachment-large size-large" alt="" srcset="gambar/foto/<?= $rowleft['foto'] ?> 720w, gambar/foto/<?= $rowleft['foto'] ?> 300w"
                                                                                                sizes="(max-width: 720px) 100vw, 720px" />    
                                                                                                    </figure>
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
                                                                                        <h3 class="elementor-heading-title elementor-size-default"><?= $rowleft['judul_foto']; ?></h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-e153960 elementor-widget elementor-widget-text-editor" data-id="e153960" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <p><?= $rowleft['keterangan']; ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        
                                                        <?php } $count++; ?>

                                                        <?php } ?>
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

