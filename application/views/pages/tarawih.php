		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Jadwal Imam Sholat Tarawih & Sholat Tasbih</h2>
					<h2>Masjid Jami' Fathul Bari Karangsuko</h2>
					<ul>
						<li>
							<a href="<?=base_url(); ?>">
								Home
							</a>
						</li>
						<li class="active">Jadwal Imam Sholat Tarawih & Sholat Tasbih</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Portfolio Area -->
		<section class="cart-area">
			<div class="container" style="padding-top: 50px;">
				<div class="section-title">
					<h2>Imam Sholat Tarawih</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="cart-wraps">
								<div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
						                      <th scope="col">No.</th>
						                      <th scope="col">Nama Imam</th>
						                      <th scope="col">Petugas Nida</th>
						                      <th scope="col">Sholat</th>
						                      <th scope="col">Waktu</th>
						                      <th scope="col">Tahun</th>
						                    </tr>
										</thead>                                        
										<tbody>
											<?php 
						                      $i = 1;                       
						                      foreach ($imam_ramadhan as $ir) :                       
						                        if ($ir['sholat'] == "Tarawih") {
						                    ?>
						                          <tr>
						                            <th><?=$i; ?></th>
						                            <td><?php echo $ir['nama_imam']; ?></td>                            
						                            <td><?php echo $ir['nama_petugas_nida']; ?></td>                            
						                            <td><?php echo "Sholat ".$ir['sholat']; ?></td>                            
						                            <td><?php echo $ir['waktu']; ?></td>                            
						                            <td><?php echo $ir['tahun_hijriah'] . " H / " . $ir['tahun_masehi']; ?></td>
						                          </tr>
						                      <?php $i++; ?>
						                    <?php }endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
					</div>					
				</div>
			</div>	

			<!-- Sholat Tasbih -->
			<div class="container" style="padding-top: 50px;">
				<div class="section-title">
					<h2>Imam Sholat Tasbih</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="cart-wraps">
								<div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
						                      <th scope="col">No.</th>
						                      <th scope="col">Nama Imam</th>
						                      <th scope="col">Sholat</th>
						                      <th scope="col">Waktu</th>
						                      <th scope="col">Tahun</th>
						                    </tr>
										</thead>                                        
										<tbody>
											<?php 
						                      $i = 1;                       
						                      foreach ($imam_ramadhan as $ir) :                       
						                        if ($ir['sholat'] == "Tasbih") {
						                    ?>
						                          <tr>
						                            <th><?=$i; ?></th>
						                            <td><?php echo $ir['nama_imam']; ?></td>                            
						                            <td><?php echo "Sholat ".$ir['sholat']; ?></td>                            
						                            <td><?php echo $ir['waktu']; ?></td>                            
						                            <td><?php echo $ir['tahun_hijriah'] . " H / " . $ir['tahun_masehi']; ?></td> 
						                          </tr>
						                      <?php $i++; ?>
						                    <?php } endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
					</div>					
				</div>
			</div>	
		</section>