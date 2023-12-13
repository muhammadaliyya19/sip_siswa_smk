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
                        <a href="<?php echo base_url('pengumuman_ppdb') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group <?php if(form_error('judul')) echo 'has-error'?> ">
                            <label for="varchar">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
                            <?php echo form_error('judul', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('deskripsi')) echo 'has-error'?> ">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                            <?php echo form_error('deskripsi', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('id_tahun_ajaran')) echo 'has-error'?> ">
                            <label for="int">Id Tahun Ajaran</label>
                            <!-- <input type="text" class="form-control" name="id_tahun_ajaran" id="id_tahun_ajaran" placeholder="Id Tahun Ajaran" value="<?php echo $id_tahun_ajaran; ?>" /> -->
                            <select class="form-control" id="id_tahun_ajaran" name="id_tahun_ajaran">
                                <?php foreach ($tahun_ajarans as $ta): ?>
                                    <!-- <option value="<?=$ta->id;?>"><?=$ta->$tahun_ajaran;?></option> -->
                                    <option <?php if ($ta->id==$id_tahun_ajaran) {echo "selected ";} ?> value="<?=$ta->id;?>"><?=$ta->tahun_ajaran;?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('id_tahun_ajaran', '<small style="color:red">','</small>') ?>
                        </div>
                        <!-- <div class="form-group <?php if(form_error('tgl_update')) echo 'has-error'?> ">
                            <label for="date">Tgl Update</label>
                            <input type="text" class="form-control" name="tgl_update" id="tgl_update" placeholder="Tgl Update" value="<?php echo $tgl_update; ?>" />
                            <?php echo form_error('tgl_update', '<small style="color:red">','</small>') ?>
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