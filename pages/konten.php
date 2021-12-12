
                        <?php
                $page = "Home";
                $query37 = $db->query("SELECT id_slide, warna, nama_slide, judul_slide, gambar, deskripsi, link_slide FROM slide WHERE aktif = 'Y' AND id_slide=31");

                $querywelcome = $db->query("SELECT nama_toko, pin_bb, meta_keyword FROM profil");
                $rowwelcome   = $querywelcome->fetch_assoc();
                $rowslider = $query37->fetch_assoc();
                ?>
        <main class="jupiterx-main" data-markup-id="jupiterx_main">
            <div data-elementor-type="post" data-elementor-id="6" class="elementor elementor-6" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section class="elementor-element elementor-element-669bb9e elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="669bb9e" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image:url('gambar/slide/<?=$rowslider['gambar']?>')">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-b13c735 elementor-column elementor-col-50 elementor-top-column" data-id="b13c735" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-929a01d elementor-widget elementor-widget-heading" data-id="929a01d" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default"><?=$rowslider['deskripsi']?></h2>
                                                    </div>
                                                </div>
                                                <!-- <div class="elementor-element elementor-element-fcbc73c no-margin elementor-widget elementor-widget-text-editor" data-id="fcbc73c" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Serving our Clients and Partners Since 2005</p>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="elementor-element elementor-element-bd3be03 elementor-mobile-align-center elementor-widget elementor-widget-raven-button" data-id="bd3be03" data-element_type="widget" data-widget_type="raven-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="raven-widget-wrapper">
                                                            <a class="raven-button raven-button-link" href="<?=$rowslider['link_slide']?>">
                                                                <span class="raven-button-content">
										<span class="raven-button-text">
                                        <?=$rowslider['judul_slide']?>										</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-413a07f elementor-column elementor-col-50 elementor-top-column" data-id="413a07f" data-element_type="column">
                                        <div class="elementor-column-wrap">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php
                            $page = "Home";
                            $query38 = $db->query("SELECT id_slide, warna, nama_slide, judul_slide, gambar, deskripsi, link_slide FROM slide WHERE aktif = 'Y' AND id_slide=33");

                            $querywelcome = $db->query("SELECT nama_toko, pin_bb, meta_keyword FROM profil");
                            $rowwelcome   = $querywelcome->fetch_assoc();
                            $rowslider = $query38->fetch_assoc();
                            ?>
                        <div class="fab-wrapper wow fadeInUp animated" data-wow-delay=".2s">
                        <section class="elementor-element elementor-element-c887114 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c887114" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-3fdaeba elementor-column elementor-col-50 elementor-top-column" data-id="3fdaeba" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-f26c452 elementor-widget elementor-widget-image" data-id="f26c452" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1024" height="683" src="gambar/slide/<?=$rowslider['gambar']?>" class="attachment-large size-large" alt="" srcset="gambar/slide/<?=$rowslider['gambar']?> 1024w, gambar/slide/<?=$rowslider['gambar']?> 300w, gambar/slide/<?=$rowslider['gambar']?> 768w"
                                                                sizes="(max-width: 1024px) 100vw, 1024px" /> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-563041c elementor-column elementor-col-50 elementor-top-column" data-id="563041c" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-5a08186 elementor-widget elementor-widget-heading" data-id="5a08186" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><?=$rowslider['nama_slide']?></h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6550793 elementor-widget elementor-widget-text-editor" data-id="6550793" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?=$rowslider['deskripsi']?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-81796b7 elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="81796b7" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="<?=$rowslider['link_slide']?>" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text"><?=$rowslider['judul_slide']?></span>
                                                                </span>
                                                            </a>
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

                    


                        <section class="elementor-element elementor-element-d4ae3f4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="d4ae3f4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-c774e9f elementor-column elementor-col-50 elementor-top-column" data-id="c774e9f" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <!-- <div class="elementor-element elementor-element-bfc5fda elementor-widget elementor-widget-heading" data-id="bfc5fda" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">What We Provide</h3>
                                                    </div>
                                                </div> -->
                                                <div class="elementor-element elementor-element-119e816 elementor-widget elementor-widget-text-editor" data-id="119e816" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?= $rowwelcome['pin_bb']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-acbaa94 elementor-align-center elementor-widget elementor-widget-button" data-id="acbaa94" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="about-us-2/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">About Us</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b67cc33 elementor-column elementor-col-50 elementor-top-column" data-id="b67cc33" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section class="elementor-element elementor-element-7a1db90 center-caption elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="7a1db90" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-narrow">
                                                        <div class="elementor-row">
                                                            
                                                        <!-- start grid -->
                                                        <div class="container">
                                                            <div class="row row-flex">
                                                            <?php
                                                            $page = "Home";
                                                            $banner1 = $db->query("SELECT * FROM pengiriman WHERE aktif = 'Y'");

                                                            ?>
                                                                <?php while ($rowbanner = $banner1->fetch_assoc()) {?>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="content colour-1">
                                                                <div class="elementor-image">
                                                                    <a href="shipping-to-usa-2/index.html" data-elementor-open-lightbox="">
                                                                        <img width="768" height="393" src="gambar/pengiriman/<?=$rowbanner['gambar']?>" class="attachment-medium_large size-medium_large" alt="" srcset="gambar/pengiriman/<?=$rowbanner['gambar']?> 300w, gambar/pengiriman/<?=$rowbanner['gambar']?> 1024w"
                                                                            sizes="(max-width: 768px) 100vw, 768px" /> </a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2f5d003 txt-caption elementor-widget elementor-widget-heading" data-id="2f5d003" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default"><a href="shipping-to-usa-2/index.html"><?=$rowbanner['metode_pengiriman']?></a></h2>
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                            <?php } ?>
                                                            </div>
                                                        </div>
                                                        <!-- end grid -->

                                                        </div>
                                                    </div>
                                                </section>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-f57d666 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                            data-id="f57d666" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-d4d9c5e elementor-column elementor-col-50 elementor-top-column" data-id="d4d9c5e" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-8c63ad0 elementor-widget elementor-widget-raven-flex-spacer" data-id="8c63ad0" data-element_type="widget" data-widget_type="raven-flex-spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="raven-spacer">&nbsp;</div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-bdf2453 elementor-widget elementor-widget-heading" data-id="bdf2453" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">What We Provide ?</h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3ed63ea elementor-widget elementor-widget-text-editor" data-id="3ed63ea" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>We provide a one-stop solution for Air, Sea, Land transportation, custom brokerage and cargo insurance solution to or from every part of the world.</p>

                                                            <p>Do you ship to and from the USA? We are a fully bonded Federal Maritime Commission (FMC) Ocean Transport Intermediaries.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7a3643f elementor-align-center elementor-widget elementor-widget-button" data-id="7a3643f" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="about-us-2/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">About Us</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-94fa193 elementor-widget elementor-widget-raven-flex-spacer" data-id="94fa193" data-element_type="widget" data-widget_type="raven-flex-spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="raven-spacer">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-16eb28a elementor-column elementor-col-50 elementor-top-column" data-id="16eb28a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-eb1ef90 abs-caption service-gallery elementor-widget elementor-widget-image-gallery" data-id="eb1ef90" data-element_type="widget" data-widget_type="image-gallery.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image-gallery">
                                                            <div class="row gallery galleryid-6 gallery-columns-2 gallery-size-full" data-uk-grid-margin="" data-markup-id="jupiterx_post_gallery[_6]">
                                                                <figure class="gallery-item" data-markup-id="jupiterx_post_gallery_item[_538]">
                                                                    <div class="gallery-icon landscape" data-markup-id="jupiterx_post_gallery_icon[_538]">
                                                                        <!-- open output: jupiterx_post_gallery_icon[_538] -->
                                                                        <a data-elementor-open-lightbox="" data-elementor-lightbox-slideshow="eb1ef90" href='sea-freight-2/index.html'><img width="1871" height="1068" src="wp-content/uploads/2019/04/sea-freight.png" class="attachment-full size-full" alt="" aria-describedby="gallery-1-6" srcset="http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/sea-freight.png 1871w, http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/sea-freight-300x171.png 300w, http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/sea-freight-768x438.png 768w, http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/sea-freight-1024x585.png 1024w"
                                                                                sizes="(max-width: 1871px) 100vw, 1871px" /></a>
                                                                        <!-- close output: jupiterx_post_gallery_icon[_538] -->
                                                                    </div>
                                                                    <figcaption class="wp-caption-text gallery-caption" data-markup-id="jupiterx_post_gallery_caption[_538]">
                                                                        <!-- open output: jupiterx_post_gallery_caption_text[_538] -->Sea Freight
                                                                        <!-- close output: jupiterx_post_gallery_caption_text[_538] -->
                                                                    </figcaption>
                                                                </figure>
                                                                <figure class="gallery-item" data-markup-id="jupiterx_post_gallery_item[_539]">
                                                                    <div class="gallery-icon landscape" data-markup-id="jupiterx_post_gallery_icon[_539]">
                                                                        <!-- open output: jupiterx_post_gallery_icon[_539] -->
                                                                        <a data-elementor-open-lightbox="" data-elementor-lightbox-slideshow="eb1ef90" href='air-freight-2/index.html'><img width="1726" height="951" src="wp-content/uploads/2019/04/air-freight.png" class="attachment-full size-full" alt="" aria-describedby="gallery-1-6" srcset="http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/air-freight.png 1726w, http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/air-freight-300x165.png 300w, http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/air-freight-768x423.png 768w, http://www.transpac-logistics.co.id/wp-content/uploads/2019/04/air-freight-1024x564.png 1024w"
                                                                                sizes="(max-width: 1726px) 100vw, 1726px" /></a>
                                                                        <!-- close output: jupiterx_post_gallery_icon[_539] -->
                                                                    </div>
                                                                    <figcaption class="wp-caption-text gallery-caption" data-markup-id="jupiterx_post_gallery_caption[_539]">
                                                                        <!-- open output: jupiterx_post_gallery_caption_text[_539] -->Air Freight
                                                                        <!-- close output: jupiterx_post_gallery_caption_text[_539] -->
                                                                    </figcaption>
                                                                </figure>
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
                        <?php
                            $page = "Home";
                            $query39 = $db->query("SELECT id_slide, warna, nama_slide, judul_slide, gambar, deskripsi, link_slide FROM slide WHERE aktif = 'Y' AND id_slide=34");

                            $querywelcome = $db->query("SELECT nama_toko, pin_bb, meta_keyword FROM profil");
                            $rowwelcome   = $querywelcome->fetch_assoc();
                            $rowslider = $query39->fetch_assoc();
                            ?>
                        <div class="fab-wrapper wow fadeInUp animated" data-wow-delay=".2s">
                        <section class="elementor-element elementor-element-ceeecf7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="ceeecf7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-270420a elementor-column elementor-col-50 elementor-top-column" data-id="270420a" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ff6226f top-caption elementor-widget elementor-widget-image" data-id="ff6226f" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <figure class="wp-caption">
                                                                <img width="1024" height="516" src="gambar/thumb_slide/<?=$rowslider['gambar']?>" class="attachment-large size-large" alt="" srcset="gambar/thumb_slide/<?=$rowslider['gambar']?> 1024w, gambar/thumb_slide/<?=$rowslider['gambar']?> 300w, gambar/thumb_slide/<?=$rowslider['gambar']?> 768w"
                                                                    sizes="(max-width: 1024px) 100vw, 1024px" />
                                                                <figcaption class="widget-image-caption wp-caption-text"></figcaption>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c18f0ff elementor-column elementor-col-50 elementor-top-column" data-id="c18f0ff" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-23c7de0 elementor-widget elementor-widget-spacer" data-id="23c7de0" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-777333c elementor-widget elementor-widget-heading" data-id="777333c" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default"><?=$rowslider['nama_slide']?></h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a01265b elementor-widget elementor-widget-text-editor" data-id="a01265b" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><?=$rowslider['deskripsi']?></p>
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
                        <section class="elementor-element elementor-element-f9c1805 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f9c1805" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-0b0e292 elementor-column elementor-col-100 elementor-top-column" data-id="0b0e292" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4c668ed elementor-widget elementor-widget-heading" data-id="4c668ed" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">Accreditations and Licenses</h3>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1a4274c res-gallery custom-gallery gallery-spacing-custom elementor-widget elementor-widget-image-gallery" data-id="1a4274c" data-element_type="widget" data-widget_type="image-gallery.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image-gallery">
                                                            <div class="row gallery galleryid-6 gallery-columns-5 gallery-size-full" data-uk-grid-margin="" data-markup-id="jupiterx_post_gallery[_6]">

                                                            <?php
                                                            $page = "Home";
                                                            $query37 = $db->query("SELECT * FROM pembayaran WHERE aktif = 'Y' ORDER BY id_pembayaran ASC");
                                                            // $query38 = $db->query("SELECT id_slide, warna, nama_slide, judul_slide, deskripsi, link_slide FROM slide WHERE aktif = 'Y' ORDER BY id_slide ASC");
                                                            $querywelcome = $db->query("SELECT nama_toko, pin_bb, meta_keyword FROM profil");
                                                            $rowwelcome   = $querywelcome->fetch_assoc();
                                                            ?>

                                            <?php while ($rowslider = $query37->fetch_assoc()) {?>
                                                                <figure class="gallery-item" data-markup-id="jupiterx_post_gallery_item[_1015]">
                                                                    <div class="gallery-icon landscape" data-markup-id="jupiterx_post_gallery_icon[_1015]">
                                                                        <!-- open output: jupiterx_post_gallery_icon[_1015] --><img width="261" height="261" src="gambar/pembayaran/<?=$rowslider['gambar']?>" class="attachment-full size-full" alt="" data-object-fit="cover" srcset="gambar/pembayaran/<?=$rowslider['gambar']?> 261w, gambar/pembayaran/<?=$rowslider['gambar']?> 150w"
                                                                            sizes="(max-width: 261px) 100vw, 261px" />
                                                                        <!-- close output: jupiterx_post_gallery_icon[_1015] -->
                                                                    </div>
                                                                </figure>
                                            <?php } ?>
                                                                
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
                        <section class="elementor-element elementor-element-eb97523 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="eb97523" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-c32c791 elementor-column elementor-col-100 elementor-top-column" data-id="c32c791" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3e4738f elementor-widget elementor-widget-jet-testimonials" data-id="3e4738f" data-element_type="widget" data-widget_type="jet-testimonials.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-jet-testimonials jet-elements">
                                                            <div class="jet-testimonials jet-equal-cols">
                                                                <div class="jet-testimonials__instance elementor-slick-slider" data-settings='{"slidesToShow":{"desktop":1,"tablet":0,"mobile":0},"autoplaySpeed":5000,"autoplay":true,"infinite":true,"adaptiveHeight":false,"pauseOnHover":true,"speed":500,"arrows":false,"dots":true,"slidesToScroll":1,"prevArrow":"<i class=\"fa fa-angle-left prev-arrow jet-arrow\"><\/i>","nextArrow":"<i class=\"fa fa-angle-right next-arrow jet-arrow\"><\/i>","rtl":false}'
                                                                    dir="ltr">
                                                                    <div class="jet-testimonials__item">
                                                                        <div class="jet-testimonials__item-inner">
                                                                            <div class="jet-testimonials__content">
                                                                                <div class="jet-testimonials__icon">
                                                                                    <div class="jet-testimonials__icon-inner"><i class="fa fa-quote-left"></i></div>
                                                                                </div>
                                                                                <p class="jet-testimonials__comment"><span>Thank you for being at the ultimate support to get our shipments delivered fast! This wouldn’t be possible without Trans Pacific team’s support.
