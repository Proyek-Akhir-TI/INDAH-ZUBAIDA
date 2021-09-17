<?php
if (!$_SESSION['id_user']) {
    echo "
        <meta http-equiv='refresh' content ='0; url=../index.html'>
      ";
} else {
?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Laporan</h4>
                </div>

                <div class="card-body">


                    <form action="beranda.php?hal=hasilLaporan" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kondisi</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='kon_akhir_tahun'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct kon_akhir_tahun from tb_barang");
                                echo "<option value=''>--PILIH-- </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value=$data[kon_akhir_tahun]>$data[kon_akhir_tahun] </option>";
                                }

                                echo "</select>";

                                ?>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='nama_barang'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct nama_barang from tb_barang");
                                echo "<option value=''>--PILIH-- </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value='$data[nama_barang]'>$data[nama_barang] </option>";
                                }

                                echo "</select>";

                                ?>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tahun Peroleh</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='tahun_peroleh'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct tahun_peroleh from tb_barang");
                                echo "<option value=''>--PILIH-- </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value=$data[tahun_peroleh]>$data[tahun_peroleh] </option>";
                                }

                                echo "</select>";

                                ?>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Asal Barang</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='asal_barang'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct asal_barang from tb_asal_barang");
                                echo "<option value=''>--PILIH-- </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value='$data[asal_barang]'>$data[asal_barang] </option>";
                                }

                                echo "</select>";


                                ?>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ruangan</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='nama_lokasi'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct nama_lokasi from tb_lokasi");
                                echo "<option value=''>--PILIH--  </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value=$data[nama_lokasi]>$data[nama_lokasi] </option>";
                                }

                                echo "</select>";

                                ?>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mutasi</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='lokasi_lama'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct lokasi_lama from tb_mutasi");
                                echo "<option value=''>--PILIH--  </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value=$data[lokasi_lama]>$data[lokasi_lama] </option>";
                                }

                                echo "</select>";

                                ?>




                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Penempatan</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='tanggal_penempatan'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct tanggal_penempatan from tb_penempatan");
                                echo "<option value=''>--PILIH-- </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value=$data[tanggal_penempatan]>$data[tanggal_penempatan] </option>";
                                }

                                echo "</select>";

                                ?>




                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Penghapusan</label>
                            <div class="col-sm-3">
                                <?php
                                include "../koneksi.php";
                                echo "<select class= 'form-control' name='tanggal_scrap'> ";
                                $tampil = mysqli_query($koneksi, "SELECT distinct tanggal_scrap from tb_scrap_barang");
                                echo "<option value=''>--PILIH-- </option>";
                                while ($data = mysqli_fetch_array($tampil)) {

                                    echo "<option value=$data[tanggal_scrap]>$data[tanggal_scrap] </option>";
                                }

                                echo "</select>";

                                ?>




                            </div>
                        </div>


                        <div class="col-sm-3">
                            <button class="btn btn-primary" name="submit" type="submit">Cari</button>

                        </div>
                </div>

                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport" style="width: 100%;">



                    </table>

                </div>

            </div>


        </div>
    </div>
    </div>

<?php
}
?>