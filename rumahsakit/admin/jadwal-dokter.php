<?php
require 'config/koneksi.php';
require 'config/header.php';
?>


<!-- main content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Jadwal Dokter</h1>
		</div>
		<div class="section-body">
			<div class="card">
				<div class="card-header"><a href="form-jadwal.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i>Tambah Data</a></div>
				<div class="card-body">
				<table class="table" id="table">
				<thead>
					<tr>
					<th>No</th>
					<th>Kode Jadwal</th>
					<th>Hari</th>
					<th>Shift</th>
					<th>Kode Dokter</th>
					<th>Aksi</th>
					</tr>
				</thead>
					<?php
					$no=1;
					$jadwal = query ("SELECT * FROM jadwal_dokter")
					?>
					<tbody>
						<?php foreach ($jadwal as $baris) { ?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $baris["kd_jadwal"];?></td>
								<td><?php echo $baris["hari"];?></td>
								<td><?php echo $baris["shift"];?></td>
								<td><?php echo $baris["kd_dokter"];?></td>
								<td><a href="edit-jadwal.php?id=<?php echo $baris["kd_jadwal"];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a><a href="hapus-jadwal.php?id=<?php echo $baris["kd_jadwal"];?> "class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</section>	
</div>

<?php
require 'config/footer.php';
?>