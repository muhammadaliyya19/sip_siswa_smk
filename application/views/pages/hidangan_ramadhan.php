		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Jadwal Pemberi Hidangan Buka & Sahur Bulan Ramadhan</h2>
					<h2>Masjid Jami' Fathul Bari Karangsuko</h2>
					<ul>
						<li>
							<a href="<?=base_url(); ?>">
								Home
							</a>
						</li>
						<li class="active">Jadwal Pemberi Konsumsi Buka & Sahur Bulan Ramadhan</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Portfolio Area -->
		<section class="cart-area">
			<div class="container" style="padding-top: 50px;">
				<div class="section-title">
					<h2>Ramadhan <?=$buka[0]['tahun']. " H/" . $buka[0]['tahunm'];?></h2>
				</div>
				<div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <!-- <a href="." class="btn btn-secondary">Cetak</a> -->
                  <h4>Untuk Buka (Ta'jil)</h4>
                  <table class="table table-hover table-bordered" id="Table6">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $i = 1; 
                        foreach ($buka as $b) :                           
                      ?>
                        <tr>
                          <th><?=$i; ?></th>
                          <td><?php echo $b['tanggal'] . " Ramadhan " . $b['tahun']. " H<br>" . $b['tahunm']; ?></td>
                          <td><?php echo $b['nama']; ?></td>
                          <td><?php echo $b['alamat']; ?></td> 
                        </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <form action="<?=base_url('jadwal'); ?>" method="post" target="_blank">
                    <input type="hidden" value="<?=$buka[0]['tahun']; ?>" name="tahun">
                    <input type="hidden" value="cetak" name="cetak">
                    <input type="hidden" value="konsumsi_ramadhan" name="source">
                    <button type="submit" class="btn btn-secondary float-right mb-2"><i class="fa fa-print"></i>Cetak Jadwal Pemberi Hidangan</button>
                  </form>                  
                  <h4>Untuk Sahur</h4>
                  <table class="table table-hover table-bordered" id="Table5">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $i = 1; 
                        foreach ($sahur as $s) : 
                      ?>
                        <tr>
                          <th><?=$i; ?></th>
                          <td><?php echo $s['tanggal'] . " Ramadhan " . $s['tahun']. " H<br>" . $s['tahunm']; ?></td>
                          <td><?php echo $s['nama']; ?></td>
                          <td><?php echo $s['alamat']; ?></td>                         
                        </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
			</div>
		</section>