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
            <h2>Informasi</h2>
            <ul>
                <li>
                    <a href="<?=base_url(); ?>">
                        Home
                    </a>
                </li>

                <li class="active"><?= $judul ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <?php if ($q == "registrasi"): ?>
                <h2>Pengumuman Gelombang PPDB</h2>
            <?php else : ?>
                <h2>Pengumuman Kelolosan PPDB</h2>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Tahun Ajaran</th>
                        <?php if ($user != NULL): ?>
                        <th><?= $q == "registrasi" ? "Action": "Link"; ?></th>
                        <?php endif; ?>
                    </tr>
                    <?php $i = 0; foreach ($pengumuman as $p):?>
                        <tr>
                            <td><?= ++$i; ?></td>
                            <td><?= $p->judul ?></td>
                            <td><?= $p->deskripsi ?></td>
                            <td><?= $p->tahun_ajaran ?></td>
                            <?php if ($user != NULL): ?>
                            <?php if ($q == "registrasi"): ?>
                                <td>
                                    <?php if ($p->is_active == 1): ?>
                                        <a href="<?= base_url(""); ?>" class="btn btn-primary btn-xs">Daftar</a>
                                    <?php else : ?>
                                        <a href="#" class="btn btn-secondary btn-xs">#</a>
                                    <?php endif; ?>                                
                                </td>
                            <?php else : ?>
                                <td>
                                    <?php if ($p->link_files != ""): ?>
                                        <a href="<?= $p->link_files ?>" class="text-primary">Click here!</a>
                                    <?php else : ?>
                                        <a href="#" class="text-primary">No Files Uploaded</a>
                                    <?php endif; ?>                                
                                </td>
                            <?php endif; ?>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->