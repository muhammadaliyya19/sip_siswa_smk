		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Jadwal Pengajian Ramadhan</h2>
					<h2>Masjid Jami' Fathul Bari Karangsuko</h2>
					<ul>
						<li>
							<a href="<?=base_url(); ?>">
								Home
							</a>
						</li>

						<li class="active">Jadwal Pengajian Ramadhan</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Portfolio Area -->
		<section class="cart-area">
			<div class="container" style="padding-top: 50px;">
				<!-- <div class="section-title">
					<h2>Khotib dan Bilal</h2>
				</div> -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="cart-wraps" align="center">
								<form action="<?=base_url('jadwal'); ?>" method="post" target="_blank">
			                    	<input type="hidden" value="<?=$pengajian[0]['tahun_hijriah']; ?>" name="tahun">
			                    	<input type="hidden" value="cetak" name="cetak">
			                    	<input type="hidden" value="pengajian" name="source">
									<button type="submit" class="btn btn-secondary mb-4">Cetak Jadwal Pengajian Ramadhan</button>
								</form>
								<div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
						                      <th scope="col">No.</th>
						                      <th scope="col">Tanggal</th>                      
						                      <th scope="col">Pembicara</th>                      
						                      <th scope="col">Tema</th>                      
						                      <th scope="col">Pemberi Hidangan</th>
						                    </tr>
										</thead>                                        
										<tbody>
											<?php 
						                      $i = 1;                       
						                      foreach ($pengajian as $data) :                         
						                    ?>
						                          <tr>
						                            <th><?=$i; ?></th>
						                            <td><?php echo $data['tanggal'] . " Ramadhan<br>" . $data['tahun_hijriah'] . " H / " . $data['tahun_masehi']; ?></td>
						                            <td><?php echo $data['pembicara']; ?></td>
						                            <td><?php echo $data['tema']; ?></td>
						                            <td><?php echo $data['konsumsi']; ?></td>
						                          </tr>
						                      <?php $i++; ?>
						                    <?php endforeach; ?>
										</tbody>
									</table>
								</div>

								<!-- <div class="coupon-cart">
									<div class="row">
										<div class="col-lg-12 col-sm-12 text-right">
											<a href="#" class=" default-btn two">
												Cetak Jadwal
											</a>
										</div>
									</div>
								</div> -->
							</div>
					</div>					
				</div>
			</div>			
		</section>