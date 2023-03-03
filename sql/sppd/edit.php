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
		$id_sm = $_POST['id_sm'];
		$tanggal_catat_sm = $_POST['tanggal_catat_sm'];
		$nomor_surat = $_POST['nomor_surat'];
		$asal_surat = $_POST['asal_surat'];
		$tanggal_sm = $_POST['tanggal_sm'];
		$perihal = $_POST['perihal'];
							   	
					
		$sql="UPDATE surat_masuk SET id_sm='$id_sm', tgl_catat_sm='$tanggal_catat_sm', nomor_sm='$nomor_surat', alamat_sm='$asal_surat', tgl_sm='$tanggal_sm', perihal='$perihal' WHERE id_sm ='$id'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		
			$success ="Sukses memgubah surat masuk";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=surat_masuk&act=view&s=1&msg='.$msg);
		
	}	
?>