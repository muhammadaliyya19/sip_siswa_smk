<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <li class="<?= $judul == "Dashboard" ? 'active' : '' ?>">
                <a href="<?php echo base_url('dashboard') ?>">
                    <i class="fa fa-tachometer-alt"></i> <span>&nbsp; Dashboard</span>
                </a>
            </li>
            <!-- MENU UNTUK ADMIN -->
            <?php if($user['level'] == "Administrator"): ?>
            <li class="<?= ($judul == "Pendaftaran Saya" || $judul == "Pendaftaran" || $judul == "Data Pendaftaran" || $judul == "Tambah Pendaftaran") ? 'active' : '' ?>">
                <a href="<?php echo base_url('pendaftaran') ?>">
                    <i class="fas fa-laptop"></i> <span>&nbsp; Pendaftaran Calon Siswa</span>
                </a>
            </li>
            <li class="<?= ($judul == "Data Pengumuman PPDB" || $judul == "Tambah Pengumuman PPDB") ? 'active' : '' ?>">
                <a href="<?php echo base_url('pengumuman_ppdb') ?>">
                    <i class="fas fa-bullhorn"></i> <span>&nbsp; Pengumuman PPDB</span>
                </a>
            </li>
            <li class="<?= ($judul == "Data Berita" || $judul == "Tambah berita" || $judul == "Update Berita") ? 'active' : '' ?>">
                <a href="<?php echo base_url('berita') ?>">
                    <i class="fas fa-newspaper"></i> <span>&nbsp; Kelola Berita</span>
                </a>
            </li>
            <li class="<?= ($judul == "Data Users" || $judul == "Tambah Users" || $judul == "Update Users") ? 'active' : '' ?>">
                <a href="<?php echo base_url('users') ?>">
                    <i class="fas fa-users-cog"></i> <span>&nbsp; Kelola User</span>
                </a>
            </li>
            <!-- MENU UNTUK Calon Siswa -->
            <?php else  : ?>
            <li class="<?= $judul == "Pendaftaran Saya" ? 'active' : '' ?>">
                <a href="<?php echo base_url('pendaftaran/mine') ?>">
                    <i class="fas fa-list"></i> <span>&nbsp; Pendaftaran Saya</span>
                </a>
            </li>
            <?php endif; ?>
            <li class="<?= $judul == "Profil Saya" ? 'active' : '' ?>"><a href="<?php echo base_url('profil') ?>"><i
                        class="fas fa-user"></i> <span>&nbsp; Profil Saya</span></a></li>
            <li><a href="<?php echo base_url() ?>" target="_blank"><i class="fas fa-globe"></i> <span>&nbsp; Lihat
                        Website</span></a></li>
            <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>&nbsp;
                        Logout</span></a></li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>