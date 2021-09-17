<?php
include "../koneksi.php";
// nomor otomatis

$id_barang = $_GET['id_barang'];

if($_SERVER['REQUEST_METHOD']=="POST"){
  include "../koneksi.php";
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $id_asal_barang = $_POST['id_asal_barang'];
    $jumlah = $_POST['jumlah'];
    $kon_awal_tahun= $_POST['kon_awal_tahun'];
    $kon_akhir_tahun = $_POST['kon_akhir_tahun'];
    $tahun_peroleh = $_POST['tahun_peroleh'];
      
    

    $simpan = mysqli_query($koneksi,"UPDATE tb_barang SET nama_barang='$nama_barang', id_asal_barang='$id_asal_barang', jumlah='$jumlah', kon_awal_tahun='$kon_awal_tahun', kon_akhir_tahun = '$kon_akhir_tahun', tahun_peroleh='$tahun_peroleh' where id_barang = '$id_barang'");

      echo "
        <script>
        window.alert('Data Barang Berhasil Diubah !!')
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

                    <?php
                      $qubah = mysqli_query($koneksi,"SELECT * FROM tb_barang where id_barang = '$id_barang'");
                      while($data = mysqli_fetch_array($qubah)){

                    ?>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Id Barang</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_barang" value="<?php echo $data['id_barang'] ?>" >
                          <div class="invalid-feedback">
                            Id  barang tidak boleh kosong?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>" class="form-control" required="">
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
                            while($x = mysqli_fetch_array($tampil)){
                              if($data['id_asal_barang']==$x['id_asal_barang']){
                              echo "<option value='$data[id_asal_barang]' selected>$x[asal_barang] </option>";

                            } else {
                                   echo "<option value='$data[id_asal_barang]' >$x[asal_barang] </option>";
                            }

                            }
                              echo "</select>";

                          ?>
                          

                          
                        </div>
                      </div>

                        
                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                          <input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                           Jumlah tidak boleh kosong
                          </div>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi awal tahun</label>
                        <div class="col-sm-9">
                          <input type="text" name="kon_awal_tahun" value="<?php echo $data['kon_awal_tahun'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                          Kondisi awal tahun tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      

                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kondisi akhir tahun</label>
                        <div class="col-sm-9">
                          <input type="text" name="kon_akhir_tahun" value="<?php echo $data['kon_akhir_tahun'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                           Kondisi akhir tahun tidak boleh kosong
                          </div>
                        </div>
                      </div>
                      

                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun peoleh</label>
                        <div class="col-sm-9">
                          <input type="text" name="tahun_peroleh" value="<?php echo $data['tahun_peroleh'] ?>" class="form-control" required="">
                          <div class="invalid-feedback">
                           Tahun peoleh tidak boleh kosong
                          </div>
                        </div>
                      </div>



                      
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" id="swal-2">Ubah</button>
                      <a href="beranda.php?hal=dataBarang" class="btn btn-primary" >Kembali</a>

                    </div>




                  </form>

                  <?php
                }
                ?>
                
  </div>
</div>