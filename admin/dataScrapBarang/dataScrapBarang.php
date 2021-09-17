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
				<h4>Data Scrap Barang</h4>
			</div>

				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="tableExport" style="width: 100%;">
							<div class="text-left mb-4">

							
							</div>

								<thead>
									<?php
										include "../koneksi.php";
										$query = mysqli_query($koneksi,"SELECT * FROM tb_scrap_barang LEFT JOIN tb_penempatan ON tb_scrap_barang.id_penempatan = tb_penempatan.id_penempatan left join tb_barang ON tb_penempatan.id_barang = tb_barang.id_barang left join tb_user ON tb_scrap_barang.id_user = tb_user.id_user ");



									?>

									
									<tr>
									<th>Id Scrap</th>
									<th>Id Penempatan</th>
									<th>Tanggal Scrap</th>
									<th>Nama Barang</th>
									<th>Jumlah</th>
									<th>Status </th>
									<th>Kode Admin</th>
																
									
									</tr>

								</thead>

								<tbody>
									<?php
										while ($data = mysqli_fetch_array($query)) {
																						
								
									?>
										<tr>
												<td><?php echo $data['id_scrap']?></td>
												<td><?php echo $data['id_penempatan']?></td>
												<td><?php echo $data['tanggal_scrap']?></td>
												<td><?php echo $data['nama_barang']?></td>
												<td><?php echo $data['jumlah_barang']?></td>
												<td><?php echo $data['status']?></td>
												<td><?php echo $data['nama_user']?></td>
												
												
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