<!-- Start Navbar Area -->
<div class="navbar-area navbar-area-three" style="background: #4e73df;">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <h5 class="text-white">Masjid Jami` Fathul Bari</h5>
            <!-- <img src="<?= base_url('front-end/'); ?>assets/img/logo.png" ="Logo"> -->
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="index.html">
                    <h3 class="text-white">Masjid Jami` Fathul Bari</h3>
                    <!-- <img src="<?= base_url('front-end/'); ?>assets/img/white-logo.png" alt="Logo"> -->
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="<?=base_url(); ?>" class="nav-link active">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('pages/galeri'); ?>" class="nav-link">Galeri</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('pages/berita'); ?>" class="nav-link">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('pages/laporan_kas'); ?>" class="nav-link">
                                Laporan kas
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                profil
                                <i class="bx bx-chevron-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/visimisi') ?>" class="nav-link">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/kontak'); ?>" class="nav-link">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/pengurus'); ?>" class="nav-link">Susunan Pengurus</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/sarpras'); ?>" class="nav-link">Sarana Prasarana</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                penjadwalan
                                <i class="bx bx-chevron-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/jadwal_jumat') ?>" class="nav-link">Sholat Jum'at</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/tarawih_ramadhan'); ?>" class="nav-link">Sholat Tarawih & Tasbih</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/pengajian'); ?>" class="nav-link">Pengajian Ramadhan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/hidangan_ramadhan'); ?>" class="nav-link">Pemberi Hidangan Buka & Sahur</a>
                                </li>
                            </ul>
                        </li>                        
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->