
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
                        <a href="<?php echo base_url('nilai_ijazah/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" width="100%">
                        <tr>
                            <th>No</th>
		<th>Id User</th>
		<th>Nisn</th>
		<th>Nilai Bhs Indo</th>
		<th>Nilai Bhs Inggris</th>
		<th>Nilai Ipa</th>
		<th>Nilai Ips</th>
		<th>Nilai Mtk</th>
		<th>Nilai Akhir</th>
		<th>Keterangan</th>
		<th>Action</th>
                        </tr><?php
                        foreach ($nilai_ijazah_data as $nilai_ijazah)
                        {
                            ?>
                            <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $nilai_ijazah->id_user ?></td>
			<td><?php echo $nilai_ijazah->nisn ?></td>
			<td><?php echo $nilai_ijazah->nilai_bhs_indo ?></td>
			<td><?php echo $nilai_ijazah->nilai_bhs_inggris ?></td>
			<td><?php echo $nilai_ijazah->nilai_ipa ?></td>
			<td><?php echo $nilai_ijazah->nilai_ips ?></td>
			<td><?php echo $nilai_ijazah->nilai_mtk ?></td>
			<td><?php echo $nilai_ijazah->nilai_akhir ?></td>
			<td><?php echo $nilai_ijazah->keterangan ?></td><td>
                        <a href="<?php echo site_url('nilai_ijazah/read/' . $nilai_ijazah->id ) ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                        <a href="<?php echo site_url('nilai_ijazah/update/' . $nilai_ijazah->id ) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a data-href="<?php echo site_url('nilai_ijazah/delete/' . $nilai_ijazah->id ) ?>" class="btn btn-danger hapus-data"><i class="fa fa-trash"></i></a>
                     </td>
		</tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    
                        </div>
                        <div class="col-md-6 text-right">
                            <?php echo $pagination ?>
                        </div>
                    </div>
                 
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
       $(document).on("click", ".hapus-data", function () {
          hapus($(this).data("href"));
        });
    });
</script>
