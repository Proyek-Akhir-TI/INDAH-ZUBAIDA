<?php
	include "../../koneksi.php";

	$id_lokasi = $_GET['id_lokasi'];

	$hapus = mysqli_query($koneksi,"DELETE FROM tb_lokasi where id_lokasi = '$id_lokasi'") or die(mysqli_error());

	echo "
		<meta http-equiv='refresh' content = '0 url=../beranda.php?hal=dataLokasi'>
	";

?>