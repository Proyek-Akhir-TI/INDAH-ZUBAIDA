<?php
include "../koneksi.php";
// nomor otomatis
$query = "SELECT max(id_barang) as maxId FROM tb_barang";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$idBarang = $data['maxId'];
$noUrut = (int) substr($idBarang,3,3);
$noUrut ++ ;
$char = "DST";
$idBarang = $char . sprintf("%03s", $noUrut);






if($_SERVER['REQUEST_METHOD']=="POST"){
  include "../koneksi.php";
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $id_asal_barang = $_POST['id_asal_barang'];
    $jumlah = $_POST['jumlah'];
    $kon_awal_tahun = $_POST['kon_awal_tahun'];
    $kon_akhir_tahun = $_POST['kon_akhir_tahun'];
    $tahun_peroleh = $_POST['tahun_peroleh'];
      
     

    $simpan = mysqli_query($koneksi,"INSERT INTO tb_barang VALUES('$id_barang','$nama_barang','$id_asal_barang','$jumlah','$kon_awal_tahun','$kon_akhir_tahun','$tahun_peroleh')");

      echo "
        <script>
        window.alert('Data Barang Berhasil Ditambahkan !!')
        </script>
      ";


      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=dataBarang'>
      ";


}

?>




<div class="col-sm-8">
  <div class="card">
                  <form class="needs-validation" method="POST" novalidate="">
                    <div class="card-header">
                      <h4>Data Barang</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row" hidden>
                        <label class="col-sm-3 col-form-label">Id Barang</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_barang" value="<?php echo $idBarang ?>" readonly  >
                          <div class="invalid-feedback">
                            Id barang tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_barang" class="form-control" required="">
                          <div class="invalid-feedback">
                           nama barang tidak boleh kosong
                          </div>
                        </div>
                      </div>

                     
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Asal Barang</label>
                        <div class="col-sm-9">
                          <?php
                            include "../koneksi.php";
                            echo "<select class= 'form-control' name='id_asal_barang'> ";
                            $tampil = mysqli_query($koneksi,"SELECT * FROM tb_asal_barang");
                            while($data = mysqli_fetch_array($tampil)){
                              echo "<option value=$data[id_asal_barang]>$data[asal_barang] </option>";
                            }
                              echo "</select>";

                          ?>
                          
                          
                        </div>
                      </div>

                       
                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                          <input type="text" name="jumlah" class="form-control" required="">
                          <div class="invalid-feedback">
                           Jumlah tidak boleh kosong
                          </div>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">kondisi awal tahun</label>
                        <div class="col-sm-9">
                          <input type="text" name="kon_awal_tahun" class="form-control" required="">
                          <div class="invalid-feedback">
                           kondisi awal tahun tidak boleh kosong
                          </div>
                        </div>
                      </div>

                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi akhir tahun</label>
                        <div class="col-sm-9">
                          <input type="text" name="kon_akhir_tahun" class="form-control" required="">
                          <div class="invalid-feedback">
                           Kondisi akhir tahun tidak boleh kosong
                          </div>
                        </div>
                      </div>


                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun peroleh</label>
                        <div class="col-sm-9">
                          <input type="text" name="tahun_peroleh" class="form-control" required="">
                          <div class="invalid-feedback">
                           Tahun peroleh tidak boleh kosong
                          </div>
                        </div>
                      </div>




                      
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Simpan</button>



                <a href="beranda.php?hal=dataBarang" class="btn btn-primary" >Kembali</a>
                
              
                    </div>


                  </form>
                
  </div>
</div>