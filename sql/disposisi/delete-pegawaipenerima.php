<?php 
include('../../config/config.php');
if(isset($_GET['id']) AND $_GET['pegawaipenerima']){
	$idcall= $_GET['id'];
	$pegawaipenerimacall= $_GET['pegawaipenerima'];
	// Hapus data sesuai Kode yang didapat di URL
		
	$sql="DELETE FROM detail_disposisi_pegawai_penerima where id_disposisi='$idcall' AND nip_penerima='$pegawaipenerimacall' LIMIT 1";
	$query=mysql_query($sql);
		
	if($query){
	// Refresh halaman
		header('location:../../index.php?mod=disposisi&act=edit&id='.$idcall);
		// echo "<meta http-equiv='refresh' content='0; url=index.php?mod=surattugas&act=edit&id=$idcall'>" ;
		}
	}else{
	// Jika tidak ada data Kode ditemukan di URL
	echo "<b>Data yang dihapus tidak ada</b>";
	}
 ?>