<?php 
  function getBulanNama($angka)
  {
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    if ($angka == 0) {
      return $bulan[11];
    }else{
      return $bulan[(int)$angka-1];
    }
  }
?>
		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Laporan Kas</h2>
					<h2>Masjid Jami' Fathul Bari Karangsuko</h2>
					<ul>
						<li>
							<a href="<?=base_url(); ?>">
								Home
							</a>
						</li>

						<li class="active">Laporan Kas</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Portfolio Area -->
		<section class="portfolio-area" style="padding-top: 50px;">
			<div class="container">
				<div class="portfolio-wraps" style="">
					<div class="shorting-menu">
					    <div class="row">
					    <div class="col">
						<ul class="nav" role="tablist">
					        <li class="nav-item active">
					          <a href="#rekap" class="mr-3 btn btn-secondary" aria-controller="rekap" role="tab" data-toggle="tab"> <span class="h5 text-light">Rekap Kas</span> </a>
					        </li>
					        <li class="nav-item">
					          <a href="#masuk" class="mr-3 btn btn-secondary" aria-controller="masuk" role="tab" data-toggle="tab"> <span class="h5 text-light">Kas Masuk</span> </a>
					        </li>         
					        <li class="nav-item">
					          <a href="#keluar" class="mr-3 btn btn-secondary" aria-controller="kelaur" role="tab" data-toggle="tab"> <span class="h5 text-light">Kas Keluar</span> </a>
					        </li>					        
					    </ul>
						</div>
					    <div class="col" >
					    	<form action="" method="post" class="float-right">
			                  <div class="row">
			                          <div class="form-horizontal" align="right">
			                              <div class="form-group">
			                                      <select class="mr-2" name="bulan">
			                                          <option value="">-- Pilih Bulan --</option>
			                                          <option value="01" <?= ($post['filter'] != null && $post['bulan'] == 1) ? 'selected' : ''; ?>>Januari</option>
			                                          <option value="02" <?= ($post['filter'] != null && $post['bulan'] == 2) ? 'selected' : ''; ?>>Februari</option>
			                                          <option value="03" <?= ($post['filter'] != null && $post['bulan'] == 3) ? 'selected' : ''; ?>>Maret</option>
			                                          <option value="04" <?= ($post['filter'] != null && $post['bulan'] == 4) ? 'selected' : ''; ?>>April</option>
			                                          <option value="05" <?= ($post['filter'] != null && $post['bulan'] == 5) ? 'selected' : ''; ?>>Mei</option>
			                                          <option value="06" <?= ($post['filter'] != null && $post['bulan'] == 6) ? 'selected' : ''; ?>>Juni</option>
			                                          <option value="07" <?= ($post['filter'] != null && $post['bulan'] == 7) ? 'selected' : ''; ?>>Juli</option>
			                                          <option value="08" <?= ($post['filter'] != null && $post['bulan'] == 8) ? 'selected' : ''; ?>>Agustus</option>
			                                          <option value="09" <?= ($post['filter'] != null && $post['bulan'] == 9) ? 'selected' : ''; ?>>September</option>
			                                          <option value="10" <?= ($post['filter'] != null && $post['bulan'] == 10) ? 'selected' : ''; ?>>Oktober</option>
			                                          <option value="11" <?= ($post['filter'] != null && $post['bulan'] == 11) ? 'selected' : ''; ?>>November</option>
			                                          <option value="12" <?= ($post['filter'] != null && $post['bulan'] == 12) ? 'selected' : ''; ?>>Desember</option>
			                                      </select>
			                              </div>
			                          </div>
			                          <div class="form-horizontal">
			                              <div class="form-group">
			                                  <div class="">
			                                      <select class="mr-2" name="tahun">
			                                          <option value="">-- Pilih Tahun --</option>
			                                          <?php date_default_timezone_set('Asia/Jakarta'); $year = (int)date('Y'); for ($i=2020; $i <= $year+3; $i++) { ?>
			                                              <option value="<?=$i; ?>" <?= ($post['filter'] != null && $post['tahun'] == $i) ? 'selected' : ''; ?>><?=$i; ?></option>
			                                          <?php } ?>
			                                      </select>
			                                  </div>
			                              </div>
			                          </div>
			                          <!-- <div class="pull-right"> -->
			                          <button type="submit" name="filter" class="btn btn-info btn-flat mr-2" value="filter">
			                              <i class="fa fa-search"></i> Filter Data
			                          </button>
			                          <button type="submit" name="reset" class="btn btn-secondary" value="reset"><i class="fa fa-refresh"></i> Reset</button>
			                          <!-- </div> -->
			                  </div>
			                  <!-- <div class="row">
			                      <div class="col-12" >
			                      </div>
			                  </div> -->
			              </form>
						    </div>
						    </div>
						    </div>
					</div>

					<!-- KONTEN KAS -->
	<div class="tab-content">       
    <!-- REKAP KAS -->
    <div class="tab-pane active" id="rekap">       
	  <!-- BATAS FILTER DATA -- Bawah sudah tampilan datanya -->
	      <div class="row">
	    		<div class="col-lg-12">
	    			<div class="card mb-4">
				        <div class="card-header with-border">
				              <span class="card-title h5">Data Rekap Kas</span>	              
				          </div>
				          <div class="card-body">
				          <div class="row">
				          	<div class="col text-left">
					          <div class="alert alert-info mt-2">            
					            <span class="">
					              <!-- Saldo Tanggal <?=date('d-m-Y');?> : <b>Rp. <?=number_format($saldo);?>,-</b> -->
					              Total Saldo <?= (isset($post['filter']) && $post['bulan'] != '' && $post['tahun'] != '') ? "Saldo Bulan ". $post['bulan']." / ".$post['tahun']." : " : "Per-tanggal ". date('d-m-Y')." : "; ?><?="<b>Rp. ".number_format($saldo).",-</b>" ?>
					            </span>  
					          </div>
					        </div>
					      </div>
					      <div class="row">
					        <div class="col-12">
					          <?php echo $this->session->flashdata('message'); ?>
					        </div>
					      </div>   

					      <div class="">    
					        <!-- <div class="cart-table table-responsive"> -->
							<table class="table table-bordered">
					        <!-- <table class="" id="dataTable"> -->
					        <!-- <table border="1" id="Table1" cellpadding="4" cellspacing="0" width="100%"> -->
					          <thead>
					            <tr>
					              <th scope="col">No.</th>
					              <th scope="col">Tanggal</th>
					              <th scope="col">Mutasi</th>
					              <th scope="col">Keterangan</th>
					              <th scope="col">Masuk</th>
					              <th scope="col">Keluar</th>
					              <th scope="col">Saldo</th>
					            </tr>
					          </thead>
					          <tfoot>
					            <tr>
					              <th scope="col" colspan="4"><b>Total</b></th>
					              <th scope="col" align="right" class="text-right">
					                <b>
					                  <?php 
					                    if($post['filter']!=""){
					                      $masuk_filter = $jum_masuk+$saldo_bulan_lalu;
					                    }else{
					                      $masuk_filter = $jum_masuk;
					                    }
					                    echo "Rp. ".number_format($masuk_filter).",-";
					                  ?>
					                </b>
					              </th>
					              <th scope="col" align="right" class="text-right"><b><?="Rp. ".number_format($jum_keluar).",-";?></b></th>
					              <th scope="col" class="text-right">
					                <b>
					                  <?php 
					                    $the_saldo = $jum_masuk-$jum_keluar;                    
					                    if ($post['filter']!="") {
					                      $the_saldo+=$saldo_bulan_lalu;
					                    }  
					                    echo "Rp. ".number_format($the_saldo).",-";
					                  ?>
					                </b>
					              </th>
					            </tr>
					          </tfoot>
					          <tbody>
					            <?php if($post['filter']!='' && $post['bulan']!=""): ?>
					              <tr>
					                <td><b><?=0; ?></b></td>                
					                <td><b><?=$post['tahun'].'-'.($post['bulan']-1); ?></b></td>                
					                <td><b>Masuk</b></td>                
					                <td><b>Saldo Bulan Sebelumnya (<?=getBulanNama(($post['bulan']-1)).'-'.($post['bulan']-1 == 0? ($post['tahun']-1): $post['tahun']); ?>)</b></td>
					                <td align="right"><b><?="Rp. ".number_format($saldo_bulan_lalu).",-";?></b></td>
					                <td align="right"><b><?="Rp. 0,-";?></b></td>
					                <td align="right"><b><?="Rp. ".number_format($saldo_bulan_lalu).",-";?></b></td>
					              </tr>
					            <?php endif; ?>
					            <?php 
					              $i = 1; 
					              if ($post['filter']!="") {
					                $saldo=$saldo_bulan_lalu;
					              }else{                
					                $saldo=0;
					              }
					            ?>
					                <?php 
					                  foreach ($kas as $k) : 
					                  if ($k['mutasi'] == "Masuk") {
					                    $saldo+= (int)$k['nominal'];
					                  }else{
					                    $saldo-= (int)$k['nominal'];
					                  }
					                ?>
					                  <tr>
					                    <th><?=$i; ?></th>
					                    <td><?php echo $k['tanggal']; ?></td>
					                    <td><?php echo $k['mutasi']; ?></td>
					                    <td><?php echo $k['keterangan']; ?></td>
					                    <td align="right"><?php echo $k['mutasi'] == "Masuk" ? "Rp. ".number_format($k['nominal']).",-" : 0; ?></td>
					                    <td align="right"><?php echo $k['mutasi'] == "Keluar" ? "Rp. ".number_format($k['nominal']).",-" : 0; ?></td>
					                    <td align="right"><?php echo "Rp. ".number_format($saldo).",-"; ?></td>
					                  </tr>
					              <?php $i++; ?>
					            <?php endforeach; ?>
					          </tbody>
					        </table>

				          </div>
					      </div>
				    </div>
				</div>
		  </div>
	</div>
    <!-- Batas Rekap Kas -->

    <!-- KAS MASUK -->
    <div class="tab-pane" id="masuk">
      <!-- THE FILTER DATA -->
	  <div class="row">
	    <div class="col-lg-12">
	      <div class="card mb-4">
	        <div class="card-header with-border">
	              <span class="card-title h5">Data Kas Masuk</span>	              
	          </div>
	          <div class="card-body">
			      <div class="row">
			        <div class="col text-left">
			          <div class="alert alert-success mt-2">            
			            <span class="">
			              <!-- Total Kas Masuk Per-tanggal <?=date('d-m-Y');?> : <b>Rp. <?=number_format($jum_masuk);?>,-</b> -->
			              Total Kas Masuk <?= (isset($post['filter']) && $post['bulan'] != '' && $post['tahun'] != '') ? "Bulan ". $post['bulan']." / ".$post['tahun']." : " : "Per-tanggal ". date('d-m-Y')." : "; ?><?="<b>Rp. ".number_format($jum_masuk).",-</b>" ?>
			            </span>  
			          </div>
			        </div>
			      </div>
			      <div class="row">
			        <div class="col-12">
			          <?php echo $this->session->flashdata('message'); ?>
			        </div>
			      </div>   
			      <div class="">    
			        <!-- <table class="" id="Table2"> -->
							<table class="table table-bordered">
			        <!-- <table border="1" id="Table2" cellpadding="4" cellspacing="0" width="100%"> -->
			          <thead>
			            <tr>
			              <th scope="col">No.</th>
			              <th scope="col">Tanggal</th>
			              <th scope="col">Mutasi</th>
			              <th scope="col">Nominal</th>
			              <th scope="col">Keterangan</th>
			            </tr>
			          </thead>
			          <tfoot>
			            <tr>
			              <th scope="col" colspan="3"><b>Total</b></th>
			              <th scope="col" align="right" class="text-right"><b><?="Rp. ".number_format($jum_masuk).",-";?></b></th>              
			              <th></th>
			            </tr>
			          </tfoot>
			          <tbody>
			            <?php $i = 1;?>
			                <?php foreach ($kas as $k) : if($k['mutasi'] == "Masuk"):?>
			                  <tr>
			                    <th><?=$i; ?></th>
			                    <td><?php echo $k['tanggal']; ?></td>
			                    <td><?php echo $k['mutasi']; ?></td>
			                    <td align="right"><?php echo "Rp. ".number_format($k['nominal']). ",-"; ?></td>
			                    <td><?php echo $k['keterangan']; ?></td>
			                  </tr>
			              <?php $i++; ?>
			            <?php endif; endforeach; ?>
			          </tbody>
			        </table>
			      </div>
	              
	          </div>  
	      </div>
	    </div>
	  </div>
  	<!-- BATAS FILTER DATA -- Bawah sudah tampilan datanya -->
    </div>
    <!-- BATAS Kas Masuk -->

    <!-- KAS KELUAR -->
    <div class="tab-pane" id="keluar">
    	<!-- THE FILTER DATA -->
	  <div class="row">
	    <div class="col-lg-12">
	      <div class="card mb-4">
	        <div class="card-header with-border">
	              <span class="card-title h5">Filter Data Kas Keluar</span>	              
	          </div>
	          <div class="card-body">
			      <div class="row">
			        <div class="col text-left">
			          <div class="alert alert-danger mt-2">            
			            <span class="">Total Kas Keluar <?= (isset($post['filter']) && $post['bulan'] != '' && $post['tahun'] != '') ? " Bulan ". $post['bulan']." / ".$post['tahun']." : " : "Per-tanggal ". date('d-m-Y')." : "; ?><?="<b>Rp. ".number_format($jum_keluar).",-</b>" ?></span>  
			          </div>
			        </div>
			      </div>
			      <div class="row">
			        <div class="col-12">
			          <?php echo $this->session->flashdata('message'); ?>
			        </div>
			      </div>   
			      <div class="">    
			        <!-- <table class="" id="Table3"> -->
							<table class="table table-bordered">
			        <!-- <table border="1" id="Table2" cellpadding="4" cellspacing="0" width="100%"> -->
			          <thead>
			            <tr>
			              <th scope="col">No.</th>
			              <th scope="col">Tanggal</th>
			              <th scope="col">Mutasi</th>
			              <th scope="col">Nominal</th>
			              <th scope="col">Keterangan</th>
			            </tr>
			          </thead>
			          <tfoot>
			            <tr>
			              <th scope="col" colspan="3"><b>Total</b></th>
			              <th scope="col" align="right" class="text-right"><b><?="Rp. ".number_format($jum_keluar).",-";?></b></th>              
			              <th></th>
			            </tr>
			          </tfoot>
			          <tbody>
			            <?php $i = 1;?>
			                <?php foreach ($kas as $k) : if($k['mutasi'] == "Keluar"):?>
			                  <tr>
			                    <th><?=$i; ?></th>
			                    <td><?php echo $k['tanggal']; ?></td>
			                    <td><?php echo $k['mutasi']; ?></td>
			                    <td align="right"><?php echo "Rp. ".number_format($k['nominal']). ",-"; ?></td>
			                    <td><?php echo $k['keterangan']; ?></td>                    
			                  </tr>
			              <?php $i++; ?>
			            <?php endif; endforeach; ?>
			          </tbody>
			        </table>
			      </div>
	              
	          </div>  
	      </div>
	    </div>
	  </div>
  	 <!-- BATAS FILTER DATA -- Bawah sudah tampilan datanya -->
    </div>
  </div> 
					<!-- BATAS KONTEN -->
				</div>
			</div>
		</section>
		<!-- End Portfolio Area -->

