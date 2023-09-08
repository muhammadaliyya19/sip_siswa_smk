<!-- Start Page Title Area -->
<div class="page-title-area bg-21">
    <div class="container">
        <div class="page-title-content">
            <h2>Sarana Prasarana Masjid Jami' Fathul Bari</h2>
            <ul>
                <li>
                    <a href="<?=base_url(); ?>">
                        Home
                    </a>
                </li>

                <li class="active">Sarana Prasarana</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Team Area -->
<section class="team-page-area bg-color ptb-100">
    <div class="container">
        <div class="row mt-5">
            <?php foreach ($sarana as $sp):?>
                <div class="col-lg-4 col-md-12 mt-2" align="center">
                    <div class="card" style="width: 100%; height: 350px;">
                        <div style="width: 100%; height: 275px; max-height: 275px">
                            <a href="<?=base_url('pages/foto_sarpras/'.$sp['id']); ?>" class="popup-youtube">
                              <img class="card-img-top" src="<?=base_url('assets/img/pengurus_sarpras/'.$sp['foto']); ?>" style="max-height: 275px;" alt="sarpras">
                            </a>
                        </div>
                          <div class="card-body" style="width: 100%; height: 75px;">
                            <h5 class="card-title"><?=$sp['nama']; ?></h5>
                          </div>
                    </div>
                </div>        
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Team Area -->