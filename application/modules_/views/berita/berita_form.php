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
                        <a href="<?php echo base_url('berita') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
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
	    <div class="form-group <?php if(form_error('penulis')) echo 'has-error'?> ">
                            <label for="varchar">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" value="<?php echo $penulis; ?>" />
                            <?php echo form_error('penulis', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('konten')) echo 'has-error'?> ">
                            <label for="konten">Konten</label>
                            <textarea class="form-control" rows="3" name="konten" id="konten" placeholder="Konten"><?php echo $konten; ?></textarea>
                            <?php echo form_error('konten', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('foto_utama')) echo 'has-error'?> ">
                            <label for="foto_utama">Foto Utama</label>
                            <textarea class="form-control" rows="3" name="foto_utama" id="foto_utama" placeholder="Foto Utama"><?php echo $foto_utama; ?></textarea>
                            <?php echo form_error('foto_utama', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('tag')) echo 'has-error'?> ">
                            <label for="varchar">Tag</label>
                            <input type="text" class="form-control" name="tag" id="tag" placeholder="Tag" value="<?php echo $tag; ?>" />
                            <?php echo form_error('tag', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('slug')) echo 'has-error'?> ">
                            <label for="slug">Slug</label>
                            <textarea class="form-control" rows="3" name="slug" id="slug" placeholder="Slug"><?php echo $slug; ?></textarea>
                            <?php echo form_error('slug', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('tanggal')) echo 'has-error'?> ">
                            <label for="date">Tanggal</label>
                            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
                            <?php echo form_error('tanggal', '<small style="color:red">','</small>') ?>
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