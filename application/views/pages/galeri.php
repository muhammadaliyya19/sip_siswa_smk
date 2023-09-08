		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
		    <div class="container">
		        <div class="page-title-content">
		            <h2>Galeri</h2>
		            <ul>		                
		                <li><a href="<?=base_url(); ?>">Home</a></li>
		                <li class="active">Foto & Video Kegiatan MASJID JAMI` FATHUL BARI</li>
		            </ul>
		        </div>
		    </div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Portfolio Area -->
		<section class="portfolio-area ptb-100">
		    <div class="container">
		        <div class="portfolio-wraps">
		            <div class="shorting-menu">
		                <button class="filter" data-filter="all">
		                    Semua
		                </button>
		                <button class="filter" data-filter=".foto">
		                    Foto
		                </button>
		                <button class="filter" data-filter=".video">
		                    Video
		                </button>
		                <button class="filter" data-filter=".social_media">
		                    Social Media
		                </button>
		            </div>

		            <div class="shorting">
		                <div class="row">
		                	<?php foreach ($foto as $f):?>
			                    <div class="col-lg-3 col-md-6 mix foto">
			                        <div class="single-portfolio">
			                            <div class="portfolio-image bg-1" style="background-image: url('<?=base_url('assets/img/galeri/').$f['foto']; ?>')">
			                                <div class="price-wrap">
			                                    <a href="<?=base_url('pages/carousel_galeri/'.$f['id']); ?>" class="popup-youtube">
			                                        <i class="flaticon-play"></i>
			                                    </a>
			                                </div>
			                            </div>
			                            <div class="portfolio-content">
			                                <div>
			                                    <span><?=$f['judul']; ?></span>

			                                    <h3>
			                                        <a href="#">
			                                            <?=$f['keterangan']; ?>
			                                        </a>
			                                    </h3>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
		                	<?php endforeach; ?>

		                	<?php foreach ($video as $v):?>
		                    <div class="col-lg-4 col-md-6 mix video">
		                        <div class="single-portfolio">
		                            <div class="portfolio-image bg-2" style="background-image: url('<?=base_url('assets/img/galeri/').$v['thumbnail']; ?>')">
		                                <div class="price-wrap">
		                                    <a href="<?=$v['link']; ?>" class="popup-youtube">
		                                        <i class="flaticon-play"></i>
		                                    </a>
		                                </div>
		                            </div>
		                            <div class="portfolio-content">
		                                <div>

		                                    <h3>
		                                        <a href="<?=$v['link']; ?>" target="_blank">
		                                    		<?=$v['judul']; ?>
		                                        </a>
		                                    </h3>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                	<?php endforeach; ?>
		                    <div class="col-lg-3 col-md-6 mix social_media">
		                        <div class="single-portfolio">
		                            <div class="portfolio-image bg-2" style="background-image: url('<?=base_url('assets/img/youtube-logo.jpg'); ?>')">
		                                <div class="price-wrap">
		                                    <a href="https://youtube.com/c/ArifIbnuzainal" target="_blank">
		                                        <i class="flaticon-play"></i>
		                                    </a>
		                                </div>
		                            </div>
		                            <div class="portfolio-content">
		                                <div>
		                                    <span>YouTube</span>

		                                    <h3>
		                                        <a href="https://youtube.com/c/ArifIbnuzainal" target="_blank">
		                                            YouTube
		                                        </a>
		                                    </h3>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-3 col-md-6 mix social_media">
		                        <div class="single-portfolio">
		                            <div class="portfolio-image bg-2" style="background-image: url('<?=base_url('assets/img/fb_logo.jpg'); ?>')">
		                                <div class="price-wrap">
		                                    <a href="https://www.facebook.com/profile.php?id=100004867660094" target="_blank">
		                                        <i class="flaticon-play"></i>
		                                    </a>
		                                </div>
		                            </div>
		                            <div class="portfolio-content">
		                                <div>
		                                    <span>Facebook</span>

		                                    <h3>
		                                        <a href="https://www.facebook.com/profile.php?id=100004867660094" target="_blank">
		                                            Facebook
		                                        </a>
		                                    </h3>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-3 col-md-6 mix social_media">
		                        <div class="single-portfolio">
		                            <div class="portfolio-image bg-2" style="background-image: url('<?=base_url('assets/img/instagram-logo.jpg'); ?>')">
		                                <div class="price-wrap">
		                                    <a href="https://instagram.com/arif_ibnu_zainal?utm_medium=copy_link" target="_blank">
		                                        <i class="flaticon-play"></i>
		                                    </a>
		                                </div>
		                            </div>
		                            <div class="portfolio-content">
		                                <div>
		                                    <span>Instagram</span>

		                                    <h3>
		                                        <a href="https://instagram.com/arif_ibnu_zainal?utm_medium=copy_link" target="_blank">
		                                            Instagram
		                                        </a>
		                                    </h3>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-3 col-md-6 mix social_media">
		                        <div class="single-portfolio">
		                            <div class="portfolio-image bg-2" style="background-image: url('<?=base_url('assets/img/whatsapp.png'); ?>')">
		                                <div class="price-wrap">
		                                    <a href="https://wa.me/+6289507996000" target="_blank">
		                                        <i class="flaticon-play"></i>
		                                    </a>
		                                </div>
		                            </div>
		                            <div class="portfolio-content">
		                                <div>
		                                    <span>WhatsApp</span>

		                                    <h3>
		                                        <a href="https://wa.me/+6289507996000" target="_blank">
		                                            WhatsApp
		                                        </a>
		                                    </h3>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- End Portfolio Area -->