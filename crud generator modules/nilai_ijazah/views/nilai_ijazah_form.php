<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="pull-left">
                    <div class="box-title">
                        <h4><?php echo $judul ?></h4>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="box-title">
                        <a href="<?php echo base_url('nilai_ijazah') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group <?php if(form_error('id_user')) echo 'has-error'?> ">
                            <label for="int">Id User</label>
                            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
                            <?php echo form_error('id_user', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('nisn')) echo 'has-error'?> ">
                            <label for="varchar">Nisn</label>
                            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn" value="<?php echo $nisn; ?>" />
                            <?php echo form_error('nisn', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('nilai_bhs_indo')) echo 'has-error'?> ">
                            <label for="decimal">Nilai Bhs Indo</label>
                            <input type="text" class="form-control" name="nilai_bhs_indo" id="nilai_bhs_indo" placeholder="Nilai Bhs Indo" value="<?php echo $nilai_bhs_indo; ?>" />
                            <?php echo form_error('nilai_bhs_indo', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('nilai_bhs_inggris')) echo 'has-error'?> ">
                            <label for="decimal">Nilai Bhs Inggris</label>
                            <input type="text" class="form-control" name="nilai_bhs_inggris" id="nilai_bhs_inggris" placeholder="Nilai Bhs Inggris" value="<?php echo $nilai_bhs_inggris; ?>" />
                            <?php echo form_error('nilai_bhs_inggris', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('nilai_ipa')) echo 'has-error'?> ">
                            <label for="decimal">Nilai Ipa</label>
                            <input type="text" class="form-control" name="nilai_ipa" id="nilai_ipa" placeholder="Nilai Ipa" value="<?php echo $nilai_ipa; ?>" />
                            <?php echo form_error('nilai_ipa', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('nilai_ips')) echo 'has-error'?> ">
                            <label for="decimal">Nilai Ips</label>
                            <input type="text" class="form-control" name="nilai_ips" id="nilai_ips" placeholder="Nilai Ips" value="<?php echo $nilai_ips; ?>" />
                            <?php echo form_error('nilai_ips', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('nilai_mtk')) echo 'has-error'?> ">
                            <label for="decimal">Nilai Mtk</label>
                            <input type="text" class="form-control" name="nilai_mtk" id="nilai_mtk" placeholder="Nilai Mtk" value="<?php echo $nilai_mtk; ?>" />
                            <?php echo form_error('nilai_mtk', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('nilai_akhir')) echo 'has-error'?> ">
                            <label for="decimal">Nilai Akhir</label>
                            <input type="text" class="form-control" name="nilai_akhir" id="nilai_akhir" placeholder="Nilai Akhir" value="<?php echo $nilai_akhir; ?>" />
                            <?php echo form_error('nilai_akhir', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('keterangan')) echo 'has-error'?> ">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
                            <?php echo form_error('keterangan', '<small style="color:red">','</small>') ?>
                        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary btn-block">SUBMIT</button> 
	</form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>