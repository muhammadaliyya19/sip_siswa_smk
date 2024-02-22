<div class="row">
    <div class="col-xs-12">
        <form action="<?php echo $action; ?>" method="post" target="_blank" enctype="multipart/form-data">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="pull-left">
                    <div class="box-title">
                        <h4><?php echo $judul ?></h4>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="box-title">
                        <a href="<?php echo base_url('berita') ?>" class="btn btn-primary mr-2">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
						<button type="submit" name="pratinjau" class="btn btn-primary float-right mr-2" value="pratinjau">
                            <i class="fa fa-eye"></i> Pratinjau
                        </button>		
                        <button type="submit" name="terbitkan" class="btn btn-primary float-right" value="terbitkan">
                        <i class="fa fa-upload"></i> Terbitkan
                        </button>		
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    <!-- <form action="<?php echo $action; ?>" method="post"> -->
                    <!-- <div class="form-group <?php if(form_error('judul')) echo 'has-error'?> ">
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
                    <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>  -->

                <div class="card">
					<div class="card-body">				
						<div class="form-group">
							<label for="nama">Judul Berita</label>
							<input type="text" class="form-control" id="judul" placeholder="Judul..." name="judul" required="">    
							<small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
						</div>
						<div class="form-group">
							<label for="penulis">Penulis</label>
							<input type="text" class="form-control" id="penulis" placeholder="Nama Penulis..." name="penulis" required="" readonly value="<?=$penulis["nama_user"];?>">
							<small class="form-text text-danger"><?php echo form_error('penulis'); ?></small>
						</div>
						 <div class="form-group">
							<label for="nama">Konten Berita</label>
							<textarea rows="5" placeholder="konten..." class="form-control" name="konten" id="content_berita" required=""></textarea>
							<small class="form-text text-danger"><?php echo form_error('konten'); ?></small>
						</div>
						<div class="form-group">
						    <label for="alamat">Tag</label>						    
						    <input type="text" class="form-control" id="alamat" placeholder="Pisahkan dengan tanda koma (,)" name="tag" required="">
						    <small class="form-text text-danger"><?php echo form_error('tag'); ?></small>
						</div>		
						<div class="col-lg-12 p-0 m-0">						 		
							<div class="form-group">
						    	<label for="alamat">Gambar Utama</label>						    
							   	<div class="row">
								   	<div class="col">
								   		<div class="custom-file">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
											<input type="file" class="custom-file-input" id="foto" name="foto" onchange="loadFile(event)" required="">
											<label class="custom-file-label" for="foto" style="overflow:hidden;">Pilih Foto</label><br>
										</div>
								   	</div>
								    <small class="form-text text-danger"><?php echo form_error('foto'); ?></small>
							   	</div>
							</div>	
							<div class="card" style="height: 80%;">
							 	<div class="card-body" align="center" style="height: auto;">
							 		<img src="<?=base_url('assets/img/holder_galeri.png'); ?>" style="max-height: 200px; max-width: 100%;" id="holderGaleri">
							 	</div>
							</div>				 						 
						</div>
					</div>
				</div>
	            <!-- </form> -->
                </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<script src="<?=base_url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>
 <script type="text/javascript">
 	CKEDITOR.replace('content_berita'); 	

	$(document).on('change', '.custom-file-input', function (e) {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
		console.log("changed");				
		let cout = $(this).data('cout');
		var output = document.getElementById('#holderGaleri');
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
		    URL.revokeObjectURL(output.src); // free memory
		}
		console.log("loaded");
	});

	function loadFile (event) {
		console.log(event);
		var output = document.getElementById('holderGaleri');
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
		    URL.revokeObjectURL(output.src); // free memory
		}
	};			
</script>