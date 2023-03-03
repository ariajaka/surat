<?php 
include('../../config/config.php');
$id_sm = $_GET['id'];

echo $id_sm;

$delete = mysql_query("DELETE FROM surat_masuk WHERE id_sm = '$id_sm'");

if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus Surat Masuk");
	header('location:../../index.php?mod=surat_masuk&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Surat Masuk");
	header('location:../../index.php?mod=surat_masuk&s=0&msg='.$msg);
}
?>