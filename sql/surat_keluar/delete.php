<?php 
include('../../config/config.php');
$id_sk = $_GET['id'];

echo $id_sk;

$delete = mysql_query("DELETE FROM surat_keluar WHERE id_sk = '$id_sk'");

if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus Surat Keluar");
	header('location:../../index.php?mod=surat_keluar&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Surat Keluar");
	header('location:../../index.php?mod=surat_keluar&s=0&msg='.$msg);
}
?>