
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
                        <a href="<?php echo base_url('nilai_ijazah') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                 <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                     <table class="table">
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Nisn</td><td><?php echo $nisn; ?></td></tr>
	    <tr><td>Nilai Bhs Indo</td><td><?php echo $nilai_bhs_indo; ?></td></tr>
	    <tr><td>Nilai Bhs Inggris</td><td><?php echo $nilai_bhs_inggris; ?></td></tr>
	    <tr><td>Nilai Ipa</td><td><?php echo $nilai_ipa; ?></td></tr>
	    <tr><td>Nilai Ips</td><td><?php echo $nilai_ips; ?></td></tr>
	    <tr><td>Nilai Mtk</td><td><?php echo $nilai_mtk; ?></td></tr>
	    <tr><td>Nilai Akhir</td><td><?php echo $nilai_akhir; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>