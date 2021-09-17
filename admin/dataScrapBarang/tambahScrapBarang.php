<?php
include "../koneksi.php";
// nomor otomatis
$query = "SELECT max(id_scrap) as maxId FROM tb_scrap_barang";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$idScrap = $data['maxId'];
$noUrut = (int) substr($idScrap,3,3);
$noUrut ++ ;
$char = "SCR";
$idScrap = $char . sprintf("%03s", $noUrut);

$tanggalSekarang = date("Y-m-d");

$id_penempatan = $_GET['id_penempatan'];





if($_SERVER['REQUEST_METHOD']=="POST"){
  include "../koneksi.php";
    $id_scrap = $_POST['id_scrap'];
    $id_penempatan = $_POST['id_penempatan'];
    $jumlah_barang = 1;
    $status = $_POST['status'];
    $id_barang = $_POST['id_barang'];

    

   $simpan = mysqli_query($koneksi,"INSERT INTO tb_scrap_barang VALUES('$id_scrap','$id_penempatan','$tanggalSekarang','$jumlah_barang','$status','$_SESSION[id_user]')");

   $ubahStatus = mysqli_query($koneksi,"UPDATE tb_barang SET kon_akhir_tahun = 'Scrap' where id_barang = '$id_barang'");

   

      echo "
        <script>
        window.alert('Scrap Barang Berhasil Dibuat !!')
        </script>
      ";


      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=dataScrapBarang'>
      ";


}

?>






<div class="col-sm-8">
  <div class="card">
                  <form class="needs-validation" method="POST" novalidate="">
                    <div class="card-header">
                      <h4>Scrap Barang</h4>
                    </div>

                    <?php
                      $queryubah = mysqli_query($koneksi,"SELECT * FROM tb_penempatan left join tb_barang ON tb_penempatan.id_barang = tb_barang.id_barang where id_penempatan = '$id_penempatan'");
                      while($data = mysqli_fetch_array($queryubah)){

                    ?>
                     <div class="card-body">
                      <div class="form-group row" hidden>
                        <label class="col-sm-3 col-form-label">Id Scrap</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_scrap" value="<?php echo $idScrap ?>" readonly="">
                          <div class="invalid-feedback">
                            id tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Id Penempatan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_penempatan" value="<?php echo $data['id_penempatan'] ?>" readonly="">
                          <div class="invalid-feedback">
                            id tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row" hidden="">
                        <label class="col-sm-3 col-form-label">Id Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="id_barang" value="<?php echo $data['id_barang'] ?>" class="form-control" readonly="">
                          <div class="invalid-feedback">
                           Id tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" class="form-control" readonly="">
                          <div class="invalid-feedback">
                           nama Barang tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      
                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Status Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="status" class="form-control" required="">
                          <div class="invalid-feedback">
                           Status barang tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      
                   <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Scrap</button>

                    </div>



        </form>

        <?php
      }
      ?>


    </div>
</div>