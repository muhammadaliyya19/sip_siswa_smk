<!-- Start Page Title Area -->
<?php 
function konversiTanggal($tanggal)
{
    $myDateTime = DateTime::createFromFormat('Y-m-d', $tanggal);
    $newDateString = $myDateTime->format('d-m-Y');
    return $newDateString;
}
?>
<!-- Start Blog Details Area -->
        <div class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-wrap">
                            <div class="blog-top-content-wrap">
                                <img src="<?=base_url('assets/img/berita/').$this_berita['foto_utama']; ?>" alt="Image" style="width: 100%; height: auto;">
                                <ul class="post-details">
                                    <li>
                                        <i class="bx bx-user"></i>
                                        Ditulis Oleh : <?=$this_berita['penulis']; ?>
                                    </li>
                                    <li>
                                        <i class="bx bx-calendar"></i>
                                        <?=konversiTanggal($this_berita['tanggal']); ?>
                                    </li>
                                </ul>

                                <h3><?=$this_berita['judul']; ?></h3>

                                <?=$this_berita['konten']; ?>
                            </div>

                            <div class="tags-and-shear-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <ul class="tag-list">
                                            <li>
                                                <span>Tags:</span>
                                            </li>
                                              <?php 
                                                $tags = explode(",", $this_berita['tag']);
                                                foreach ($tags as $t) :
                                              ?>
                                                <li>
                                                    <a href="#"><?=$t; ?></a>
                                                </li>
                                              <?php
                                                endforeach;
                                              ?>
                                        </ul>
                                    </div>

                                    <div class="col-lg-6 col-md-5">
                                        <ul class="social-wrap">
                                            <li>
                                                <span>Bagikan:</span>
                                            </li>
                                            <li>
                                                <a href="https://plus.google.com/share?url=<?=base_url('pages/baca/'.$this_berita['slug']); ?>&text=<?=$this_berita['judul'] ?>" target="_blank" class="btn btn-danger">
                                                    <i class="bx bxl-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/share?url=<?=base_url('pages/baca/'.$this_berita['slug']); ?>&text=<?=$this_berita['judul'] ?>" target="_blank" class="btn btn-info">
                                                    <i class="bx bxl-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/sharer.php?u=<?=base_url('pages/baca/'.$this_berita['slug']); ?>" target="_blank" class="btn btn-primary">
                                                    <i class="bx bxl-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://api.whatsapp.com/send?text=<?=$this_berita['judul']; ?> <?=base_url('pages/baca/'.$this_berita['slug']); ?>" target="_blank" class="btn btn-success">
                                                    <i class="bx bxl-whatsapp"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="post-next-and-prev-wrap">
                                <div class="row">
                                    <?php if ($prev_berita!= null):?>
                                    <div class="col-lg-<?=$next_berita== null?'12':'6'; ?> col-sm-6">
                                        <div class="prev-img">
                                            <a href="<?=base_url('pages/baca/'.$prev_berita['slug']); ?>">
                                                <img src="<?=base_url('assets/img/berita/').$prev_berita['foto_utama']; ?>" alt="Image" style="width: 105px; height: 58px;">
                                                <h3>Post Sebelumnya</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($next_berita!= null):?>
                                    <div class="col-lg-<?=$prev_berita== null?'12':'6'; ?> col-sm-6">
                                        <div class="next-img">
                                            <a href="<?=base_url('pages/baca/'.$next_berita['slug']); ?>">
                                                <img src="<?=base_url('assets/img/berita/').$next_berita['foto_utama']; ?>" alt="Image" style="width: 105px; height: 58px;">
                                                <h3>Post Selanjutnya</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog-details-sidebar-wrap">
                            <div class="popular-post-wrap sidebar-widget">
                                <h3>Post Lainnya</h3>
                                <ul>
                                    <?php foreach ($random_berita as $rb):?>
                                   <!--  <li>
                                        <a href="<?=base_url('pages/baca/'.$rb['slug']); ?>">
                                            <img src="<?=base_url('assets/img/berita/').$rb['foto_utama']; ?>" alt="Image" style="width: 180px; height: 100px;">
                                            <h3><?=$rb['judul']; ?></h3>
                                            <span><?=konversiTanggal($rb['tanggal']); ?></span>  
                                        </a>
                                    </li> -->
                                    <li>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="<?=base_url('pages/baca/'.$rb['slug']); ?>">
                                                        <img src="<?=base_url('assets/img/berita/').$rb['foto_utama']; ?>" alt="Image" style="width: 180px; height: 100px;">
                                                    </a>
                                                </div>
                                                <div class="col" style="text-align: justify;">
                                                    <a href="<?=base_url('pages/baca/'.$rb['slug']); ?>">
                                                        <b><?=$rb['judul']; ?></b><br>
                                                    </a>
                                                    <span style="padding-left: 0;"><?=konversiTanggal($rb['tanggal']); ?></span>  
                                                </div>
                                            </div>
                                    </li>
                                    <?php endforeach; ?>                                    
                                </ul>
                            </div>
                            <div class="tags-wrap sidebar-widget mb-0">
                                <h3>Tags</h3>

                                <ul>
                                    <?php 
                                        foreach ($tags as $t) :
                                    ?>
                                    <li>
                                        <a href="#"><?=$t; ?></a>
                                    </li>
                                    <?php
                                        endforeach;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Details Area -->
        