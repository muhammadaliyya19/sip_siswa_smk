<!DOCTYPE html>
<html>
<?php
date_default_timezone_set('Asia/Jakarta');
?>

<head>
  <title>Cetak Bukti Pendaftaran Siswa</title>
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
  <div style="padding-left: 50px; padding-right: 50px; width: auto;">
    <div style="width:20%; float:left; ">
      <img src="<?= base_url('assets/img/logos.png'); ?>" style="width: auto; height: 120px;">
    </div>
    <div style="width:80%; float:right; height: 120px; align-items: center; justify-content: center;" align="center">
      <h1>SMK AL HAMIDIYAH</h1>
      <span>Jl. Raya Kedoya Selatan No. 50 Kec. Kebon Jeruk Jakarta Barat</span>
    </div>
    <div>
      <hr style="border-top: 1px solid white;">
      <hr>
      <hr style="border-top: 4px solid black;">
    </div>
    
    <?php 
      $tgl_daftar = strtotime($calon_siswa->tgl_daftar);
      $tgl = date("d-m-Y", $tgl_daftar);
    ?>

    <br><b>Tanggal Pendaftaran : </b> <?= $tgl;?><br><br>

    <table border="1" cellpadding="4" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th colspan="2">Data Diri Siswa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="col">Nama Siswa</th>
          <td scope="col"><?=$calon_siswa->nama;?></td>
        </tr>
        <tr>
          <th scope="col">NISN</th>
          <td scope="col"><?=$calon_siswa->nisn;?></td>
        </tr>
        <tr>
          <th scope="col">Tempat/Tanggal Lahir</th>
          <td scope="col"><?=$calon_siswa->tempat_lahir . " / " . $calon_siswa->tanggal_lahir;?></td>
        </tr>
        <tr>
          <th scope="col">Jenis Kelamin</th>
          <td scope="col"><?=$calon_siswa->jenis_kelamin == "L" ? "Laki-laki" : "Perempuan";?></td>
        </tr>
        <tr>
          <th scope="col">Agama</th>
          <td scope="col"><?=$calon_siswa->agama;?></td>
        </tr>
        <tr>
          <th scope="col">Alamat</th>
          <td scope="col"><?=$calon_siswa->alamat_siswa;?></td>
        </tr>
        <tr>
          <th scope="col">Asal Sekolah</th>
          <td scope="col"><?=$calon_siswa->asal_sekolah;?></td>
        </tr>
      </tbody>
    </table>
    <br>
    <table border="1" cellpadding="4" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th colspan="6">Data Nilai Siswa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="col">MAT</td>
          <td scope="col">IPA</td>
          <td scope="col">BIN</td>
          <td scope="col">BIG</td>
          <td scope="col">IPS</td>
          <td scope="col">NILAI AKHIR</td>
        </tr>
        <tr>
          <th scope="col"><?=$nilai_ijazah->nilai_mtk;?></th>
          <th scope="col"><?=$nilai_ijazah->nilai_ipa;?></th>
          <th scope="col"><?=$nilai_ijazah->nilai_bhs_indo;?></th>
          <th scope="col"><?=$nilai_ijazah->nilai_bhs_inggris;?></th>
          <th scope="col"><?=$nilai_ijazah->nilai_ips;?></th>
          <th scope="col"><?=$nilai_ijazah->nilai_akhir;?></th>
        </tr>
      </tbody>
    </table>
    <br>
    <table border="1" cellpadding="4" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Status Penerimaan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="col" align="center">Diterima di Jurusan</td>
        </tr>
        <tr>
          <?php if($calon_siswa->status_lolos == 0):?>
          <th scope="col"> -- data belum diproses -- </th>
          <?php elseif ($calon_siswa->status_lolos == 1):?>
          <th scope="col">Akuntansi</th>
          <?php elseif ($calon_siswa->status_lolos == 2):?>
          <th scope="col">Pemasaran</th>
          <?php endif;?>
        </tr>
      </tbody>
    </table>
    <br>
    <table border="0" cellpadding="4" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>
            <img src="<?= $qr_image; ?>" style="width: auto; height: 200px;">
          </th>
        </tr>
      </thead>
    </table>
    <div align="center" style="width: 100%; display: block;">
      <h4>Harap cetak dan bawa bukti pendaftaran ini saat melakukan daftar ulang.</h4>
    </div>
    <div align="left" style="width: 100%; display: block;">
      <a href="#" class="no-print" onclick="window.print();">Cetak/Print</a><br>
      <!-- <a href="<?= base_url('pendaftaran'); ?>" class="no-print">Kembali</a><br> -->
    </div>
  </div>
</body>

</html>