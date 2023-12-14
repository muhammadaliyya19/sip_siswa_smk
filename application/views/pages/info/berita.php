<!-- Start Page Title Area -->
<?php 
function konversiTanggal($tanggal)
{
    $myDateTime = DateTime::createFromFormat('Y-m-d', $tanggal);
    $newDateString = $myDateTime->format('d-m-Y');
    return $newDateString;
}
?>
<div class="page-title-area bg-6">
    <div class="container">
        <div class="page-title-content">
            <h2>Berita</h2>
            <ul>
                <li>
                    <a href="<?=base_url(); ?>">
                        Home
                    </a>
                </li>

                <li class="active">Berita / Pengumuman</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Dapatkan Berita Terbaru Kami</h2>
        </div>

        <div class="row">
            <?php foreach ($berita as $b):?>
                <div class="col-lg-3 col-md-6" style="height: 450px; overflow: hidden;">
                    <div class="single-blog">
                        <a href="<?=base_url('pages/baca/'.$b['slug']); ?>" style="height: 190px; overflow: hidden;">
                            <img src="<?=base_url('assets/img/berita/').$b['foto_utama']; ?>" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="#"><?=$b['penulis']; ?></a>
                                </li>

                                <li>
                                    <i class="flaticon-calendar"></i>
                                    <?=konversiTanggal($b['tanggal']); ?>
                                </li>
                            </ul>

                            <a href="<?=base_url('pages/baca/'.$b['slug']); ?>">
                                <h3><?=$b['judul']; ?></h3>
                            </a>
                            <a href="<?=base_url('pages/baca/'.$b['slug']); ?>" class="read-more">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Blog Area -->