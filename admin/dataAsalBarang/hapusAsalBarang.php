<?php
	include "../../koneksi.php";

	$id_asal_barang = $_GET['id_asal_barang'];

	$hapus = mysqli_query($koneksi,"DELETE FROM tb_asal_barang where id_asal_barang = '$id_asal_barang'") or die(mysqli_error());

	echo "
		<meta http-equiv='refresh' content = '0 url=../beranda.php?hal=dataAsalBarang'>
	";

?>