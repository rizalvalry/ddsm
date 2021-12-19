<div class="jupiterx-site" data-markup-id="jupiterx_site">

<?php
				include "config/tgl_indo.php";
				$db->query("UPDATE artikel SET dibaca = dibaca + 1 WHERE id_artikel = '$_GET[id]'");
				$query89     = $db->prepare("SELECT kategori_artikel.nama_kategori, artikel.judul_artikel, artikel.isi_artikel, artikel.tanggal, artikel.jam, artikel.dibaca, artikel.gambar, artikel.judul_seo, user.nama_lengkap FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori LEFT JOIN user ON artikel.id_user=user.id_user WHERE artikel.id_artikel = ?");
				$query89->bind_param("i", $id_artikel);
				$id_artikel  = $_GET['id'];
				$query89->execute();
				$result89    = $query89->get_result();
				$row89       = $result89->fetch_assoc();
				$tanggal     = tgl_indo( $row89['tanggal'] );
			?>

<main class="jupiterx-main" data-markup-id="jupiterx_main">		
	<div data-elementor-type="post" data-elementor-id="1060" class="elementor elementor-1060" data-elementor-settings="[]">
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
                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image:url('gambar/banner/<?= $rowevents['gambar'] ?>')">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-24e856b elementor-column elementor-col-100 elementor-top-column" data-id="24e856b" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-0f2424c p-no-margin elementor-widget elementor-widget-heading" data-id="0f2424c" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default"><?= $row89['judul_artikel'] ?></h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-dac60f6 elementor-widget elementor-widget-text-editor" data-id="dac60f6" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
																						<p style="font-size : 10px; margin-top : 6px;"><?php echo 'Kategori : '.$row89['nama_kategori'].' | Tanggal : '.$tanggal.' | Jam : '.$row89['jam'].' WIB | Diposting : '.$row89['nama_lengkap'].' | Dibaca : '.$row89['dibaca'].' kali '; ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
				<section class="elementor-element elementor-element-cffcda0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="cffcda0" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-9fdf716 elementor-column elementor-col-50 elementor-top-column" data-id="9fdf716" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-96c117c elementor-widget elementor-widget-text-editor" data-id="96c117c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p><?php echo $row89['isi_artikel']; ?></p></div>
				</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-562cf8b elementor-column elementor-col-50 elementor-top-column" data-id="562cf8b" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-1899772 elementor-widget elementor-widget-image" data-id="1899772" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										<img width="5848" height="3899" src="gambar/artikel/<?php echo $row89['gambar']; ?>" class="attachment-full size-full" alt="" srcset="gambar/artikel/<?php echo $row89['gambar']; ?> 5848w, gambar/artikel/<?php echo $row89['gambar']; ?> 300w, gambar/artikel/<?php echo $row89['gambar']; ?> 768w, gambar/artikel/<?php echo $row89['gambar']; ?> 1024w" sizes="(max-width: 5848px) 100vw, 5848px" />											</div>
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
	<!--products-->
	<div class="products">	 
		<div class="container">
			
			<div class="col-md- product-model-sec-custom">
			<?php
				include "config/tgl_indo.php";
				$db->query("UPDATE artikel SET dibaca = dibaca + 1 WHERE id_artikel = '$_GET[id]'");
				$query89     = $db->prepare("SELECT kategori_artikel.nama_kategori, artikel.judul_artikel, artikel.isi_artikel, artikel.tanggal, artikel.jam, artikel.dibaca, artikel.gambar, artikel.judul_seo, user.nama_lengkap FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori LEFT JOIN user ON artikel.id_user=user.id_user WHERE artikel.id_artikel = ?");
				$query89->bind_param("i", $id_artikel);
				$id_artikel  = $_GET['id'];
				$query89->execute();
				$result89    = $query89->get_result();
				$row89       = $result89->fetch_assoc();
				$tanggal     = tgl_indo( $row89['tanggal'] );
			?>
				<div class="rsidebar-top">	
					<div class="row">
						<center>
							<h2> <?php echo $row89['judul_artikel']; ?>  </h2>
							<p style="font-size : 10px; margin-top : 6px;"><?php echo 'Kategori : '.$row89['nama_kategori'].' | Tanggal : '.$tanggal.' | Jam : '.$row89['jam'].' WIB | Diposting : '.$row89['nama_lengkap'].' | Dibaca : '.$row89['dibaca'].' kali '; ?></p><br />
							<img src="gambar/artikel/<?php echo $row89['gambar']; ?>" class="img-responsive" height="80%" width="80%" /><br/>
						</center>
						<p><?php echo $row89['isi_artikel']; ?></p>
					</div>
					<br />
					<?php
						$batas                   = 10;
						if ( empty($_GET['halkomentar']) ){
							$posisi              = 0;
							$_GET['halkomentar'] = 1;
						} else if ( $_GET['halkomentar'] > 0 ){
							$posisi              = ( $_GET['halkomentar'] - 1 ) * $batas;
						}
						$query11  = $db->prepare("SELECT nama_lengkap, email, komentar, tanggal, jam FROM komentar WHERE id_artikel = ? AND aktif = ? ORDER BY id_komentar DESC limit $posisi,$batas");
						$query11->bind_param("is", $id_artikel, $aktif11);
						$aktif11  = "Y";
						$query11->execute();
						$result11 = $query11->get_result();
						$row11    = $result11->num_rows;
					?>
					
					<?php
						while ( $row111 = $result11->fetch_assoc() ){
					?>
					<div class="row">
						<div class="col-md-1">
						<img src="images/poto.jpg" />
						</div>
						<div class="col-md-11">
							<p><?php echo $row111['komentar']; ?></p>
							<p><?php echo $row111['nama_lengkap'].' | '.$row111['tanggal'].' - '.$row111['jam'].' WIB' ?></p>
						</div>
					</div><hr />
					<?php
						}
					?>
					<div class="row">
						<center>
							<ul class="pagination pagination-lg">
							<?php
								$query27      = $db->prepare("SELECT id_komentar FROM komentar WHERE id_artikel = ? AND aktif = ?");
								$query27->bind_param("is", $id_artikel, $aktif11);
								$query27->execute();
								$result27     = $query27->get_result();
								$row27        = $result27->num_rows;
								$jumlah_hal27 = ceil ($row27/$batas);
							?>
								<li class="<?php if ( $_GET['halkomentar'] <= 1 ) echo "disabled"; ?>"><a href="halkomentar-<?php echo $_GET['id']; ?>-<?php echo $_GET['halkomentar'] - 1; ?>.html"><i class="fa fa-angle-left">«</i></a></li>
								<?php
									for ( $i = 1; $i <= $jumlah_hal27; $i++ ){
								?>
									<li class="<?php if ( $_GET['halkomentar'] == $i ) echo "active"; ?>"><a href="<?php echo "halkomentar-$_GET[id]-$i.html"; ?>"><?php echo $i; ?></a></li>
								<?php
									}
								?>
								<li class="<?php if ( $_GET['halkomentar'] >= $jumlah_hal27 ) echo "disabled"; ?>"><a href="halkomentar-<?php echo $_GET['id']; ?>-<?php echo $_GET['halkomentar'] + 1; ?>.html"><i class="fa fa-angle-right">»</i></a></li>
							</ul>
						</center>
					</div>
					<div class="row">
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->