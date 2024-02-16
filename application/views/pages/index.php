<?php 
function konversiTanggal($tanggal)
{
    $myDateTime = DateTime::createFromFormat('Y-m-d', $tanggal);
    $newDateString = $myDateTime->format('d-m-Y');
    return $newDateString;
}
?>
<!-- Start Banner Area -->
<section class="banner-area" style="background: none;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="banner-text">
                            <h1 align="center">Selamat Datang di Website <br>SMK Al-Hamidiyah</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-img" style="width: 100%; margin: 0; padding: 0; left: 0px; filter: brightness(75%);">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?= base_url(); ?>assets/img/fav_home.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?= base_url(); ?>assets/img/fav_home_2.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?= base_url(); ?>assets/img/fav_home_3.jpeg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?= base_url(); ?>assets/img/fav_home_4.jpeg" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?= base_url(); ?>assets/img/fav_home_5.jpeg" alt="Fifth slide">
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Blog Area -->
<section class="blog-area-three bg-color-two pt-100 pb-70">
    <div class="container">
        <div class="section-title white-title">
            <h2>Kabar Berita Terbaru</h2>
        </div>

        <div class="row">
            <?php 
                $sum = count($berita) > 3 ? 3 : count($berita);
                for ($i=0; $i < $sum; $i++):
            ?>
            <div class="col-lg-4 col-md-6" style="height: 450px; overflow: hidden;">
                    <div class="single-blog">
                        <a href="<?=base_url('pages/baca/'.$berita[$i]['slug']); ?>" style="height: 190px; overflow: hidden;">
                            <img src="<?=base_url('assets/img/berita/').$berita[$i]['foto_utama']; ?>" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="#"><?=$berita[$i]['penulis']; ?></a>
                                </li>

                                <li>
                                    <i class="flaticon-calendar"></i>
                                    <?=konversiTanggal($berita[$i]['tanggal']); ?>
                                </li>
                            </ul>

                            <a href="<?=base_url('pages/baca/'.$berita[$i]['slug']); ?>">
                                <h3><?=$berita[$i]['judul']; ?></h3>
                            </a>
                            <a href="<?=base_url('pages/baca/'.$berita[$i]['slug']); ?>" class="read-more">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<!-- End Blog Area -->