<?php 
	$sql = "SELECT * FROM surat_keluar where jenis='umum' ORDER BY id_sk DESC";
	$surat_keluar= mysql_query($sql);
?>