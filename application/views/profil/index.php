<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="pull-left">
                    <div class="box-title">
                        <h4><?php echo $judul ?></h4>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="false">Ubah Profil</a></li>
                          <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Ubah Gambar</a></li>
                          <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Ubah Password</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="<?php echo base_url('profil/ubah_profil_action') ?>" method="POST">
                                        <div class="form-group <?php if(form_error('id')) echo 'has-error'?>">
                                          <label for="id_user">ID user</label>
                                          <input readonly="" type="text" id="id" name="id_users" class="form-control" value="<?php echo $profil['id_users'] ?>">
                                          <?php echo form_error('id', '<small style="color:red">','</small>') ?>
                                      </div>
                                      <div class="form-group <?php if(form_error('nama')) echo 'has-error'?>">
                                         <label for="nama_user">Nama user</label>
                                         <input type="text" id="nama" name="nama" class="form-control nama_user" placeholder="Nama user" value="<?php echo $profil['nama'] ?>">
                                         <?php echo form_error('nama', '<small style="color:red">','</small>') ?>
                                     </div>
                                     <div class="form-group <?php if(form_error('username')) echo 'has-error'?>">
                                         <label for="E-mail">Username</label>
                                         <input type="text" id="Username" name="username" class="form-control username" placeholder="username" value="<?php echo $profil['username'] ?>">
                                         <?php echo form_error('username', '<small style="color:red">','</small>') ?>
                                     </div>
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                     </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="<?php echo base_url('profil/ubah_password_action') ?>" method="POSt">
                                        <div class="form-group <?php if(form_error('pw_sekarang')) echo 'has-error'?>">
                                            <label for="pw_sekarang">Password saat ini</label>
                                            <input type="password" id="pw_sekarang" name="pw_sekarang" class="form-control pw_sekarang " placeholder="Password saat ini" value="<?php echo set_value('pw_sekarang') ?>">
                                            <?php echo form_error('pw_sekarang', '<small style="color:red">','</small>') ?>
                                        </div>
                                        <div class="form-group <?php if(form_error('pw1')) echo 'has-error'?>">
                                            <label for="pw1">Password Baru</label>
                                            <input type="password" id="pw1" name="pw1" class="form-control pw1 " placeholder="Password Baru" value="<?php echo set_value('pw1') ?>">
                                            <?php echo form_error('pw1', '<small style="color:red">','</small>') ?>
                                        </div>
                                        <div class="form-group <?php if(form_error('pw2')) echo 'has-error'?>">
                                            <label for="pw2">Konfirmasi Password Baru</label>
                                            <input type="password" id="pw2" name="pw2" class="form-control pw2 " placeholder="Konfirmasi Password Baru" value="<?php echo set_value('pw2') ?>">
                                            <?php echo form_error('pw2', '<small style="color:red">','</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="timeline">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" action="<?php echo base_url('profil/ubah_gambar_action') ?>" enctype="multipart/form-data">
                                        <img src="<?php echo base_url('assets/img/user/') . $profil['gambar'] ?>" alt="" class="img-responsive" width="200">
                                        <div class="form-group <?php if(form_error('gambar')) echo 'has-error'?>">
                                            <label for="gambar">Gambar</label>
                                            <input required="" type="file" id="gambar" name="gambar" class="form-control gambar " placeholder="Gambar" value="<?php echo set_value('gambar') ?>">
                                            <?php echo form_error('gambar', '<small style="color:red">','</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