Our most sincere appreciation for your high quality service and support.
Looking forward for our cooperation for many years to come. </span></p>
                                                                                <div class="jet-testimonials__name"><span>Alice Adinata</span></div>
                                                                                <div class="jet-testimonials__position"><span>Director  PT Adinata Melodi Kreasi. Jakarta, Indonesia</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="jet-testimonials__item">
                                                                        <div class="jet-testimonials__item-inner">
                                                                            <div class="jet-testimonials__content">
                                                                                <div class="jet-testimonials__icon">
                                                                                    <div class="jet-testimonials__icon-inner"><i class="fa fa-quote-left"></i></div>
                                                                                </div>
                                                                                <p class="jet-testimonials__comment"><span>Great job! Kudos to all Trans Pacific Team for the superb efforts. We want to thank you for your excellence performance. Trans Pacific consistently in time, within the agreed and always with great attitude. We look forward to continued collaboration with your company & team.Thanks.</span></p>
                                                                                <div
                                                                                    class="jet-testimonials__name"><span>Febriano</span></div>
                                                                            <div class="jet-testimonials__position"><span>Head of Section Operational Export PT. GREAT GIANT PINEAPPLE</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="jet-testimonials__item">
                                                                    <div class="jet-testimonials__item-inner">
                                                                        <div class="jet-testimonials__content">
                                                                            <div class="jet-testimonials__icon">
                                                                                <div class="jet-testimonials__icon-inner"><i class="fa fa-quote-left"></i></div>
                                                                            </div>
                                                                            <p class="jet-testimonials__comment"><span>We are very satisfied with the excellent work and high quality service that Trans Pacific team has provided to our company in the past 2 years. The works and services they have provided are thorough and fast, making my team’s job easier and efficient.</span></p>
                                                                            <div
                                                                                class="jet-testimonials__name"><span>Willy Hadikoesoemo</span></div>
                                                                        <div class="jet-testimonials__position"><span>CEO Aquavue Group</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="jet-testimonials__item">
                                                                <div class="jet-testimonials__item-inner">
                                                                    <div class="jet-testimonials__content">
                                                                        <div class="jet-testimonials__icon">
                                                                            <div class="jet-testimonials__icon-inner"><i class="fa fa-quote-left"></i></div>
                                                                        </div>
                                                                        <p class="jet-testimonials__comment"><span>We engaged with Trans Pacific for the first time on the early 2018. It was being recommended by our distributor that their services was extraordinary. We tried to use their service for our product import from Hong Kong, in which we had a long history with working relationship with other global forwarder. We just found out that we never been asked to issue any Non Dangerous Goods statement letter before which can implicate to our import and against our compliance . We were being reminded by Trans Pacific to comply and helped us to ship in the right way. So i would say transpacific really helps us to do the import the right way with the complete documents.

