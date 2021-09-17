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
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width: 100%;">


                            <thead>
                                <?php
                                include "../koneksi.php";

                                $kondisi = $_POST['kon_akhir_tahun'];
                                $nama_barang = $_POST['nama_barang'];
                                $tahun_peroleh = $_POST['tahun_peroleh'];
                                $asal_barang = $_POST['asal_barang'];
                                $nama_lokasi = $_POST['nama_lokasi'];
                                $lokasi_lama = $_POST['lokasi_lama'];
                                $tanggal_penempatan = $_POST['tanggal_penempatan'];
                                $tanggal_scrap = $_POST['tanggal_scrap'];


                                if (!empty($kondisi)) {
                                    $where_kondisi = "(kon_akhir_tahun = '$kondisi')";
                                } else {
                                    $where_kondisi = 1;
                                }
                                if (!empty($nama_barang)) {
                                    $where_nama_barang = "(nama_barang = '$nama_barang')";
                                } else {
                                    $where_nama_barang = 1;
                                }
                                if (!empty($tahun_peroleh)) {
                                    $where_tahun_peroleh = "(tahun_peroleh = '$tahun_peroleh')";
                                } else {
                                    $where_tahun_peroleh = 1;
                                }
                                if (!empty($asal_barang)) {
                                    $where_asal_barang = "(asal_barang = '$asal_barang')";
                                } else {
                                    $where_asal_barang = 1;
                                }
                                if (!empty($nama_lokasi)) {
                                    $where_nama_lokasi = "(nama_lokasi = '$nama_lokasi')";
                                } else {
                                    $where_nama_lokasi = 1;
                                }
                                if (!empty($lokasi_lama)) {
                                    $where_lokasi_lama = "(tb_mutasi.lokasi_lama = '$lokasi_lama')";
                                } else {
                                    $where_lokasi_lama = 1;
                                }
                                if (!empty($tanggal_penempatan)) {
                                    $where_tanggal_penempatan = "(tanggal_penempatan = '$tanggal_penempatan')";
                                } else {
                                    $where_tanggal_penempatan = 1;
                                }
                                if (!empty($tanggal_scrap)) {
                                    $where_tanggal_scrap = "(tb_scrap_barang.tanggal_scrap = '$tanggal_scrap')";
                                } else {
                                    $where_tanggal_scrap = 1;
                                }


                                $query = "SELECT tb_penempatan.id_penempatan, nama_barang, tahun_peroleh, kon_akhir_tahun, asal_barang, nama_lokasi, tb_mutasi.lokasi_lama,tanggal_penempatan, tb_scrap_barang.tanggal_scrap from tb_penempatan left join tb_barang on tb_penempatan.id_barang = tb_barang.id_barang left join tb_asal_barang on tb_barang.id_asal_barang = tb_asal_barang.id_asal_barang left join tb_lokasi on tb_penempatan.id_lokasi=tb_lokasi.id_lokasi left join tb_mutasi on tb_penempatan.id_penempatan = tb_mutasi.id_penempatan left join tb_scrap_barang on tb_penempatan.id_penempatan=tb_scrap_barang.id_penempatan where $where_kondisi AND $where_nama_barang AND $where_tahun_peroleh AND $where_asal_barang AND $where_nama_lokasi AND $where_lokasi_lama AND $where_tanggal_penempatan AND $where_tanggal_scrap";


                                $ab = mysqli_query($koneksi, $query);

                                ?>

                                <tr>
                                    <th>ID Penempatan</th>
                                    <th>Nama Barang</th>
                                    <th>Tahun Peroleh </th>
                                    <th>Kondisi</th>
                                    <th>asal barang</th>
                                    <th>Ruangan</th>
                                    <th>Mutasi</th>
                                    <th>tanggal penempatan</th>
                                    <th>Tanggal Penghapusan</th>
                                </tr>

                            </thead>

                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_array($ab)) {


                                ?>
                                    <tr>
                                        <td><?php echo $data['id_penempatan'] ?></td>
                                        <td><?php echo $data['nama_barang'] ?></td>
                                        </td>
                                        <td><?php echo $data['tahun_peroleh'] ?></td>
                                        <td><?php echo $data['kon_akhir_tahun'] ?></td>
                                        <td><?php echo $data['asal_barang'] ?></td>
                                        <td><?php echo $data['nama_lokasi'] ?></td>
                                        <td><?php echo $data['lokasi_lama'] ?></td>
                                        <td><?php echo $data['tanggal_penempatan'] ?></td>
                                        <td><?php echo $data['tanggal_scrap'] ?></td>


                                    </tr>
                                <?php
                                }

                                ?>

                            </tbody>


                        </table>

                    </div>

                </div>


            </div>
        </div>
    </div>

<?php
}
?>