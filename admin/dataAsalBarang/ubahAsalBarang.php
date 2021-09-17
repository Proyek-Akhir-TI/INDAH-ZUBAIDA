<?php
include "../koneksi.php";

$id_asal_barang = $_GET['id_asal_barang'];




if($_SERVER['REQUEST_METHOD']=="POST"){
  include "../koneksi.php";
    $id_asal_barang = $_POST['id_asal_barang'];
    $asal_barang = $_POST['asal_barang'];

    $simpan = mysqli_query($koneksi,"UPDATE tb_asal_barang SET asal_barang = '$asal_barang' where id_asal_barang = '$id_asal_barang'");

      echo "
        <script>
        window.alert('Data Asal Barang Berhasil Diubah !!')
        </script>
      ";


      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=dataAsalBarang '>
      ";


}

?>






<div class="col-sm-8">
  <div class="card">
                  <form class="needs-validation" method="POST" novalidate="">
                    <div class="card-header">
                      <h4>Data Asal Barang</h4>
                    </div>

                    <?php
                      $queryubah = mysqli_query($koneksi,"SELECT * FROM tb_asal_barang where id_asal_barang= '$id_asal_barang'");
                      while($data = mysqli_fetch_array($queryubah)){

                    ?>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Id Asal Barang</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_asal_barang" value="<?php echo $data['id_asal_barang'] ?>" readonly="">
                          <div class="invalid-feedback">
                            id tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Asal Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="asal_barang" value="<?php echo $data['asal_barang'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                           Asal Barang tidak boleh kosong
                          </div>
                        </div>
                      </div>

                      
                      
                   <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Ubah</button>
                      <a href="beranda.php?hal=dataAsalBarang" class="btn btn-primary" >Kembali</a>

                    </div>



        </form>

        <?php
      }
      ?>


    </div>
</div>