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
                        <a href="<?php echo base_url('pengumuman_ppdb') ?>" class="btn btn-primary"><i
                                class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group <?php if (form_error('title'))
                                echo 'has-error' ?> ">
                                    <label for="varchar">Judul</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Judul"
                                        value="<?php echo $title; ?>" />
                                <?php echo form_error('title', '<small style="color:red">', '</small>') ?>
                            </div>
                            <!-- <div class="form-group <?php if (form_error('deskripsi'))
                                echo 'has-error' ?> ">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi"
                                        placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                                <?php echo form_error('deskripsi', '<small style="color:red">', '</small>') ?>
                            </div> -->
                            <div class="form-group <?php if (form_error('deskripsi')) echo 'has-error' ?> ">
                                <label for="nama">Deskripsi</label>
                                <textarea rows="5" placeholder="deskripsi..." class="form-control" name="deskripsi" id="deskripsi" required=""><?=$deskripsi; ?></textarea>
                                <small class="form-text text-danger"><?php echo form_error('deskripsi'); ?></small>
                            </div>
                            <div class="form-group <?php if (form_error('id_tahun_ajaran'))
                                echo 'has-error' ?> ">
                                    <label for="int">Id Tahun Ajaran</label>
                                    <!-- <input type="text" class="form-control" name="id_tahun_ajaran" id="id_tahun_ajaran" placeholder="Id Tahun Ajaran" value="<?php echo $id_tahun_ajaran; ?>" /> -->
                                <select class="form-control" id="id_tahun_ajaran" name="id_tahun_ajaran">
                                    <?php foreach ($tahun_ajarans as $ta): ?>
                                        <!-- <option value="<?= $ta->id; ?>"><?= $ta->$tahun_ajaran; ?></option> -->
                                        <option <?php if ($ta->id == $id_tahun_ajaran) {
                                            echo "selected ";
                                        } ?>
                                            value="<?= $ta->id; ?>"><?= $ta->tahun_ajaran; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('id_tahun_ajaran', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('is_active'))
                                echo 'has-error' ?> ">
                                    <label for="int">Is Active</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option <?php if ($is_active == 1) { echo "selected "; } ?> value="1">Aktif</option>
                                    <option <?php if ($is_active == 0) { echo "selected "; } ?> value="0">Tidak Aktif</option>
                                </select>
                                <?php echo form_error('is_active', '<small style="color:red">', '</small>') ?>
                            </div>
                            <div class="form-group <?php if (form_error('berkas_pendukung'))
                                echo 'has-error' ?> ">
                                    <label for="berkas_pendukung">Berkas Pendukung (zip / rar)</label>
                                    <input type="file" class="form-control" name="berkas_pendukung" id="berkas_pendukung"/>
                                    <?php if ($link_files != "") :?>
                                        <a href="<?= base_url('assets/berkas_pengumuman/' . $link_files);?>" target="_blank">Link Berkas Terdahulu</a>
                                    <?php else :?>
                                        <a href="#">Belum Ada Berkas</a>
                                    <?php endif;?>
                                <?php echo form_error('berkas_pendukung', '<small style="color:red">', '</small>') ?>
                            </div>
                            <!-- <div class="form-group <?php if (form_error('tgl_update'))
                                echo 'has-error' ?> ">
                            <label for="date">Tgl Update</label>
                            <input type="text" class="form-control" name="tgl_update" id="tgl_update" placeholder="Tgl Update" value="<?php echo $tgl_update; ?>" />
                            <?php echo form_error('tgl_update', '<small style="color:red">', '</small>') ?>
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
<script src="<?=base_url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
 <script type="text/javascript">
 	CKEDITOR.replace('deskripsi'); 	
</script>