<?php
	include "../../koneksi.php";

	$id_barang = $_GET['id_barang'];

	$hapus = mysqli_query($koneksi,"DELETE FROM tb_barang where id_barang = '$id_barang'") or die(mysqli_error());

	echo "
		<meta http-equiv='refresh' content = '0 url=../beranda.php?hal=dataBarang'>
	";

?>