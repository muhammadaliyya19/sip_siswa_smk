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
                        <?php echo anchor(site_url('pendaftaran/create'), '<i class="fas fa-plus"></i> Tambah Data', 'class="btn btn-primary"'); ?>
                        <?php echo anchor(site_url('pendaftaran/excel'), '<i class="fas fa-sign-out-alt"></i> Excel', 'class="btn btn-success"'); ?>

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
                                <th>Id Tahun Ajaran</th>
                                <th>Id User</th>
                                <th>Status Lolos</th>
                                <th>Nisn</th>
                                <th>Action</th>
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
                ajax: { "url": "pendaftaran/json", "type": "POST" },
                columns: [
                    {
                        "data": "id",
                        "orderable": false
                    }, { "data": "nama" }, { "data": "tempat_lahir" }, { "data": "tanggal_lahir" }, { "data": "jenis_kelamin" }, { "data": "agama" }, { "data": "anak_ke" }, { "data": "jumlah_saudara" }, { "data": "no_hp_siswa" }, { "data": "alamat_siswa" },
                    { "data": "asal_sekolah" }, { "data": "alamat_sekolah" }, { "data": "nama_ayah" }, { "data": "nama_ibu" }, { "data": "alamat_orang_tua" }, { "data": "no_hp_orang_tua" },
                    { "data": "id_tahun_ajaran" }, { "data": "id_user" }, { "data": "status_lolos" }, { "data": "nisn" },
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

        });

    </script>