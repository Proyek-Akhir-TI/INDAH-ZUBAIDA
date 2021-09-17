<?php
	include "../koneksi.php";



$query = "SELECT max(id_asal_barang) as maxId FROM tb_asal_barang";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$idAsalBarang = $data['maxId'];
$noUrut = (int) substr($idAsalBarang,3,3);
$noUrut ++;
$char = "AB";
$idAsalBarang = $char . sprintf("%03s" , $noUrut);




if ($_SERVER['REQUEST_METHOD']=="POST") {
	include "../koneksi.php";
	$id_asal_barang = $_POST['id_asal_barang'];
	$asal_barang = $_POST['asal_barang'];


	$Simpan = mysqli_query($koneksi,"INSERT INTO tb_asal_barang VALUES ('$id_asal_barang','$asal_barang')");

	echo "
        <script>
        window.alert('Data Asal Barang Berhasil di Tambah !!')
        </script>
      ";


      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=dataAsalBarang'>
      ";
}


?>

<div class="col-sm-8">
  <div class="card">
                  <form class="needs-validation" method="POST" novalidate="">
                    <div class="card-header">
                      <h4>Data Asal Barang</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row" hidden>
                        <label class="col-sm-3 col-form-label">Id Asal Barang</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_asal_barang" value="<?php echo $idAsalBarang ?>" required="">
                          <div class="invalid-feedback">
                            id tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Asal Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="asal_barang" class="form-control" required="">
                          <div class="invalid-feedback">
                           Asal Barang tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Simpan</button>
                      <a href="beranda.php?hal=dataAsalBarang" class="btn btn-primary" >Kembali</a>
                
								
							</div>

						</div>

				</form>
		</div>
</div>