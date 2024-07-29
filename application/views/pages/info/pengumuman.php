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
                        <th><?= $q == "registrasi" ? "Judul": "Pengumuman Pendaftaran"; ?></th>
                        <?php if ($q == "registrasi"): ?>
                        <th>Deskripsi</th>
                        <?php endif; ?>
                        <th>Tahun Ajaran</th>
                        <?php if ($user != NULL): ?>
                        <th><?= $q == "registrasi" ? "Action": "Link Hasil Seleksi"; ?></th>
                        <?php endif; ?>
                    </tr>
                    <?php $i = 0; foreach ($pengumuman as $p):?>
                        <tr>
                            <td><?= ++$i; ?></td>
                            <td><?= $p->judul ?></td>
                            <?php if ($q == "registrasi"): ?>
                                <td><?= $p->deskripsi ?></td>
                            <?php endif; ?>
                            <td><?= $p->tahun_ajaran ?></td>
                            <?php if ($user != NULL): ?>
                                <?php if ($q == "registrasi"): ?>
                                    <?php if (!$is_registered): ?>
                                        <td>
                                            <?php if ($p->is_active == 1): ?>
                                                <a href="<?= base_url("pendaftaran/apply/".$p->id_pengumuman_pendaftaran); ?>" class="btn btn-primary btn-xs">Daftar</a>
                                            <?php else : ?>
                                                <a href="#" class="btn btn-secondary btn-xs">#</a>
                                            <?php endif; ?>                                
                                        </td>
                                    <?php else : ?>
                                        <td>
                                            <a href="#" class="btn btn-secondary btn-xs">#</a>
                                        </td>
                                    <?php endif; ?>
                            <?php else : ?>
                                <td>
                                    <?php if ($p->link_files != ""): ?>
                                        <a href="#" class="text-primary info-kelolosan" data-idpengumuman="<?=$p->id_pengumuman_pendaftaran;?>">List Siswa Lolos <i class="fa fa-eye"></i></a><br>
                                        <a href="<?= base_url('assets/berkas_pengumuman/' . $p->link_files);?> ?>" target="_blank" class="text-primary">Download Hasil Pengumuman</a>
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
 <!-- Modals -->
<div class="modal fade" id="modal-info-kelolosan">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Daftar Calon Siswa Lolos <span id="title_modal"></span> </h4>
            </div>
            <div class="modal-body">
                <div class="card" style="height: 100%;">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img class="img-circle"
                            src="<?= base_url('assets/img/user/student.png'); ?>"
                            alt="Angkot picture" style="height:200px; width:auto;">
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-8 text-right">
                                <table class="table table-bordered table-striped" width="100%">
                                    <thead>
                                        <th>No</th>
                                        <th>Nisn</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Asal Sekolah</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Status Kelolosan</th>
                                    </thead>
                                    <tbody id="body-kelolosan"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(document).on("click", ".info-kelolosan", function () {
            let idpengumuman = $(this).data("idpengumuman");
            console.log("data-idpengumuman", idpengumuman)
            $.ajax({
                url: '<?=base_url();?>/pendaftaran/getInfoLolos/'+idpengumuman,
                data: { id: idpengumuman },
                method: 'get',
                dataType: 'json',
                success:function(data) {
                    console.log(data);
                    if (data.status == 200) {
                        $('#modal-info-kelolosan').modal('show')
                        $('#title_modal').html("")
                        $('#title_modal').html("Pendaftaran "+ data.data_pengumuman.judul +" Tahun Ajaran " + data.data_pengumuman.tahun_ajaran)
                        $('#body-kelolosan').html("")

                        if (data.results.length > 0) {
                            let body_table = '';
                            data.results.forEach((siswa, i) => {
                                let status_lolos; 
                                if (siswa.status_lolos == "0"){
                                    status_lolos = "-"
                                } else if (siswa.status_lolos == "1"){
                                    status_lolos = "Akuntansi"
                                } else if (siswa.status_lolos == "2"){
                                    status_lolos = "Pemasaran"
                                }
                                body_table += `
                                <tr>
                                    <td>`+ (i+1) +`</th>
                                    <td>`+ siswa.nisn +`</th>
                                    <td>`+ siswa.nama +`</th>
                                    <td>`+ siswa.alamat_siswa +`</th>
                                    <td>`+ siswa.asal_sekolah +`</th>
                                    <td>`+ siswa.tahun_ajaran +`</th>
                                    <td>`+ status_lolos +`</th>
                                </tr><br>
                                `
                            });
                            $('#body-kelolosan').html(body_table)
                        }

                    } else {
                        let msg = data.message == 'Data kelolosan calon siswa not found' ? "Data belum diproses atau belum ada pengumuman." : data.message;
                        alert("Failed get data. Terjadi kesalahan : " + msg)
                    }
                    // $('#id').val(data.id_outlet);
                    // $('#kode').val(data.kode_outlet);
                    // $('#alamat').val(data.alamat_outlet);
                }
            });
        });
    });
</script>