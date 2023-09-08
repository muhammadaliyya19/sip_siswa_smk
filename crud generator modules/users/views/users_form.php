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
                        <a href="<?php echo base_url('users') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group <?php if(form_error('nama')) echo 'has-error'?> ">
                            <label for="varchar">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                            <?php echo form_error('nama', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('username')) echo 'has-error'?> ">
                            <label for="varchar">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                            <?php echo form_error('username', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('password')) echo 'has-error'?> ">
                            <label for="varchar">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
                            <?php echo form_error('password', '<small style="color:red">','</small>') ?>
                        </div>
	    <div class="form-group <?php if(form_error('level')) echo 'has-error'?> ">
                            <label for="int">Level</label>
                            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
                            <?php echo form_error('level', '<small style="color:red">','</small>') ?>
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