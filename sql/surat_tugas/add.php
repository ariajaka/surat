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
		$id_sk = $_POST['id_sk'];
		$kepala_st = $_POST['kepala_st'];
		$cmb_jenis_st = $_POST['cmb_jenis_st'];
		$tujuan_tugas = $_POST['tujuan_tugas'];
		$tempat_tugas = $_POST['tempat_tugas'];
		$kegiatan = $_POST['kegiatan'];
		$tanggal_surat_tugas = $_POST['tanggal_surat_tugas'];
		$cmbPetugas = $_POST['cmbPetugas'];
		$cmbpenandatangan = $_POST['cmbpenandatangan'];
		$status_sppd = $_POST['status_sppd'];		   	
					
		$sql="INSERT INTO surat_tugas SET id_sk='$id_sk', kepala_st='$kepala_st', jenis_sk='st', jenis_st='$cmb_jenis_st', tujuan_st='$tujuan_tugas', tempat_st='$tempat_tugas', kegiatan='$kegiatan', penandatangan='$cmbpenandatangan', tgl_st='$tanggal_surat_tugas',status='$status_sppd'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		$sql2="INSERT INTO surat_keluar SET id_sk='$id_sk', kepala_sk='$kepala_st', jenis='st', perihal='$kegiatan', tgl_sk='$tanggal_surat_tugas', tujuan='$tujuan_tugas', penandatangan_nip='$cmbpenandatangan'";
		$query2=mysql_query($sql2) or die(mysql_error().$sql2);

		$jlh = count($cmbPetugas); 
		for($i=0;$i<$jlh;$i++){
			$sql3="INSERT INTO detail_st SET id_sk='$id_sk', petugas_nip='$cmbPetugas[$i]'";
			$query3=mysql_query($sql3) or die(mysql_error());
		}
			$success ="Sukses membuat Surat Tugas baru";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=surat_tugas&act=add&s=1&msg='.$msg);		
	}	
?>