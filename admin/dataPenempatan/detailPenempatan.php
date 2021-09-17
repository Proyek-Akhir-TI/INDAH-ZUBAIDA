<?php
	include "../koneksi.php";
	$id_lokasi = $_GET['id_lokasi'];

	$x = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tb_lokasi where id_lokasi = '$id_lokasi'"));


?>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Detail Penempatan Barang <span class="col-green"><?php echo $x['nama_lokasi'] ?></span></h4>
			</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover"  style="width: 100%;">
							

								<thead>
									<?php
										include "../koneksi.php";
										$query = mysqli_query($koneksi,"SELECT * FROM tb_penempatan left join tb_barang on tb_penempatan.id_barang = tb_barang.id_barang where id_lokasi = '$id_lokasi'");

									?>
									
									<tr>
									<th>Id Barang</th>
									<th>Tanggal Penempatan</th>
									<th>Nama Barang</th>
									<th>Kondisi Awal Tahun</th>
									<th>Kondisi Akhir Tahun</th>
																
								
									</tr>

								</thead>

								<tbody>
									<?php
										while ($data = mysqli_fetch_array($query)) {
											
										
								
									?>
										<tr>
												<td><?php echo $data['id_penempatan']?></td>
												<td><?php echo $data['tanggal_penempatan']?></td>
												<td><?php echo $data['nama_barang']?></td>
												<td><?php echo $data['kon_awal_tahun']?></td>
												<td><?php echo $data['kon_akhir_tahun']?></td>
												
												
											

										</tr>
								<?php
								}

								?>
										
								</tbody>

							
						</table>
						
					</div>
					<a href="beranda.php?hal=dataPenempatan" class="btn btn-primary" >Kembali</a>
					
				</div>

			
		</div>
	</div>
</div>