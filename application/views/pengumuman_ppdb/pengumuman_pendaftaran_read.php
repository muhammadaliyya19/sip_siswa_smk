
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="pull-left">
                    <div class="box-title">
                        <h4><?php echo $judul ?></h4>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="box-title">
                        <a href="<?php echo base_url('pengumuman_ppdb') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                 <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                     <table class="table">
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Id Tahun Ajaran</td><td><?php echo $id_tahun_ajaran; ?></td></tr>
	    <tr><td>Tgl Update</td><td><?php echo $tgl_update; ?></td></tr>
	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>