<div class="row">
    <div class="col-xs-12">
        <form action="<?php echo $action; ?>" method="post" target="_blank" enctype="multipart/form-data">
        <input type="hidden" name="id_berita" value="<?=$this_berita['id_berita']; ?>">
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
                        <button type="submit" name="terbitkan_update" class="btn btn-primary float-right" value="terbitkan_update">
                        <i class="fa fa-upload"></i> Terbitkan
                        </button>		
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    

                    <div class="card">
					<div class="card-body">				
						<div class="form-group">
							<label for="nama">Judul Berita</label>
							<input type="text" class="form-control" id="judul" placeholder="Judul..." name="judul" required="" value="<?=$this_berita['judul'] ?>">    
							<small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
						</div>
                        <div class="form-group">
							<label for="penulis">Penulis</label>
							<input type="text" class="form-control" id="penulis" placeholder="Nama Penulis..." name="penulis" required="" value="<?=$this_berita['penulis'] ?>" readonly>      
							<small class="form-text text-danger"><?php echo form_error('penulis'); ?></small>
						</div>
						 <div class="form-group">
							<label for="nama">Konten Berita</label>
							<textarea rows="5" placeholder="konten..." class="form-control" name="konten" id="content_berita" required=""><?=$this_berita['konten'] ?></textarea>
							<small class="form-text text-danger"><?php echo form_error('konten'); ?></small>
						</div>					 						 
						<div class="form-group">
						    <label for="alamat">Tag</label>						    
						    <input type="text" class="form-control" id="alamat" placeholder="Pisahkan dengan tanda koma (,)" name="tag" required="" value="<?=$this_berita['tag'] ?>">
						    <small class="form-text text-danger"><?php echo form_error('tag'); ?></small>
						</div>		
						<div class="col-lg-12 p-0 m-0">						 		
							<div class="form-group">
						    	<label for="alamat">Gambar Utama</label>						    
							   	<div class="row">
								   	<div class="col">
								   		<div class="custom-file">
											<input type="file" class="custom-file-input" id="foto" name="foto" onchange="loadFile(event)">
											<label class="custom-file-label" for="foto" style="overflow:hidden;"><?=$this_berita['foto_utama'] ?> / Ganti Foto</label><br>
										</div>
								   	</div>
								    <small class="form-text text-danger"><?php echo form_error('foto'); ?></small>
							   	</div>
							</div>	
							 <div class="card" style="height: 80%;">
							 	<div class="card-body" align="center" style="height: auto;">
							 		<img src="<?=base_url('assets/img/berita/'.$this_berita["foto_utama"]); ?>" style="max-height: 200px; max-width: 100%;" id="holderGaleri">
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