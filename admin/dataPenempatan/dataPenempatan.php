	<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4>Data Penempatan Barang</h4>
			</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="tableExport" style="width: 100%;">
							<div class="text-left mb-4">

								<a href="?hal=tambahPenempatan" class="btn btn-primary"> Tambah Penempatan Barang </a>
							
							</div>

								<thead>
									<?php
										include "../koneksi.php";
										$query = mysqli_query($koneksi,"SELECT * FROM tb_lokasi");



									?>

									
									<tr>
									<th>Id Lokasi</th>
									<th>Nama Lokasi</th>
									<th>Jumlah Barang</th>
																
									<th>Aksi</th>
									</tr>

								</thead>

								<tbody>
									<?php
										while ($data = mysqli_fetch_array($query)) {
											$hitungBarang = mysqli_query($koneksi,"SELECT id_barang FROM tb_penempatan where id_lokasi = '$data[id_lokasi]'");
											$hasil = mysqli_num_rows($hitungBarang);

											
								
									?>
										<tr>
												<td><?php echo $data['id_lokasi']?></td>
												<td><?php echo $data['nama_lokasi']?></td>
												<td><?php echo $hasil ?></td>
												
												<td>
													<a href="beranda.php?hal=detailPenempatan&id_lokasi=<?php echo $data['id_lokasi'] ?>" class="btn btn-info">Detail </a>
													
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