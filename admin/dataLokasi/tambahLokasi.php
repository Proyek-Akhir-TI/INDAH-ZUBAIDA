<?php
include "../koneksi.php";
// nomor otomatis
$query = "SELECT max(id_lokasi) as maxId FROM tb_lokasi";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$idLokasi = $data['maxId'];
$noUrut = (int) substr($idLokasi,3,3);
$noUrut ++ ;
$char = "LOK";
$idLokasi = $char . sprintf("%03s", $noUrut);






if($_SERVER['REQUEST_METHOD']=="POST"){
  include "../koneksi.php";
    $id_lokasi = $_POST['id_lokasi'];
    $nama_lokasi = $_POST['nama_lokasi'];

    $simpan = mysqli_query($koneksi,"INSERT INTO tb_lokasi VALUES('$id_lokasi','$nama_lokasi')");

      echo "
        <script>
        window.alert('Data Lokasi Berhasil Ditambahkan !!')
        </script>
      ";


      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=dataLokasi'>
      ";


}

?>




<div class="col-sm-8">
  <div class="card">
                  <form class="needs-validation" method="POST" novalidate="">
                    <div class="card-header">
                      <h4>Data Lokasi</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row" hidden>
                        <label class="col-sm-3 col-form-label">ID Lokasi</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_lokasi" value="<?php echo $idLokasi ?>" required="">
                          <div class="invalid-feedback">
                            ID tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Lokasi</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_lokasi" class="form-control" required="">
                          <div class="invalid-feedback">
                           nama lokasi tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Simpan</button>
                      <a href="beranda.php?hal=dataLokasi" class="btn btn-primary" >Kembali</a>
                

                    </div>




                  </form>
                
  </div>
</div>