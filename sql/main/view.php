<?php 
/*cek data user*/
$surat_keluar_umum = "SELECT count(*) FROM surat_keluar WHERE jenis ='umum'";
$surat_keluar_umum_sql = mysql_query($surat_keluar_umum);
$data_surat_keluar_umum = mysql_fetch_array($surat_keluar_umum_sql);
$jml_surat_keluar_umum = $data_surat_keluar_umum[0];
/*cek data user*/
 ?>

<?php 
/*cek data user*/
$surat_masuk = "SELECT count(*) FROM surat_masuk";
$surat_masuk_sql = mysql_query($surat_masuk);
$data_surat_masuk = mysql_fetch_array($surat_masuk_sql);
$jml_surat_masuk = $data_surat_masuk[0];
/*cek data user*/
 ?>

 <?php 
/*cek data user*/
$disposisi = "SELECT count(*) FROM disposisi";
$disposisi_sql = mysql_query($disposisi);
$data_disposisi = mysql_fetch_array($disposisi_sql);
$jml_disposisi = $data_disposisi[0];
/*cek data user*/
 ?>

 <?php 
/*cek data user*/
$surat_tugas = "SELECT count(*) FROM surat_tugas";
$surat_tugas_sql = mysql_query($surat_tugas);
$data_surat_tugas = mysql_fetch_array($surat_tugas_sql);
$jml_surat_tugas = $data_surat_tugas[0];
/*cek data user*/
 ?>