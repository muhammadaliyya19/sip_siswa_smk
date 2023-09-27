<!-- Start Navbar Area -->
<div class="navbar-area navbar-area-three" style="background: #4e73df;">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <h5 class="text-white">SMK Al-Hamidiyah</h5>
            <!-- <img src="<?= base_url('front-end/'); ?>assets/img/logo.png" ="Logo"> -->
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="index.html">
                    <h3 class="text-white">SMK Al-Hamidiyah</h3>
                    <!-- <img src="<?= base_url('front-end/'); ?>assets/img/white-logo.png" alt="Logo"> -->
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?=base_url(); ?>" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Profil Sekolah
                                <i class="bx bx-chevron-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/visi_misi') ?>" class="nav-link">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/contact'); ?>" class="nav-link">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/struktur'); ?>" class="nav-link">Struktur Organisasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Informasi
                                <i class="bx bx-chevron-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/ppdb?q=registrasi') ?>" class="nav-link">Pendaftaran PPDB</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('pages/ppdb?q=announcement'); ?>" class="nav-link">Pengumuman PPDB</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="<?= base_url('pages/berita'); ?>" class="nav-link">Berita</a>
                                </li> -->
                            </ul>
                        </li>   
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Auth
                                <i class="bx bx-chevron-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?= base_url('auth/login') ?>" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('auth/registration'); ?>" class="nav-link">Registrasi</a>
                                </li>
                            </ul>
                        </li>   
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->