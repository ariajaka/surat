<?php 
include('../../config/config.php');
$id_disposisi= $_GET['id'];
$idsm= $_GET['idsm'];

echo $id_disposisi;
echo $idsm;

$update = mysql_query("UPDATE surat_masuk set status='Belum di Disposisi' WHERE id_sm = '$idsm'");
$delete = mysql_query("DELETE FROM disposisi WHERE id_disposisi = '$id_disposisi'");

$delete = mysql_query("DELETE FROM detail_disposisi_sifat_surat WHERE id_disposisi = '$id_disposisi'");
$delete = mysql_query("DELETE FROM detail_disposisi_diteruskan_pada WHERE id_disposisi = '$id_disposisi'");
$delete = mysql_query("DELETE FROM detail_disposisi_pegawai_penerima WHERE id_disposisi = '$id_disposisi'");
$delete = mysql_query("DELETE FROM detail_disposisi_keterangan_disposisi WHERE id_disposisi = '$id_disposisi'");


if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus Disposisi");
	header('location:../../index.php?mod=disposisi&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Disposisi");
	header('location:../../index.php?mod=disposisi&s=0&msg='.$msg);
}
?>