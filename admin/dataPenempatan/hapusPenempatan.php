<?php
	include "../../koneksi.php";

	$id_penempatan = $_GET['id_penempatan'];

	$hapus = mysqli_query($koneksi,"DELETE FROM tb_penempatan where id_penempatan = '$id_penempatan'") or die(mysqli_error());

	echo "
		<meta http-equiv='refresh' content = '0 url=../beranda.php?hal=tambahPenempatan'>
	";

?>