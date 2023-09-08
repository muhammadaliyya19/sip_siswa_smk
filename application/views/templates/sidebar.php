<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <?php if($user['level'] != "Customer"): ?>
            <li class="<?= $judul == "Dashboard" ? 'active' : '' ?>"><a href="<?php echo base_url('dashboard') ?>"><i
                        class="fa fa-tachometer-alt"></i> <span>&nbsp; Dashboard</span></a></li>
            <?php endif; ?>

            <!-- MENU UNTUK ADMIN -->
            <?php if($user['level'] == "Admin"): ?>
            <li class="<?= $judul == "Produk" ? 'active' : '' ?>"><a href="<?php echo base_url('produk') ?>"><i
                        class="fas fa-boxes"></i> <span>&nbsp; Produk</span></a></li>
            <li class="<?= $judul == "Pesanan" || $judul == "Pesanan Saya" ? 'active' : '' ?>"><a
                    href="<?php echo base_url('pesanan') ?>"><i class="fas fa-shopping-cart"></i> <span>&nbsp;
                        Pesanan</span></a></li>
            <li class="treeview <?= $judul == "Data Barang Masuk" || $judul == "Data Cek Stok Gudang" ? 'menu-open active' : '' ?>">
                <a href="#">
                    <i class="fas fa-search"></i> <span>&nbsp;Pemeriksaan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-down pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?= $judul == "Data Barang Masuk" ? 'active' : '' ?>"><a href="<?php echo base_url('barang_masuk') ?>"><i class="fa fa-circle"></i> Barang Masuk </a></li>
                    <li class="<?= $judul == "Data Cek Stok Gudang" ? 'active' : '' ?>"><a href="<?php echo base_url('cek_stok_gudang') ?>"><i class="fa fa-circle"></i> Stok Gudang </a></li>
                </ul>
            </li>
            <!-- <li class="<?= $judul == "Laporan" ? 'active' : '' ?>"><a href="<?php echo base_url('pages/laporan') ?>"><i
                        class="fas fa-file"></i> <span>&nbsp; Laporan</span></a></li> -->
            <li class="<?= $judul == "Data User" ? 'active' : '' ?>"><a href="<?php echo base_url('users') ?>"><i
                        class="fas fa-users-cog"></i> <span>&nbsp; Data User</span></a></li>

            <!-- MENU UNTUK PRODUKSI -->
            <?php elseif ($user['level'] == "Produksi") : ?>
            <li><a href="<?php echo base_url('barang_masuk') ?>"><i class="fas fa-file"></i> <span>&nbsp; Lapor Barang
                        Masuk</span></a></li>

            <!-- MENU UNTUK GUDANG -->
            <?php elseif ($user['level'] == "Gudang") : ?>
            <li><a href="<?php echo base_url('barang_masuk') ?>"><i class="fas fa-file"></i> <span>&nbsp; Cek Barang
                        Masuk</span></a></li>
            <li><a href="<?php echo base_url('cek_stok_gudang') ?>"><i class="fas fa-file"></i> <span>&nbsp; Cek Stok
                        Gudang</span></a></li>

            <!-- MENU UNTUK CUSTOMER -->
            <?php else  : ?>
            <li class="<?= $judul == "Pesanan" ? 'active' : '' ?>"><a href="<?php echo base_url('pesanan') ?>"><i
                        class="fas fa-shopping-cart"></i> <span>&nbsp;
                        <?=$user['level'] == "Customer" ? "Pesanan Saya" : "Pesanan"?></span></a></li>
            <!-- <li><a href="<?php echo base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>CUSTOMER</span></a></li> -->

            <?php endif; ?>
            <li class="<?= $judul == "Profil Saya" ? 'active' : '' ?>"><a href="<?php echo base_url('profil') ?>"><i
                        class="fas fa-user"></i> <span>&nbsp; Profil Saya</span></a></li>
            <li><a href="<?php echo base_url() ?>" target="_blank"><i class="fas fa-globe"></i> <span>&nbsp; Lihat
                        Website</span></a></li>
            <li><a href="<?php echo base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>&nbsp;
                        Logout</span></a></li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>