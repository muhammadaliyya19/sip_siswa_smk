<div class="container-fluid">
  <div class="row mt-3">
    <!-- <div class="col text-left">
      <h1 class="h3 text-gray-800"><?=$judul;?></h1>  
    </div> -->
    <div class="col text-right">
      <a href="<?php echo base_url(); ?>berita/" class="btn btn-primary">Kembali</a>
    </div>    
  </div>      
  <div class="row">
    <div class="col-12" align="center">
      <?php echo "<h1>".$this_berita['judul']."</h1>"; ?>
    </div>
    <div class="col-12" align="center">
      <img src="<?=base_url('assets/img/berita/'.$this_berita["foto_utama"]) ?>" style="width: 25%;">
    </div>
    <div class="col-12">
      <?php echo $this_berita['konten']; ?>
    </div>
    <div class="col-12">
      <?php 
        $tags = explode(",", $this_berita['tag']);
        echo "<b>Tags</b> : ";
        foreach ($tags as $t) :
      ?>
        <a href="#" class="badge badge-primary badge-sm ml-2"><?=$t; ?></a>
      <?php
        endforeach;
      ?>
    </div>
  </div>       
</div>
<!-- End of Main Content -->
