<?php
include "../koneksi.php";

$id_lokasi = $_GET['id_lokasi'];




if($_SERVER['REQUEST_METHOD']=="POST"){
  include "../koneksi.php";
    $id_lokasi = $_POST['id_lokasi'];
    $nama_lokasi = $_POST['nama_lokasi'];

    $simpan = mysqli_query($koneksi,"UPDATE tb_lokasi SET nama_lokasi = '$nama_lokasi' where id_lokasi = '$id_lokasi'");

      echo "
        <script>
        window.alert('Data Lokasi Berhasil Diubah !!')
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

                  <?php
                    $lk = mysqli_query($koneksi,"SELECT * FROM tb_lokasi where id_lokasi = '$id_lokasi'");
                    while($data=mysqli_fetch_array($lk)){

                    

                  ?>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Id Lokasi</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_lokasi" value="<?php echo $data['id_lokasi'] ?>" readonly>
                          <div class="invalid-feedback">
                            Id tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Lokasi</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_lokasi" value="<?php echo $data['nama_lokasi'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                           nama lokasi tidak boleh kosong
                          </div>
                        </div>
                      </div>

                    <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Ubah</button>
                      <a href="beranda.php?hal=dataLokasi" class="btn btn-primary" >Kembali</a>

                    </div>




                  </form>

                  <?php
                }
                  ?>
                
  </div>
</div>