We did have some delay on the first import with custom clearance process in Jakarta, in which us and Trans Pacific immediately assess and rectify the issues. We arranged the second more challenging shipment right after for medical devices from the United States and Hong Kong. Now everything went through smoothly and we were being upgraded to green lane status from the custom office, which is our first time since we did our first importing in 2014. It is probably because of the help and assistance from Trans Pacific to provide a complete and compliance documentation during the clearance process.

All shipments afterward runs very smooth. Of course, with a few challenges here and there arise from both parties and some custom clearance issue especially for new products and import SKU, because we are a medical device company with more rigid and complicated import procedure. I am very pleased on how Trans Pacific being our partner since early 2018 and how Verdi always there to support his team on a few cases. Eventhough sometimes we are being faced with a tough custom clearance situation, it would not slow down our product delivery timing.</span></p>
                                                                        <div
                                                                            class="jet-testimonials__name"><span>Arbi Munandar</span></div>
                                                                    <div class="jet-testimonials__position"><span>Head of Finance Bausch Lomb Indonesia</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="jet-testimonials__item">
                                                            <div class="jet-testimonials__item-inner">
                                                                <div class="jet-testimonials__content">
                                                                    <div class="jet-testimonials__icon">
                                                                        <div class="jet-testimonials__icon-inner"><i class="fa fa-quote-left"></i></div>
                                                                    </div>
                                                                    <p class="jet-testimonials__comment"><span>Our company has been doing import since 2007 and we have changed forwarder for many times. But these few years back, we have been working with Trans Pacific as our forwarder and don't have any intention to find a new one because Trans Pacific always deliver what they promise. They also upgrade their services from time to time so they can catch up with our dynamic business rhythm. 

