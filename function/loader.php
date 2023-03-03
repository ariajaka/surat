<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];

		if ($mod == 'user') {
			include ('view/main-user.php');
		}
		else if ($mod == 'pegawai') {
			include ('view/main-pegawai.php');
		}
		else if ($mod == 'surat_masuk') {
			include ('view/main-surat_masuk.php');
		}
		else if ($mod == 'disposisi') {
			include ('view/main-disposisi.php');
		}
		else if ($mod == 'surat_keluar') {
			include ('view/main-surat_keluar.php');
		}
		else if ($mod == 'surat_tugas') {
			include ('view/main-surat_tugas.php');
		}
		else if ($mod == 'sppd') {
			include ('view/main-sppd.php');
		}
		else if ($mod == 'laporan_surat_masuk') {
			include ('view/main-laporan_surat_masuk.php');
		}
		else if ($mod == 'laporan_surat_keluar') {
			include ('view/main-laporan_surat_keluar.php');
		}
	}else{
		include ('view/main-content.php');
	}
 ?>