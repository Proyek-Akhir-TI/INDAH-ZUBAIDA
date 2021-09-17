
<?php
if(!$_SESSION['id_user']) {

	 echo "
        <meta http-equiv='refresh' content ='0; url=../index.html'>
      ";
} else {

				
?>



<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Data Lokasi</h4>
			</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="tableExport" style="width: 100%;">
							<div class="text-left mb-4">

								<a href="?hal=tambahLokasi" class="btn btn-primary"> Tambah Lokasi </a>
							
							</div>

								<thead>
									<?php
										include "../koneksi.php";
										$query = mysqli_query($koneksi,"SELECT * FROM tb_lokasi ");
									?>
									
									<tr>
									<th>id Lokasi</th>
									<th>Nama Lokasi</th>								
									<th>Aksi</th>
									</tr>

								</thead>

								<tbody>
									<?php
										while ($data = mysqli_fetch_array($query)) {
										
								
									?>
										<tr>
												<td><?php echo $data['id_lokasi']?></td>
												<td><?php echo $data['nama_lokasi']?></td>
												
												<td>
													<a href="beranda.php?hal=ubahLokasi&id_lokasi=<?php echo $data['id_lokasi'] ?>" class="btn btn-info">Ubah </a>
													 <a href="dataLokasi/hapusLokasi.php?id_lokasi=<?php echo $data['id_lokasi'] ?>" class="btn btn-danger" onclick = "return confirm('Mau dihapus??')">Hapus</a>
												</td>

										</tr>
								<?php
								}

								?>
										
								</tbody>

							
						</table>
						
					</div>
					
				</div>

			
		</div>
	</div>
</div>

<?php 
		}

?>