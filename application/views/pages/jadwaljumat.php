		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Jadwal Khotib dan Bilal Sholat Jumat</h2>
					<h2>Masjid Jami' Fathul Bari Karangsuko</h2>
					<ul>
						<li>
							<a href="<?=base_url(); ?>">
								Home
							</a>
						</li>

						<li class="active">Jadwal Khotib dan Bilal Sholat Jumat</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Portfolio Area -->
		<section class="cart-area">
			<div class="container" style="padding-top: 50px;">
				<div class="section-title">
					<h2>Khotib dan Bilal</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="cart-wraps">
								<div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
						                      <th scope="col">No.</th>
						                      <th scope="col">Jumat</th>
						                      <th scope="col">Adzan / Bilal</th>
						                      <th scope="col">Khotib</th>
						                    </tr>
										</thead>                                        
										<tbody>
											<?php 
						                      $i = 1;                 
						                      foreach ($bilal_khotib as $bk) :                         
						                    ?>
						                          <tr>
						                            <th><?=$i; ?></th>
						                            <td><?php echo $bk['jumat']; ?></td>
						                            <td><?php echo $bk['bilal']; ?></td>
						                            <td><?php echo $bk['khotib']; ?></td>
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

			<!-- Cadangan -->
			<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
				<div class="section-title">
					<h2>Khotib dan Bilal Cadangan</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="cart-wraps">
								<div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
						                      <th scope="col">No.</th>
						                      <th scope="col">Nama Khotib</th>
						                      <th scope="col">Nama Bilal</th>
						                    </tr>
										</thead>                                        
										<tbody>
											<?php 
						                      $i = 1; 
						                      foreach ($khotib_cadangan as $kc) : 
						                    ?>
						                          <tr>
						                            <th><?=$i; ?></th>
						                            <td><?php echo $kc['khotib']; ?></td>
						                            <td><?php echo $kc['bilal']; ?></td>
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