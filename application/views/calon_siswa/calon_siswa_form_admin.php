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
                        <a href="<?php echo base_url('pendaftaran') ?>" class="btn btn-primary"><i
                                class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group <?php if (form_error('nama'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama"
                                        value="<?php echo $nama; ?>" />
                                <?php echo form_error('nama', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('tempat_lahir'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                        placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                                <?php echo form_error('tempat_lahir', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('tanggal_lahir'))
                                echo 'has-error' ?> ">
                                    <label for="date">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                        placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
                                <?php echo form_error('tanggal_lahir', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('jenis_kelamin'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Jenis Kelamin</label>
                                    <!-- <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin"
                                        placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" /> -->
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                    <option <?=$jenis_kelamin == "L" ? "selected" : ""; ?> value="L">Laki-laki</option>
                                    <option <?=$jenis_kelamin == "P" ? "selected" : ""; ?> value="P">Perempuan</option>
                                </select>
                                <?php echo form_error('jenis_kelamin', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('agama'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Agama</label>
                                    <!-- <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama"
                                        value="<?php echo $agama; ?>" /> -->
                                <select class="form-control" name="agama" id="agama" required>
                                    <option <?=$agama == "Islam" ? "selected" : ""; ?> value="Islam">Islam</option>
                                    <option <?=$agama == "Kristen" ? "selected" : ""; ?> value="Kristen">Kristen</option>
                                    <option <?=$agama == "Katolik" ? "selected" : ""; ?> value="Katolik">Katolik</option>
                                    <option <?=$agama == "Hindu" ? "selected" : ""; ?> value="Hindu">Hindu</option>
                                    <option <?=$agama == "Buddha" ? "selected" : ""; ?> value="Buddha">Buddha</option>
                                    <option <?=$agama == "Khonghucu" ? "selected" : ""; ?> value="Khonghucu">Khonghucu</option>
                                </select>
                                <?php echo form_error('agama', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('anak_ke'))
                                echo 'has-error' ?> ">
                                    <label for="int">Anak Ke</label>
                                    <input type="number" class="form-control" name="anak_ke" id="anak_ke"
                                        placeholder="Anak Ke" value="<?php echo $anak_ke; ?>" />
                                <?php echo form_error('anak_ke', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('jumlah_saudara'))
                                echo 'has-error' ?> ">
                                    <label for="int">Jumlah Saudara</label>
                                    <input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara"
                                        placeholder="Jumlah Saudara" value="<?php echo $jumlah_saudara; ?>" />
                                <?php echo form_error('jumlah_saudara', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('no_hp_siswa'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">No Hp Siswa</label>
                                    <input type="number" class="form-control" name="no_hp_siswa" id="no_hp_siswa"
                                        placeholder="No Hp Siswa" value="<?php echo $no_hp_siswa; ?>" />
                                <?php echo form_error('no_hp_siswa', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('alamat_siswa'))
                                echo 'has-error' ?> ">
                                    <label for="alamat_siswa">Alamat Siswa</label>
                                    <textarea class="form-control" rows="3" name="alamat_siswa" id="alamat_siswa"
                                        placeholder="Alamat Siswa"><?php echo $alamat_siswa; ?></textarea>
                                <?php echo form_error('alamat_siswa', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('asal_sekolah'))
                                echo 'has-error' ?> ">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <textarea class="form-control" rows="3" name="asal_sekolah" id="asal_sekolah"
                                        placeholder="Asal Sekolah"><?php echo $asal_sekolah; ?></textarea>
                                <?php echo form_error('asal_sekolah', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('alamat_sekolah'))
                                echo 'has-error' ?> ">
                                    <label for="alamat_sekolah">Alamat Sekolah</label>
                                    <textarea class="form-control" rows="3" name="alamat_sekolah" id="alamat_sekolah"
                                        placeholder="Alamat Sekolah"><?php echo $alamat_sekolah; ?></textarea>
                                <?php echo form_error('alamat_sekolah', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('nama_ayah'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Nama Ayah</label>
                                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah"
                                        placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" />
                                <?php echo form_error('nama_ayah', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('nama_ibu'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Nama Ibu</label>
                                    <input type="text" class="form-control" name="nama_ibu" id="nama_ibu"
                                        placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>" />
                                <?php echo form_error('nama_ibu', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('alamat_orang_tua'))
                                echo 'has-error' ?> ">
                                    <label for="alamat_orang_tua">Alamat Orang Tua</label>
                                    <textarea class="form-control" rows="3" name="alamat_orang_tua" id="alamat_orang_tua"
                                        placeholder="Alamat Orang Tua"><?php echo $alamat_orang_tua; ?></textarea>
                                <?php echo form_error('alamat_orang_tua', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('no_hp_orang_tua'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">No Hp Orang Tua</label>
                                    <input type="text" class="form-control" name="no_hp_orang_tua" id="no_hp_orang_tua"
                                        placeholder="No Hp Orang Tua" value="<?php echo $no_hp_orang_tua; ?>" />
                                <?php echo form_error('no_hp_orang_tua', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('id_tahun_ajaran'))
                                echo 'has-error' ?> ">
                                    <label for="id_tahun_ajaran">Tahun Ajaran</label>
                                    <select class="form-control" name="id_tahun_ajaran" id="id_tahun_ajaran" required>
                                    <?php foreach ($tahun_ajarans as $ta): ?>
                                        <option <?=$id_tahun_ajaran == $ta->id_tahun_ajaran ? "selected" : ""; ?> value="<?= $ta->id_tahun_ajaran; ?>">
                                            <?= $ta->tahun_ajaran; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('id_tahun_ajaran', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('status_lolos'))
                                echo 'has-error' ?> ">
                                    <label for="int">Status Lolos</label>
                                    <!-- <input type="text" class="form-control" name="status_lolos" id="status_lolos" placeholder="Status Lolos" value="<?php echo $status_lolos; ?>" /> -->
                                <select class="form-control" name="status_lolos" id="status_lolos" required>
                                    <option <?=$status_lolos == 0 ? "selected" : ""; ?> value="0">-</option>
                                    <option <?=$status_lolos == 1 ? "selected" : ""; ?> value="1">Akuntansi</option>
                                    <option <?=$status_lolos == 2 ? "selected" : ""; ?> value="2">Pemasaran</option>
                                </select>
                                <?php echo form_error('status_lolos', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('nisn'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Nisn</label>
                                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn"
                                        value="<?php echo $nisn; ?>" />
                                <?php echo form_error('nisn', '<small style="color:red">', '</small>') ?>
                            </div>
                            <!-- <div class="form-group <?php if (form_error('berat_badan'))
                                echo 'has-error' ?> ">
                            <label for="int">Berat Badan</label>
                            <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan" value="<?php echo $berat_badan; ?>" />
                            <?php echo form_error('berat_badan', '<small style="color:red">', '</small>') ?>
                        </div> -->
                            <!-- <div class="form-group <?php if (form_error('tinggi_badan'))
                                echo 'has-error' ?> ">
                            <label for="int">Tinggi Badan</label>
                            <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan" value="<?php echo $tinggi_badan; ?>" />
                            <?php echo form_error('tinggi_badan', '<small style="color:red">', '</small>') ?>
                        </div> -->
                            <!-- <div class="form-group <?php if (form_error('gol_darah'))
                                echo 'has-error' ?> ">
                            <label for="varchar">Gol Darah</label>
                            <input type="text" class="form-control" name="gol_darah" id="gol_darah" placeholder="Gol Darah" value="<?php echo $gol_darah; ?>" />
                            <?php echo form_error('gol_darah', '<small style="color:red">', '</small>') ?>
                        </div> -->
                            <!-- <div class="form-group <?php if (form_error('penghasilan_orang_tua'))
                                echo 'has-error' ?> ">
                            <label for="int">Penghasilan Orang Tua</label>
                            <input type="text" class="form-control" name="penghasilan_orang_tua" id="penghasilan_orang_tua" placeholder="Penghasilan Orang Tua" value="<?php echo $penghasilan_orang_tua; ?>" />
                            <?php echo form_error('penghasilan_orang_tua', '<small style="color:red">', '</small>') ?>
                        </div> -->
                            <!-- <div class="form-group <?php if (form_error('tanggungan_anak'))
                                echo 'has-error' ?> ">
                            <label for="int">Tanggungan Anak</label>
                            <input type="text" class="form-control" name="tanggungan_anak" id="tanggungan_anak" placeholder="Tanggungan Anak" value="<?php echo $tanggungan_anak; ?>" />
                            <?php echo form_error('tanggungan_anak', '<small style="color:red">', '</small>') ?>
                        </div> -->
                        <div class="form-group <?php if (form_error('berkas_persyaratan'))
                                echo 'has-error' ?> ">
                                    <label for="berkas_persyaratan">Berkas Persyaratan (zip / rar)</label>
                                    <input type="file" class="form-control" name="berkas_persyaratan" id="berkas_persyaratan"/>
                                <?php echo form_error('berkas_persyaratan', '<small style="color:red">', '</small>') ?>
                                <?php if ($berkas != "") :?>
                                        <a href="<?= base_url('assets/berkas_daftar/' . $berkas);?>" target="_blank">Link Berkas Terdahulu</a> &nbsp;
                                        <a href="<?= base_url('pendaftaran/delete_files/' . $id_calon_siswa);?>" class="text-danger" >Hapus Berkas</a>
                                    <?php else :?>
                                        <a href="#">Belum Ada Berkas</a>
                                    <?php endif;?>
                            </div>
                            <!-- Modal for nilai ijazah -->
                            <div class="modal fade" id="nilaiIjazahModal" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Nilai Ijazah</h4>                                            
                                        </div>
                                        <div class="modal-body">
                                            <!-- the form here -->
                                            <div class="form-group <?php if (form_error('nilai_bhs_indo'))
                                                echo 'has-error' ?> ">
                                                    <label for="decimal">Nilai Bhs Indo</label>
                                                    <input type="text" class="form-control" name="nilai_bhs_indo"
                                                        id="nilai_bhs_indo" placeholder="Nilai Bhs Indo"
                                                        value="<?php echo $nilai_bhs_indo; ?>" />
                                                <?php echo form_error('nilai_bhs_indo', '<small style="color:red">', '</small>') ?>
                                            </div>
                                            <div class="form-group <?php if (form_error('nilai_bhs_inggris'))
                                                echo 'has-error' ?> ">
                                                    <label for="decimal">Nilai Bhs Inggris</label>
                                                    <input type="text" class="form-control" name="nilai_bhs_inggris"
                                                        id="nilai_bhs_inggris" placeholder="Nilai Bhs Inggris"
                                                        value="<?php echo $nilai_bhs_inggris; ?>" />
                                                <?php echo form_error('nilai_bhs_inggris', '<small style="color:red">', '</small>') ?>
                                            </div>
                                            <div class="form-group <?php if (form_error('nilai_ipa'))
                                                echo 'has-error' ?> ">
                                                    <label for="decimal">Nilai Ipa</label>
                                                    <input type="text" class="form-control" name="nilai_ipa" id="nilai_ipa"
                                                        placeholder="Nilai Ipa" value="<?php echo $nilai_ipa; ?>" />
                                                <?php echo form_error('nilai_ipa', '<small style="color:red">', '</small>') ?>
                                            </div>
                                            <div class="form-group <?php if (form_error('nilai_ips'))
                                                echo 'has-error' ?> ">
                                                    <label for="decimal">Nilai Ips</label>
                                                    <input type="text" class="form-control" name="nilai_ips" id="nilai_ips"
                                                        placeholder="Nilai Ips" value="<?php echo $nilai_ips; ?>" />
                                                <?php echo form_error('nilai_ips', '<small style="color:red">', '</small>') ?>
                                            </div>
                                            <div class="form-group <?php if (form_error('nilai_mtk'))
                                                echo 'has-error' ?> ">
                                                    <label for="decimal">Nilai Mtk</label>
                                                    <input type="text" class="form-control" name="nilai_mtk" id="nilai_mtk"
                                                        placeholder="Nilai Mtk" value="<?php echo $nilai_mtk; ?>" />
                                                <?php echo form_error('nilai_mtk', '<small style="color:red">', '</small>') ?>
                                            </div>
                                            <div class="form-group <?php if (form_error('nilai_akhir'))
                                                echo 'has-error' ?> ">
                                                    <label for="decimal">Nilai Akhir</label>
                                                    <input type="text" class="form-control" name="nilai_akhir"
                                                        id="nilai_akhir" placeholder="Nilai Akhir"
                                                        value="<?php echo $nilai_akhir; ?>" />
                                                <?php echo form_error('nilai_akhir', '<small style="color:red">', '</small>') ?>
                                            </div>
                                            <div class="form-group <?php if (form_error('keterangan'))
                                                echo 'has-error' ?> ">
                                                    <label for="keterangan">Keterangan</label>
                                                    <textarea class="form-control" rows="3" name="keterangan"
                                                        id="keterangan"
                                                        placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
                                                <?php echo form_error('keterangan', '<small style="color:red">', '</small>') ?>
                                            </div>
                                            <!--  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <input type="hidden" name="id_user" id="id_user" placeholder="Id User"
                                value="<?php echo $id_user; ?>" />
                            <input type="hidden" name="id_calon_siswa" value="<?php echo $id_calon_siswa; ?>" />
                            <input type="hidden" name="from" value="<?php echo "admin"; ?>" />
                            <button type="button" class="btn btn-primary btn-block mb-3" data-toggle="modal"
                                data-target="#nilaiIjazahModal">Isi nilai ijazah</button><br>
                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>