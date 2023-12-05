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
                        <a href="<?php echo base_url('visi_misi') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group <?php if(form_error('visi')) echo 'has-error'?> ">
                            <label for="visi">Visi</label>
                            <textarea class="form-control" rows="3" name="visi" id="visi" placeholder="Visi"><?php echo $visi; ?></textarea>
                            <?php echo form_error('visi', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('misi')) echo 'has-error'?> ">
                            <label for="misi">Misi</label>
                            <textarea class="form-control" rows="3" name="misi" id="misi" placeholder="Misi"><?php echo $misi; ?></textarea>
                            <?php echo form_error('misi', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('tgl_update')) echo 'has-error'?> ">
                            <label for="date">Tgl Update</label>
                            <input type="text" class="form-control" name="tgl_update" id="tgl_update" placeholder="Tgl Update" value="<?php echo $tgl_update; ?>" readonly />
                            <?php echo form_error('tgl_update', '<small style="color:red">','</small>') ?>
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