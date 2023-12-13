
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
                        <a href="#" class=" mt-3 btn btn-primary btn-icon-split tambahTask" data-toggle="modal" data-target="#newTahunAjarModal">
                            <span class="icon">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tahun Ajaran</span>
                        </a>
                        <a href="<?php echo base_url('pengumuman_ppdb/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" width="100%">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tahun Ajaran</th>
                            <th>Tgl Update</th>
                            <th>Action</th>
                        </tr><?php
                        foreach ($pengumuman_pendaftaran_data as $pengumuman_pendaftaran)
                        {
                            ?>
                            <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $pengumuman_pendaftaran->judul ?></td>
			<td><?php echo $pengumuman_pendaftaran->deskripsi ?></td>
			<td><?php echo $pengumuman_pendaftaran->tahun_ajaran ?></td>
			<td><?php echo $pengumuman_pendaftaran->tgl_update ?></td><td>
                        <a href="<?php echo site_url('pengumuman_ppdb/read/' . $pengumuman_pendaftaran->id ) ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                        <a href="<?php echo site_url('pengumuman_ppdb/update/' . $pengumuman_pendaftaran->id ) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a data-href="<?php echo site_url('pengumuman_ppdb/delete/' . $pengumuman_pendaftaran->id ) ?>" class="btn btn-danger hapus-data-ta"><i class="fa fa-trash"></i></a>
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

<!-- Modal For Tahun Ajaran -->

<div class="modal fade" id="newTahunAjarModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tahun Ajaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <div class="modal-body">
                <ol>
                <?php foreach ($tahun_ajarans as $ta) : ?>
                    <div class="row">
                        <li>
                            <?= $ta->tahun_ajaran; ?> &nbsp; 
                            <a data-href="<?php echo site_url('tahun_ajaran/delete/' . $ta->id ) ?>" class="btn btn-danger btn-xs hapus-data float-right"><i class="fa fa-trash"></i></a>
                        </li>
                    </div>
                <?php endforeach; ?>
                </ol>
            </div>
			<form action="<?=base_url('tahun_ajaran/create_action');?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="number" class="form-control" id="tahun" placeholder="Tahun" name="tahun_ajaran">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary newboard">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
       $(document).on("click", ".hapus-data", function () {
          hapus($(this).data("href"));
        });
        $(document).on("click", ".hapus-data-ta", function () {
          hapus($(this).data("href"));
        });
    });
</script>
