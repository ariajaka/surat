<?php 
include('../../config/config.php');
	//Untuk mengecek apakah ini proses simpan atau update
	if(isset($_POST['save'])){
		// if ($_POST['cmbDasar'] == '' or $_POST['cmbPetugas'] == '' or $_POST['surat_undangan'] =='') {
		// 	$success ="Gagal, Mohon isi Dasar/Undangan dan Petugas";
		// 	$msg = base64_encode($success);
		// 	header('location:../../index.php?mod=surattugas&act=add&s=0&msg='.$msg);			
		// }else{
			//mengmbil variabel yang dikirim oleh formulir
		$id = $_POST['id'];
		$id_sk = $_POST['id_sk'];
		$kepala_sk = $_POST['kepala_sk'];
		$perihal = $_POST['perihal'];
		$tujuan = $_POST['tujuan'];
		$tanggal_surat_keluar = $_POST['tanggal_surat_keluar'];
		$cmbpenandatangan = $_POST['cmbpenandatangan']; 	
					
		$sql="UPDATE surat_keluar SET id_sk='$id_sk', kepala_sk='$kepala_sk', perihal='$perihal', tujuan='$tujuan', tgl_sk='$tanggal_surat_keluar', penandatangan_nip='$cmbpenandatangan' WHERE id_sk ='$id'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		
			$success ="Sukses memgubah surat keluar";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=surat_keluar&act=view&s=1&msg='.$msg);
		
	}	
?>