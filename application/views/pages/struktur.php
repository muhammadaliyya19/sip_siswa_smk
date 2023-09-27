<!-- Start Page Title Area -->
<div class="page-title-area bg-21">
    <div class="container">
        <div class="page-title-content">
            <h2>Struktur Organisasi SMK Al - Hamidiyah</h2>
            <ul>
                <li>
                    <a href="<?=base_url(); ?>">
                        Home
                    </a>
                </li>

                <li class="active">Struktur Organisasi</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Team Area -->
<section class="team-page-area bg-color ptb-100">
    <div class="container">
        <h2 class="text-center">Selayang Pandang</h2>
        <p style="text-align: center;"><?=$pengurus[0]['nama']; ?></p>
        <div class="row">
            <?php foreach ($pengurus as $p):?>
                <div class="col-lg-12" align="center">
                    <div class="thumbnail">
                        <img src="<?=base_url('assets/img/pengurus_sarpras/'.$p['foto']); ?>" alt="pengurus">
                    </div>
                </div>        
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Team Area -->