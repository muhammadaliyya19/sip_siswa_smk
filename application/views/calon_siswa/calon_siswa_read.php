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
						<a href="<?php echo $user["level"] == "Administrator" ? base_url('pendaftaran') : base_url('pendaftaran/mine'); ?>" class="btn btn-primary"><i
								class="fa fa-arrow-left"></i> Kembali</a>
					</div>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button type="button" class="btn btn-primary btn-block mb-3" data-toggle="modal"
							data-target="#nilaiIjazahModal">Lihat nilai ijazah</button>
						<!--  -->
						<!--  -->
						<!-- Modal for nilai ijazah -->
						<div class="modal fade" id="nilaiIjazahModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="exampleModalLabel">Nilai Ijazah</h4>
									</div>
									<div class="modal-body">
										<!-- the form here -->
										<div class="form-group <?php if (form_error('nilai_bhs_indo'))
											echo 'has-error' ?> ">
												<label for="decimal">Nilai Bhs Indo</label>
												<input type="text" class="form-control" name="nilai_bhs_indo"
													id="nilai_bhs_indo" placeholder="Nilai Bhs Indo"
													value="<?php echo $nilai_bhs_indo; ?>" />
											<?php echo form_error('nilai_bhs_indo', '<small style="color:red">', '</small>') ?>
										</div>
										<div class="form-group <?php if (form_error('nilai_bhs_inggris'))
											echo 'has-error' ?> ">
												<label for="decimal">Nilai Bhs Inggris</label>
												<input type="text" class="form-control" name="nilai_bhs_inggris"
													id="nilai_bhs_inggris" placeholder="Nilai Bhs Inggris"
													value="<?php echo $nilai_bhs_inggris; ?>" />
											<?php echo form_error('nilai_bhs_inggris', '<small style="color:red">', '</small>') ?>
										</div>
										<div class="form-group <?php if (form_error('nilai_ipa'))
											echo 'has-error' ?> ">
												<label for="decimal">Nilai Ipa</label>
												<input type="text" class="form-control" name="nilai_ipa" id="nilai_ipa"
													placeholder="Nilai Ipa" value="<?php echo $nilai_ipa; ?>" />
											<?php echo form_error('nilai_ipa', '<small style="color:red">', '</small>') ?>
										</div>
										<div class="form-group <?php if (form_error('nilai_ips'))
											echo 'has-error' ?> ">
												<label for="decimal">Nilai Ips</label>
												<input type="text" class="form-control" name="nilai_ips" id="nilai_ips"
													placeholder="Nilai Ips" value="<?php echo $nilai_ips; ?>" />
											<?php echo form_error('nilai_ips', '<small style="color:red">', '</small>') ?>
										</div>
										<div class="form-group <?php if (form_error('nilai_mtk'))
											echo 'has-error' ?> ">
												<label for="decimal">Nilai Mtk</label>
												<input type="text" class="form-control" name="nilai_mtk" id="nilai_mtk"
													placeholder="Nilai Mtk" value="<?php echo $nilai_mtk; ?>" />
											<?php echo form_error('nilai_mtk', '<small style="color:red">', '</small>') ?>
										</div>
										<div class="form-group <?php if (form_error('nilai_akhir'))
											echo 'has-error' ?> ">
												<label for="decimal">Nilai Akhir</label>
												<input type="text" class="form-control" name="nilai_akhir" id="nilai_akhir"
													placeholder="Nilai Akhir" value="<?php echo $nilai_akhir; ?>" />
											<?php echo form_error('nilai_akhir', '<small style="color:red">', '</small>') ?>
										</div>
										<div class="form-group <?php if (form_error('keterangan'))
											echo 'has-error' ?> ">
												<label for="keterangan">Keterangan</label>
												<textarea class="form-control" rows="3" name="keterangan" id="keterangan"
													placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
											<?php echo form_error('keterangan', '<small style="color:red">', '</small>') ?>
										</div>
										<!--  -->
									</div>
								</div>
							</div>
						</div>
						<!--  -->
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<table class="table">
							<tr>
								<td>Nama</td>
								<td>
									<?php echo $nama; ?>
								</td>
							</tr>
							<tr>
								<td>Tempat Lahir</td>
								<td>
									<?php echo $tempat_lahir; ?>
								</td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td>
									<?php echo $tanggal_lahir; ?>
								</td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>
									<?php echo $jenis_kelamin; ?>
								</td>
							</tr>
							<tr>
								<td>Agama</td>
								<td>
									<?php echo $agama; ?>
								</td>
							</tr>
							<tr>
								<td>Anak Ke</td>
								<td>
									<?php echo $anak_ke; ?>
								</td>
							</tr>
							<tr>
								<td>Jumlah Saudara</td>
								<td>
									<?php echo $jumlah_saudara; ?>
								</td>
							</tr>
							<tr>
								<td>No Hp Siswa</td>
								<td>
									<?php echo $no_hp_siswa; ?>
								</td>
							</tr>
							<tr>
								<td>Alamat Siswa</td>
								<td>
									<?php echo $alamat_siswa; ?>
								</td>
							</tr>
							<tr>
								<td>Asal Sekolah</td>
								<td>
									<?php echo $asal_sekolah; ?>
								</td>
							</tr>
							<tr>
								<td>Alamat Sekolah</td>
								<td>
									<?php echo $alamat_sekolah; ?>
								</td>
							</tr>
							<tr>
								<td>Nama Ayah</td>
								<td>
									<?php echo $nama_ayah; ?>
								</td>
							</tr>
							<tr>
								<td>Nama Ibu</td>
								<td>
									<?php echo $nama_ibu; ?>
								</td>
							</tr>
							<tr>
								<td>Alamat Orang Tua</td>
								<td>
									<?php echo $alamat_orang_tua; ?>
								</td>
							</tr>
							<tr>
								<td>No Hp Orang Tua</td>
								<td>
									<?php echo $no_hp_orang_tua; ?>
								</td>
							</tr>
							<tr>
								<td>Id Tahun Ajaran</td>
								<td>
									<?php echo $id_tahun_ajaran; ?>
								</td>
							</tr>
							<tr>
								<td>Id User</td>
								<td>
									<?php echo $id_user; ?>
								</td>
							</tr>
							<tr>
								<td>Status Lolos</td>
								<td>
									<?php if($status_lolos == 1): ?>
										Jurusan Akuntansi
									<?php elseif($status_lolos == 2): ?>
										Jurusan Pemasaran
									<?php else: ?>
										-
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td>Nisn</td>
								<td>
									<?php echo $nisn; ?>
								</td>
							</tr>
							<!-- <tr><td>Berat Badan</td><td><?php echo $berat_badan; ?></td></tr>
		<tr><td>Tinggi Badan</td><td><?php echo $tinggi_badan; ?></td></tr>
		<tr><td>Gol Darah</td><td><?php echo $gol_darah; ?></td></tr>
		<tr><td>Penghasilan Orang Tua</td><td><?php echo $penghasilan_orang_tua; ?></td></tr>
		<tr><td>Tanggungan Anak</td><td><?php echo $tanggungan_anak; ?></td></tr> -->
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>