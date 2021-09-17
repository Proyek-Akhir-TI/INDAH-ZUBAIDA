<?php
include "../koneksi.php";
// nomor otomatis
$query = "SELECT max(id_mutasi) as maxId FROM tb_mutasi";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$idMutasi = $data['maxId'];
$noUrut = (int) substr($idMutasi,3,3);
$noUrut ++ ;
$char = "MUT";
$idMutasi = $char . sprintf("%03s", $noUrut);

$tanggalSekarang = date("Y-m-d");

$id_penempatan = $_GET['id_penempatan'];




if($_SERVER['REQUEST_METHOD']=="POST"){
  include "../koneksi.php";
    $id_mutasi = $_POST['id_mutasi'];
    $id_penempatan = $_POST['id_penempatan'];
    $lokasi_lama = $_POST['lokasi_lama'];
    $lokasi_baru = $_POST['lokasi_baru'];
    $jumlah_barang = 1;

    

   $simpan = mysqli_query($koneksi,"INSERT INTO tb_mutasi VALUES('$id_mutasi','$id_penempatan','$tanggalSekarang','$lokasi_lama','$jumlah_barang','$_SESSION[id_user]')");

   $ubahTempat = mysqli_query($koneksi,"UPDATE tb_penempatan SET id_lokasi = '$lokasi_baru' where id_penempatan='$id_penempatan'");

      echo "
        <script>
        window.alert('Mutasi Barang Berhasil Diubah !!')
        </script>
      ";


      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=dataMutasi'>
      ";


}

?>






<div class="col-sm-8">
  <div class="card">
                  <form class="needs-validation" method="POST" novalidate="">
                    <div class="card-header">
                      <h4>Mutasi Barang</h4>
                    </div>

                    <?php
                      $queryubah = mysqli_query($koneksi,"SELECT * FROM tb_penempatan left join tb_barang on tb_penempatan.id_barang = tb_barang.id_barang left join tb_lokasi ON tb_penempatan.id_lokasi=tb_lokasi.id_lokasi where id_penempatan= '$id_penempatan'");
                      while($data = mysqli_fetch_array($queryubah)){

                    ?>
                     <div class="card-body">
                      <div class="form-group row" hidden>
                        <label class="col-sm-3 col-form-label">Id Mutasi</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_mutasi" value="<?php echo $idMutasi ?>" readonly="">
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
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" class="form-control" readonly="">
                          <div class="invalid-feedback">
                           nama kategori tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lokasi Lama</label>
                        <div class="col-sm-9">
                          <input type="text" name="lokasi_lama" value="<?php echo $data['nama_lokasi'] ?>" class="form-control" readonly="">
                          <div class="invalid-feedback">
                           nama Lokasi tidak boleh kosong
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Lokasi Baru</label>
                        <div class="col-sm-9">
                          <?php
                            include "../koneksi.php";
                            echo "<select class= 'form-control' name='lokasi_baru'> ";
                            $tampil = mysqli_query($koneksi,"SELECT * FROM tb_lokasi");
                            while($data = mysqli_fetch_array($tampil)){
                              echo "<option value=$data[id_lokasi]>$data[nama_lokasi] </option>";
                            }
                              echo "</select>";

                          ?>
                          
                          
                        </div>
                      </div>

                     

                      
                      
                   <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Mutasi</button>

                    </div>



        </form>

        <?php
      }
      ?>


    </div>
</div>