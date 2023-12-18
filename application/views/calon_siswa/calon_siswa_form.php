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
                        <form action="<?php echo $action; ?>" method="post">
                            <div class="form-group <?php if (form_error('nama'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama"
                                        value="<?php echo $user['nama_user']; ?>" />
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
                                    <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                        placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
                                <?php echo form_error('tanggal_lahir', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('jenis_kelamin'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin"
                                        placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
                                <?php echo form_error('jenis_kelamin', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('agama'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Agama</label>
                                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama"
                                        value="<?php echo $agama; ?>" />
                                <?php echo form_error('agama', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('anak_ke'))
                                echo 'has-error' ?> ">
                                    <label for="int">Anak Ke</label>
                                    <input type="text" class="form-control" name="anak_ke" id="anak_ke"
                                        placeholder="Anak Ke" value="<?php echo $anak_ke; ?>" />
                                <?php echo form_error('anak_ke', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('jumlah_saudara'))
                                echo 'has-error' ?> ">
                                    <label for="int">Jumlah Saudara</label>
                                    <input type="text" class="form-control" name="jumlah_saudara" id="jumlah_saudara"
                                        placeholder="Jumlah Saudara" value="<?php echo $jumlah_saudara; ?>" />
                                <?php echo form_error('jumlah_saudara', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('no_hp_siswa'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">No Hp Siswa</label>
                                    <input type="text" class="form-control" name="no_hp_siswa" id="no_hp_siswa"
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
                                    <label for="int">Id Tahun Ajaran</label>
                                    <input type="text" class="form-control" name="id_tahun_ajaran" id="id_tahun_ajaran"
                                        placeholder="Id Tahun Ajaran" value="<?php echo $id_tahun_ajaran; ?>" />
                                <?php echo form_error('id_tahun_ajaran', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('id_user'))
                                echo 'has-error' ?> ">
                                    <label for="int">Id User</label>
                                    <input type="text" class="form-control" name="id_user" id="id_user"
                                        placeholder="Id User" value="<?php echo $id_user; ?>" />
                                <?php echo form_error('id_user', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('status_lolos'))
                                echo 'has-error' ?> ">
                                    <label for="int">Status Lolos</label>
                                    <input type="text" class="form-control" name="status_lolos" id="status_lolos"
                                        placeholder="Status Lolos" value="<?php echo $status_lolos; ?>" />
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
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>