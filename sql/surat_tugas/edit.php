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
		$kepala_st = $_POST['kepala_st'];
		$cmb_jenis_st = $_POST['cmb_jenis_st'];
		$tujuan_tugas = $_POST['tujuan_tugas'];
		$tempat_tugas = $_POST['tempat_tugas'];
		$kegiatan = $_POST['kegiatan'];
		$tanggal_surat_tugas = $_POST['tanggal_surat_tugas'];
		$status_sppd = $_POST['status_sppd'];
		$cmbpenandatangan= $_POST['cmbpenandatangan'];		
		
		if ($status_sppd !== 'sudah_sppd'){
		$sql="UPDATE surat_tugas SET id_sk='$id_sk', kepala_st='$kepala_st', jenis_st='$cmb_jenis_st', tujuan_st='$tujuan_tugas', tempat_st='$tempat_tugas', kegiatan='$kegiatan', tgl_st='$tanggal_surat_tugas', penandatangan='$cmbpenandatangan', status='$status_sppd' WHERE id_sk ='$id'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		$sql1="UPDATE surat_keluar SET id_sk='$id_sk', kepala_sk='$kepala_st', tujuan='$tujuan_tugas', perihal='$kegiatan', tgl_sk='$tanggal_surat_tugas', penandatangan_nip='$cmbpenandatangan' WHERE id_sk ='$id'";
		$query1=mysql_query($sql) or die(mysql_error().$sql1);
		}
		elseif ($status_sppd == 'sudah_sppd'){
		$sql="UPDATE surat_tugas SET id_sk='$id_sk', kepala_st='$kepala_st', jenis_st='$cmb_jenis_st', tujuan_st='$tujuan_tugas', tempat_st='$tempat_tugas', kegiatan='$kegiatan', tgl_st='$tanggal_surat_tugas', penandatangan='$cmbpenandatangan', status='belum_sppd' WHERE id_sk ='$id'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		$sql1="UPDATE surat_keluar SET id_sk='$id_sk', kepala_sk='$kepala_st', tujuan='$tujuan_tugas', perihal='$kegiatan', tgl_sk='$tanggal_surat_tugas', penandatangan_nip='$cmbpenandatangan' WHERE id_sk ='$id'";
		$query1=mysql_query($sql1) or die(mysql_error().$sql1);	

		$sql3="DELETE from detail_st_sppd WHERE id_sk ='$id'";
		$query3=mysql_query($sql3) or die(mysql_error().$sql3);	

		}

		if($_POST['cmbPetugas'] == ''){
            //Lakukan Select Nantinya
            //Sementara
            $cmbPetugas = '';
        }else{
            $cmbPetugas=$_POST['cmbPetugas'];    
        }
		 if ($cmbPetugas !== '') {
            $jlh = count($cmbPetugas); 
            for($i=0;$i<$jlh;$i++){
                $sql2="INSERT INTO detail_st SET id_sk='$id_sk', petugas_nip='$cmbPetugas[$i]'";
                $query2=mysql_query($sql2) or die(mysql_error());
            }
        }		
			$success ="Sukses memgubah surat tugas";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=surat_tugas&act=view&s=1&msg='.$msg);
		
	}	
?>