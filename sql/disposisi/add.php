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
		$id_disposisi = $_POST['id_disposisi'];
		$cmbnosurat = $_POST['cmbnosurat'];
		$tanggal_disposisi = $_POST['tanggal_disposisi'];
		$cmbditeruskan = $_POST['cmbditeruskan'];
		$pejabat_lain = $_POST['pejabat_lain'];
		$cmbpegawaipenerima = $_POST['cmbpegawaipenerima'];
		$cmbket_disposisi = $_POST['cmbket_disposisi'];
		$ket_dispo_lain = $_POST['ket_dispo_lain'];
		$catatan = $_POST['catatan'];
		$cmbpembuat_disposisi = $_POST['cmbpembuat_disposisi'];

		$sql="INSERT INTO disposisi SET id_disposisi='$id_disposisi', id_sm='$cmbnosurat', tgl_disposisi='$tanggal_disposisi', catatan='$catatan', disposisi_nip='$cmbpembuat_disposisi'";
		$query=mysql_query($sql) or die(mysql_error().$sql);
		
		$sql="UPDATE surat_masuk SET status='Sudah di Disposisi' WHERE id_sm ='$cmbnosurat'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		$jlh1 = count($cmbditeruskan); 
		for($i=0;$i<$jlh1;$i++){
			$sql="INSERT INTO detail_disposisi_diteruskan_pada SET id_disposisi='$id_disposisi', diteruskan_pada='$cmbditeruskan[$i]'";
			$query=mysql_query($sql) or die(mysql_error());
		}
		$jlh2 = count($pejabat_lain); 
		for($i=0;$i<$jlh2;$i++){
			$sql="INSERT INTO detail_disposisi_diteruskan_pada SET id_disposisi='$id_disposisi', diteruskan_pada='$pejabat_lain[$i]'";
			$query=mysql_query($sql) or die(mysql_error());
		}
		$jlh3 = count($cmbpegawaipenerima); 
		for($i=0;$i<$jlh3;$i++){
			$sql="INSERT INTO detail_disposisi_pegawai_penerima SET id_disposisi='$id_disposisi', nip_penerima='$cmbpegawaipenerima[$i]'";
			$query=mysql_query($sql) or die(mysql_error());
		}
		$jlh4 = count($cmbket_disposisi); 
		for($i=0;$i<$jlh4;$i++){
			$sql="INSERT INTO detail_disposisi_keterangan_disposisi SET id_disposisi='$id_disposisi', keterangan_disposisi='$cmbket_disposisi[$i]'";
			$query=mysql_query($sql) or die(mysql_error());
		}
		$jlh5 = count($ket_dispo_lain); 
		for($i=0;$i<$jlh5;$i++){
			$sql="INSERT INTO detail_disposisi_keterangan_disposisi SET id_disposisi='$id_disposisi', keterangan_disposisi='$ket_dispo_lain[$i]'";
			$query=mysql_query($sql) or die(mysql_error());
		}

			$success ="Sukses membuat Disposisi baru";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=disposisi&act=add&s=1&msg='.$msg);
	}	
?>