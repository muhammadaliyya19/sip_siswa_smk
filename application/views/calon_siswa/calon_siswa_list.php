<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="pull-left">
                    <div class="box-title">
                        <h4>
                            <?php echo $judul ?>
                        </h4>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="box-title">
                        <!-- Filter th ajar -->
                        <label for="id_tahun_ajaran">Tahun Ajaran</label>
                        <select name="id_tahun_ajaran" id="id_tahun_ajaran" required>
                            <option value="All">All</option>
                            <?php foreach ($tahun_ajarans as $ta): ?>
                                <option value="<?= $ta->id_tahun_ajaran; ?>">
                                    <?= $ta->tahun_ajaran; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <a href="#" class="btn btn-info filter-data"><i class="fas fa-filter"></i> Filter</a>
                        <!-- batas filter -->
                        <?php echo anchor(site_url('pendaftaran/create'), '<i class="fas fa-plus"></i> Tambah Data', 'class="btn btn-primary"'); ?>
                        <a href="#" class="btn btn-success btn_excel"><i class="fas fa-sign-out-alt"></i> Excel</a>

                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dt" width="100%" id="#mytable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Anak Ke</th>
                                <th>Jumlah Saudara</th>
                                <th>No Hp Siswa</th>
                                <th>Alamat Siswa</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Alamat Orang Tua</th>
                                <th>No Hp Orang Tua</th>
                                <th>Tahun Ajaran</th>
                                <th>Status Lolos</th>
                                <th>Nisn</th>
                                <th>Berkas Pendaftaran</th>
                                <th>Action</th>
                                <!-- <th>Id User</th> -->
                                <!-- <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Gol Darah</th>
                                <th>Penghasilan Orang Tua</th>
                                <th>Tanggungan Anak</th> -->
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals for view data users -->
    <div class="modal fade" id="modal-info-user">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Informasi Login Akun Calon Siswa</h4>
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
                                <div class="col-lg-6 text-right">
                                    <b>Nama</b><br>
                                    <b>Username</b><br>
                                    <b>Password</b>
                                </div>
                                <div class="col-lg-6 text-left">
                                    <span id="holder_nama" class="mb-3">Nama</span><br>
                                    <span id="holder_username" class="mb-3">Username</span><br>
                                    <span id="holder_password" class="mb-3">Password</span>
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
            $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
                return {
                    "iStart": oSettings._iDisplayStart,
                    "iEnd": oSettings.fnDisplayEnd(),
                    "iLength": oSettings._iDisplayLength,
                    "iTotal": oSettings.fnRecordsTotal(),
                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                };
            };

            var id_ta = 0;

            var t = $(".dt").dataTable({
                initComplete: function () {
                    var api = this.api();
                    $('#mytable_filter input')
                        .off('.DT')
                        .on('keyup.DT', function (e) {
                            if (e.keyCode == 13) {
                                api.search(this.value).draw();
                            }
                        });
                },
                oLanguage: {
                    sProcessing: "loading..."
                },
                processing: true,
                serverSide: true,
                ajax: { 
                    "url": "<?= base_url('/pendaftaran/json')?>", 
                    "type": "POST",
                    "data": {
                        'id_tahun_ajaran': id_ta
                    }
                },
                columns: [
                    {
                        "data": "id_calon_siswa",
                        "orderable": false
                    }, { "data": "nama" }, { "data": "tempat_lahir" }, { "data": "tanggal_lahir" }, 
                    { 
                        "data": "jenis_kelamin",
                        "render": function (data) {
                            if (data == 'L') {
                                return ' Laki-laki ';
                            }
                            else if (data == 'P') {
                                return ' Perempuan ';
                            }
                        }
                    }, { "data": "agama" }, { "data": "anak_ke" }, { "data": "jumlah_saudara" }, { "data": "no_hp_siswa" }, { "data": "alamat_siswa" },
                    { "data": "asal_sekolah" }, { "data": "alamat_sekolah" }, { "data": "nama_ayah" }, { "data": "nama_ibu" }, { "data": "alamat_orang_tua" }, { "data": "no_hp_orang_tua" },
                    { "data": "tahun_ajaran" }, 
                    { 
                        "data": "status_lolos",
                        "render": function (data) {
                            if (data == 0) {
                                return ' - ';
                            }
                            else if (data == 1) {
                                return ' Jurusan Akuntansi ';
                            }
                            else if (data == 2) {
                                return ' Jurusan Pemasaran ';
                            }
                        }
                    }, 
                    { "data": "nisn" },
                    { 
                        "data": "berkas",
                        "render": function (data) {
                            if (data == "") {
                                return `Belum ada berkas`;
                            } else {
                                return `<a href="<?=base_url('assets/berkas_daftar/');?>` + data + ` " target="_blank">Link Berkas Terupload</a>`;
                            }
                        } 
                    },
                    // { "data": "id_user" }, 
                    // {"data": "berat_badan"},
                    // {"data": "tinggi_badan"},
                    // {"data": "gol_darah"},
                    // {"data": "penghasilan_orang_tua"},
                    // {"data": "tanggungan_anak"},
                    {
                        "data": "action",
                        "orderable": false,
                        "className": "text-center"
                    }
                ],
                order: [[0, 'desc']],
                rowCallback: function (row, data, iDisplayIndex) {
                    var info = this.fnPagingInfo();
                    var page = info.iPage;
                    var length = info.iLength;
                    var index = page * length + (iDisplayIndex + 1);
                    $('td:eq(0)', row).html(index);
                }
            });

            $(document).on("click", ".hapus-data", function () {
                hapus($(this).data("href"));
            });

            $(document).on("click", ".btn_excel", function () {
                alert("Data akan di export berdasarkan filter")
                var e = document.getElementById("id_tahun_ajaran");
                var value = e.value;
                id_ta = value;
                console.log(id_ta);
                let url = "<?=base_url('pendaftaran/excel/');?>" + id_ta;
                window.open(url);
            });

            $(document).on("click", ".filter-data", function () {
                alert("Data akan difilter")
                var e = document.getElementById("id_tahun_ajaran");
                var value = e.value;
                id_ta = value;
                console.log(id_ta);
                // $('.dt').DataTable().ajax.reload();
                // destroy old
                $('.dt').DataTable().clear().destroy();
                
                // reinitialize
                $(".dt").dataTable({
                    initComplete: function () {
                        var api = this.api();
                        $('#mytable_filter input')
                            .off('.DT')
                            .on('keyup.DT', function (e) {
                                if (e.keyCode == 13) {
                                    api.search(this.value).draw();
                                }
                            });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: { 
                        "url": "<?= base_url('/pendaftaran/json')?>", 
                        "type": "POST",
                        "data": {
                            'id_tahun_ajaran': id_ta
                        }
                    },
                    columns: [
                        {
                            "data": "id_calon_siswa",
                            "orderable": false
                        }, { "data": "nama" }, { "data": "tempat_lahir" }, { "data": "tanggal_lahir" }, 
                        { 
                            "data": "jenis_kelamin",
                            "render": function (data) {
                                if (data == 'L') {
                                    return ' Laki-laki ';
                                }
                                else if (data == 'P') {
                                    return ' Perempuan ';
                                }
                            }
                        }, { "data": "agama" }, { "data": "anak_ke" }, { "data": "jumlah_saudara" }, { "data": "no_hp_siswa" }, { "data": "alamat_siswa" },
                        { "data": "asal_sekolah" }, { "data": "alamat_sekolah" }, { "data": "nama_ayah" }, { "data": "nama_ibu" }, { "data": "alamat_orang_tua" }, { "data": "no_hp_orang_tua" },
                        { "data": "tahun_ajaran" }, 
                        { 
                            "data": "status_lolos",
                            "render": function (data) {
                                if (data == 0) {
                                    return ' - ';
                                }
                                else if (data == 1) {
                                    return ' Jurusan Akuntansi ';
                                }
                                else if (data == 2) {
                                    return ' Jurusan Pemasaran ';
                                }
                            }
                        }, 
                        { "data": "nisn" },
                        { 
                            "data": "berkas",
                            "render": function (data) {
                                console.log(data)
                                if (data == '') {
                                    return `Belum ada berkas`;
                                } else {
                                    return `<a href="<?=base_url('assets/berkas_daftar/');?>` + data + ` " target="_blank">Link Berkas Terupload</a>`;
                                }
                            } 
                        },
                        // { "data": "id_user" }, 
                        // {"data": "berat_badan"},
                        // {"data": "tinggi_badan"},
                        // {"data": "gol_darah"},
                        // {"data": "penghasilan_orang_tua"},
                        // {"data": "tanggungan_anak"},
                        {
                            "data": "action",
                            "orderable": false,
                            "className": "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function (row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });

            $(document).on("click", ".info-user", function () {
                let idsiswa = $(this).data("idsiswa");
                console.log("data-idsiswa", idsiswa)
                $.ajax({
                    url: '<?=base_url();?>/users/getUserJson/'+idsiswa,
                    data: { id: idsiswa },
                    method: 'get',
                    dataType: 'json',
                    success:function(data) {
                        console.log(data);
                        if (data.status == 200) {
                            $('#modal-info-user').modal('show')
                            $('#holder_nama').html(data.nama)
                            $('#holder_username').html(data.username)
                            $('#holder_password').html(data.password)
                        } else {
                            alert("Error ! " + data.message)
                        }
                        // $('#id').val(data.id_outlet);
                        // $('#kode').val(data.kode_outlet);
                        // $('#alamat').val(data.alamat_outlet);
                    }
                });
            });

        });

    </script>