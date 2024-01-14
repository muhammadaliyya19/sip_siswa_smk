<!DOCTYPE html>
<html>
<?php 
date_default_timezone_set('Asia/Jakarta');
  function getBulanNama($angka)
  {
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    if ($angka == 0) {
      return $bulan[11];
    }else{
      return $bulan[(int)$angka-1];
    }
  }

  function getTitle($post)
  {
      $judul_laporan = "";
      switch ($post['source']) {
            case 'jumat':
                $judul_laporan = "Petugas Sholat Jumat (Khotib, Khotib Cadangan & Bilal)";
            break;
            case 'imam_tarawih':
                $judul_laporan = "Jadwal Imam Sholat Tarawih & Sholat Tasbih";
            break;
            case 'pengajian':
                $judul_laporan = "Jadwal Pengajian Bulan Ramadhan";
            break;
            case 'konsumsi_ramadhan':
                $judul_laporan = "Jadwal Konsumsi Pengajian Bulan Ramadhan";
            break;
      }
      return $judul_laporan;
  }
  // var_dump($post); die;
?>
<head>
    <title><?=getTitle($post)."-".date('d-m-Y:H-i:s');?></title>
    <style type="text/css">
        body {
            font-family: Arial;
        }

        table {
            border-collapse: collapse;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body onload="window.print()">
    <div style="padding-left: 50px; padding-right: 50px;">                
    <?php switch ($post['source']) {
        case 'jumat':?>
            <div align="center">
                <img src="<?=base_url('assets/img/header_laporan.jpeg'); ?>" style="width: 100%; height: 100px;">
                <h3>JADWAL KHOTIB DAN BILAL</h3>
                <h3 style="text-decoration: underline;">MASJID " FATHULBARI " KARANGSUKO</h3>
            </div>
            <hr>    
                <table border="1" cellpadding="4" cellspacing="0" width="100%">
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
                <h4>Khotib & Bilal Cadangan : </h4>
                <ol>
                    <?php foreach ($khotib_cadangan as $kc):?>
                        <li><?="<b>Khotib :</b> ".$kc['khotib']." | <b>Bilal :</b> ".$kc['bilal']; ?></li>
                    <?php endforeach; ?>
                </ol>
    <?php break;
        case 'imam_tarawih':?>
            <div align="center">
                <img src="<?=base_url('assets/img/header_laporan.jpeg'); ?>" style="width: 100%; height: 100px;">
                <h3>JADWAL IMAM SHOLAT TARAWIH RAMADHAN <?=$post['tahun']; ?></h3>
                <h3 style="text-decoration: underline;">MASJID " FATHULBARI " KARANGSUKO</h3>
            </div>
            <hr>    
                <table border="1" cellpadding="4" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama Imam</th>
                          <th scope="col">Hari / Waktu</th>
                          <th scope="col">Petugas Nida</th>
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
                            <td><?php echo $ir['waktu']; ?></td>                            
                            <td><?php echo $ir['nama_petugas_nida']; ?></td>                            
                          </tr>
                      <?php $i++; ?>
                    <?php }endforeach; ?>
                    </tbody>
                </table>
            <h4>Informasi Sholat Tasbih </h4>
                <table border="1" cellpadding="4" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Imam Sholat Tasbih</th>
                          <th scope="col">Hari / Waktu</th>
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
                            <td><?php echo $ir['waktu']; ?></td>                            
                          </tr>
                      <?php $i++; ?>
                    <?php }endforeach; ?>
                    </tbody>
                </table>
    <?php break;
        case 'pengajian':?>
            <div align="center">
                <img src="<?=base_url('assets/img/header_laporan.jpeg'); ?>" style="width: 100%; height: 100px;">
                <h3>PENGAJIAN BULAN RAMADHAN <?=$post['tahun']; ?></h3>
                <h3 style="text-decoration: underline;">MASJID JAMI' FATHULBARI KARANGSUKO PAGELARAN MALANG</h3>
            </div>
            <hr>    
                <table border="1" cellpadding="4" cellspacing="0" width="100%">
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
                <!-- <h4>Keterangan No Telp Para Kyai : </h4>
                <ol>
                    <?php  
                      foreach ($pengajian as $data) :                         
                    ?>
                        <li><?=$data['pembicara']." (".$data['kontak_pembicara'].")"; ?></li>
                    <?php endforeach; ?>
                </ol> -->
                <h4>**Catatan</h4>
                <span>Apabila berhalangan, dimohon untuk menghubungi <b>Ta'mir</b> sehari sebelumnya.</span>
                <ul>
                    <?php  
                      for ($i=0; $i < 2; $i++):
                    ?>
                        <li><?=$takmir[$i]['nama']." (".$takmir[$i]['no_hp'].")"; ?></li>
                    <?php endfor; ?>
                </ul>
    <?php break;
        case 'konsumsi_ramadhan':?>
            <div align="center">
                <img src="<?=base_url('assets/img/header_laporan.jpeg'); ?>" style="width: 100%; height: 100px;">
                <h3>DAFTAR PEMBERI HIDANGAN BUKA DAN SAHUR</h3>
                <h3>MASJID JAMI' FATHUL BARI</h3>
                <h3>RAMADHAN <?=$post['tahun']; ?></h3>
            </div>
            <hr>    
            <br>  
            <div style="display: inline;">
            <div style="width: 50%; float:left; display: block;">
                  <table border="1" cellpadding="4" cellspacing="0" width="97%">
                    <thead>
                      <tr>
                        <th colspan="4">Untuk Buka (Ta'jil)</th>
                      </tr>
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
                          <td><?php echo $b['tanggal']; ?></td>
                          <td><?php echo $b['nama']; ?></td>
                          <td><?php echo $b['alamat']; ?></td>                          
                        </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
            </div>

            <div style="width: 50%; float:right; display: block;" align="right">
                  <table border="1" cellpadding="4" cellspacing="0" width="97%">
                    <thead>
                      <tr>
                        <th colspan="4">Untuk Sahur</th>
                      </tr>
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
                          <td><?php echo $s['tanggal']; ?></td>
                          <td><?php echo $s['nama']; ?></td>
                          <td><?php echo $s['alamat']; ?></td>                          
                        </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
            </div>  
            </div>  
            <div style="display: inline-block;">
                <h4>**Catatan</h4>
                <ul>
                    <li>Untuk Konsumsi Buka (Ta'jil) akan diambil setengah jam sebelum Adzan Maghrib</li>
                    <li>Untuk Konsumsi Sahur akan diambil setelah shilat tarawih</li>
                </ul>
            </div>          
    <?php break;
    } ?>   
        <br>
        <div align="left" style="width: 100%; display: block;">
            <a href="#" class="no-print" onclick="window.print();">Cetak/Print</a><br>
            <a href="<?= base_url('jadwal'); ?>" class="no-print">Kembali</a><br>
        </div>            
    </div>
</body>

</html>