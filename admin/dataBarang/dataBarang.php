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
				<h4>Data Barang</h4>
			</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="tableExport" style="width: 100%;">
							<div class="text-left mb-4">

								<a href="?hal=tambahBarang" class="btn btn-primary"> Tambah Barang </a>
							
							</div>

								<thead>
									<?php
										include "../koneksi.php";
										$query = mysqli_query($koneksi,"SELECT * FROM tb_barang left join tb_asal_barang on tb_barang.id_asal_barang = tb_asal_barang.id_asal_barang");
									?>
									
									<tr>
									<th>Id Barang</th>
									<th>Nama Barang</th>
									<th>Asal Barang</th>
									<th>Jumlah</th>
									<th>Kondisi awal tahun</th>
									<th>Kondisi akhir tahun</th>
									<th>Tahun peroleh</th>
									<th>Aksi</th>
									</tr>

								</thead>

								<tbody>
									<?php
										while ($data = mysqli_fetch_array($query)) {
																		
									?>
										<tr>
												<td><?php echo $data['id_barang']?></td>
												<td><?php echo $data['nama_barang']?></td>
												<td><?php echo $data['asal_barang']?></td>
												<td><?php echo $data['jumlah']?></td>
												<td><?php echo $data['kon_awal_tahun']?></td>
												<td><?php echo $data['kon_akhir_tahun']?></td>
												<td><?php echo $data['tahun_peroleh']?></td>
												<td>
													<a href="beranda.php?hal=ubahBarang&id_barang=<?php echo $data['id_barang'] ?>" class="btn btn-info">Ubah </a>
													 <a href="dataBarang/hapusBarang.php?id_barang=<?php echo $data['id_barang'] ?>" class="btn btn-danger" onclick = "return confirm('Mau dihapus??')">Hapus</a>
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