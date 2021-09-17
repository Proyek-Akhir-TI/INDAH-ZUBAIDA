<?php
include "../koneksi.php";
error_reporting(0);
$tanggalSekarang = date("d-m-Y");

$today = date("ymd");
$query = "SELECT MAX(RIGHT(id_penempatan,10)) as akhir from tb_penempatan where RIGHT(id_penempatan,10) LIKE '$today%'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$noAkhirBeli = $data['akhir'];
$noAkhirUrut = substr($noAkhirBeli,8,4);
$noUrutSelanjutnya = $noAkhirUrut +1;
$noBeliSelanjutnya = $today. sprintf('%04s',$noUrutSelanjutnya);
$id = "INV-";
$no_baru = $id.$noBeliSelanjutnya;





if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['tambah'])){
	$id_penempatan = $_POST['id_penempatan'];
	$id_barang = $_POST['id_barang'];
	$id_lokasi = $_POST['id_lokasi'];
		
			$cek = mysqli_query($koneksi,"SELECT id_barang , id_lokasi  from tb_penempatan where id_barang ='$id_barang' AND id_lokasi = '$id_lokasi'");
			$cek1 = mysqli_num_rows($cek);

			if($cek1 > 0 ){
				echo "
			<script>
				alert('Kode Barang Sudah terdapat di Lokasi');
				window.location = 'beranda.php?hal=tambahPenempatan'
			</script>
		";
			} else {


	$simpan = mysqli_query($koneksi,"INSERT INTO tb_penempatan VALUES('$id_penempatan','$today','$id_barang','$id_lokasi','1','$_SESSION[id_user]')");
	$updatestok = mysqli_query ($koneksi,"UPDATE tb_barang SET jumlah = jumlah - 1 where id_barang = '$id_barang'");

      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=tambahPenempatan'>
      ";
	
}
}







?>




<div class="col-sm-12">
	<div class="card">
		<form class="needs-validation" method="post" novalidate="">
				<div class="card-header">
					<h4>Tambah Penempatan</h4>
				</div>

				<div class="card-body">
					<div class="row">

					<div class="col-sm-6">
						<div class="form-group row" hidden>
							<label class="col-sm-3 col-form-label">
								Id Penempatan
							</label>
							<div class="col-sm-6">
								<input type="text" name="id_penempatan" value="<?php echo $no_baru ?>" class="form-control" required="">
								<div class="invalid-feedback">
									
								</div>
								
							</div>
							
						</div>
						

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">
								Nama Barang
							</label>
							<div class="col-sm-6">
								<select class="form-control" type="text" name="id_barang">
									<?php
										include "../koneksi.php";
										$tampil = mysqli_query($koneksi,"SELECT * FROM tb_barang where jumlah > 0 AND kon_akhir_tahun != 'Scrap'");
										while($x=mysqli_fetch_array($tampil)){
											echo "<option value=$x[id_barang] selected>$x[nama_barang]</option>";

										}
									?>

								</select>
							
							</div>
						</div>

						 				
						
							

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">
								Nama Lokasi
							</label>
							<div class="col-sm-6">
								<select class="form-control" type="text" name="id_lokasi">
									<?php
										include "../koneksi.php";
										$tampil = mysqli_query($koneksi,"SELECT * FROM tb_lokasi");
										while($x=mysqli_fetch_array($tampil)){
											echo "<option value=$x[id_lokasi] selected>$x[nama_lokasi]</option>";

										}
									?>

								</select>
							</div>
							
						</div>

						
							
						</div>

						
						
					</div>


					
					<div class="col-sm-4">
								<button name="tambah" value="tambah" class="btn btn-info">Tambah</button>
								
							</div>

					<div class="table-responsive">
						<table class="table table-striped table-hover"  style="width: 100%;">
							<div class="text-left mb-4">

							
							
							</div>

								<thead>
									<?php
										include "../koneksi.php";
										$query = mysqli_query($koneksi,"SELECT * FROM tb_penempatan left join tb_barang on tb_penempatan.id_barang=tb_barang.id_barang left join tb_asal_barang on tb_barang.id_asal_barang = tb_asal_barang.id_asal_barang left join tb_lokasi on tb_penempatan.id_lokasi=tb_lokasi.id_lokasi");
									?>
									
									<tr>
									
									<th>Id Penempatan</th>
									<th>Nama Barang</th>
									<th>Asal Barang</th>									
									<th>Kondisi Awal Tahun</th>
									<th>Kondisi Akhir Tahun</th>
									<th>Nama Lokasi</th>
									<th>Aksi</th>
									</tr>

								</thead>

								<tbody>
									<?php
										while ($data = mysqli_fetch_array($query)) {
										
								
									?>
										<tr>
												<td><?php echo $data['id_penempatan']?></td>
												<td><?php echo ($data['nama_barang'])?></td>
												<td><?php echo ($data['asal_barang'])?></td>
												<td><?php echo ($data['kon_awal_tahun'])?></td>
												<td><?php echo ( $data['kon_akhir_tahun'])?></td>
												<td><?php echo ( $data['nama_lokasi'])?></td>
												<td>
													
													 <a href="dataPenempatan/hapusPenempatan.php?id_penempatan=<?php echo $data['id_penempatan'] ?>" class="btn btn-danger" onclick= "return confirm ('Mau dihapus??')">Hapus</a>
												</td>

										</tr>
								<?php
								}

								?>
										
								</tbody>

						</table>

						<a href="beranda.php?hal=dataPenempatan" class="btn btn-primary"  >Kembali</a>
						
					</div>
						
					</div>				
				</div>
		</form>

	</div>
</div>