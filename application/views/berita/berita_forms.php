<div class="container-fluid">
	<div class="row mt-3 mb-4">
		<div class="col-lg">
			<form action="<?= base_url('berita/tambah'); ?>" method="post" target="_blank" enctype="multipart/form-data">
				<div class="row">
					<div class="col text-left">
						<h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>   
					</div>
					<div class="col text-right">
						<a href="<?php echo base_url(); ?>berita" class="btn btn-primary mr-2">Kembali</a>
						<button type="submit" name="terbitkan" class="btn btn-primary float-right" value="terbitkan">Terbitkan</button>		
						<button type="submit" name="pratinjau" class="btn btn-primary float-right mr-2" value="pratinjau">Pratinjau</button>		
					</div>
				</div>
				<div class="card">
					<div class="card-body">				
						<div class="form-group">
							<label for="nama">Judul Berita</label>
							<input type="text" class="form-control" id="judul" placeholder="Judul..." name="judul" required="">    
							<small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
						</div>
						<div class="form-group">
							<label for="penulis">Penulis</label>
							<input type="text" class="form-control" id="penulis" placeholder="Nama Penulis..." name="penulis" required="">    
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
			</form>
		</div>
	</div>
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