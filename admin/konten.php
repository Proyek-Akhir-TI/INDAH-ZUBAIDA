<?php

	if ($_GET['hal']=='beranda'){
		include "beranda.php";
	}

	elseif($_GET['hal']=='dashboard'){
		include "dashboard.php";
	}
	elseif($_GET['hal']=='dataAsalBarang'){
		include "dataAsalBarang/dataAsalBarang.php";
	}
	elseif($_GET['hal']=='tambahAsalBarang'){
		include "dataAsalBarang/tambahAsalBarang.php";
	}
	elseif($_GET['hal']=='ubahAsalBarang'){
		include "dataAsalBarang/ubahAsalBarang.php";
	}
	elseif($_GET['hal']=='dataBarang'){
		include "dataBarang/dataBarang.php";
	}
	elseif($_GET['hal']=='tambahBarang'){
		include "dataBarang/tambahBarang.php";
	}
	elseif($_GET['hal']=='ubahBarang'){
		include "dataBarang/ubahBarang.php";
	}
	elseif($_GET['hal']=='dataLokasi'){
		include "dataLokasi/dataLokasi.php";
	}
	elseif($_GET['hal']=='tambahLokasi'){
		include "dataLokasi/tambahLokasi.php";
	}
	elseif($_GET['hal']=='ubahLokasi'){
		include "dataLokasi/ubahLokasi.php";
	}
	elseif($_GET['hal']=='dataPenempatan'){
		include "dataPenempatan/dataPenempatan.php";
	}
	elseif($_GET['hal']=='tambahPenempatan'){
		include "dataPenempatan/tambahPenempatan.php";
	}
	elseif($_GET['hal']=='detailPenempatan'){
		include "dataPenempatan/detailPenempatan.php";
	}
	elseif($_GET['hal']=='GantiPassword'){
		include "GantiPassword.php";
	}
	elseif($_GET['hal']=='dataLaporan'){
		include "Laporan/dataLaporan.php";
	}
	elseif($_GET['hal']=='dataLaporanBarangBaik'){
		include "Laporan/dataLaporanBarangBaik.php";
	}
	elseif($_GET['hal']=='dataLaporanBarangRusak'){
		include "Laporan/dataLaporanBarangRusak.php";
	}
	elseif($_GET['hal']=='dataLaporanBarangHilang'){
		include "Laporan/dataLaporanBarangHilang.php";
	}
	elseif($_GET['hal']=='filterLaporan'){
		include "Laporan/filterLaporan.php";
	}
	elseif($_GET['hal']=='hasilLaporan'){
		include "Laporan/hasilLaporan.php";
	}
	elseif($_GET['hal']=='dataMutasi'){
		include "dataMutasi/dataMutasi.php";
	}
	elseif($_GET['hal']=='tambahMutasi'){
		include "dataMutasi/tambahMutasi.php";
	}
	elseif($_GET['hal']=='tambahScrapBarang'){
		include "dataScrapBarang/tambahScrapBarang.php";
	}
	elseif($_GET['hal']=='dataScrapBarang'){
		include "dataScrapBarang/dataScrapBarang.php";
	}
	elseif($_GET['hal']=='dataLaporanBarangScrap'){
		include "Laporan/dataLaporanBarangScrap.php";
	}
?>