I will recommend anyone who wants to have a peaceful mind to work together with this company since we can rely on them.</span></p>
                                                                    <div class="jet-testimonials__name"><span>Stella Komala Dewi</span></div>
                                                                    <div class="jet-testimonials__position"><span>Director PT Indo Toys Importing Service</span></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
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
            <section class="elementor-element elementor-element-4772b71 elementor-section-stretched elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-phone elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                data-id="4772b71" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-d43fb6d elementor-column elementor-col-50 elementor-top-column" data-id="d43fb6d" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-8afd64b elementor-widget elementor-widget-heading" data-id="8afd64b" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">The Expert in Logistics</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f41fa6a elementor-widget elementor-widget-text-editor" data-id="f41fa6a" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a513d5b elementor-align-center elementor-widget elementor-widget-button" data-id="a513d5b" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a href="contact-us/index.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                    <span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Contact Us</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1abb593 elementor-hidden-phone elementor-column elementor-col-50 elementor-top-column" data-id="1abb593" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-ccb2ff7 elementor-widget elementor-widget-image" data-id="ccb2ff7" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img src="wp-content/uploads/elementor/thumbs/piyanut-suntaranil-1133332-unsplash-copy-pg4ap572f4ydeyr98afzdomlg4mu7rp4oz42nw2gri.jpg" title="piyanut-suntaranil-1133332-unsplash-copy" alt="piyanut-suntaranil-1133332-unsplash-copy" />                                                </div>
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
    </main>
    