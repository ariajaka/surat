<?php 
include('../../config/config.php');
if (isset($_POST['save'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$plh_kabalai = $_POST['plh_kabalai'];
	
	/*Cek data user apakah sudah ada di database atau belum*/
	$data = mysql_query("SELECT * FROM user WHERE nama='$nama' and username='$username'");
	$fetch = mysql_fetch_assoc($data);
	if ($fetch ['nama'] == $nama or $fetch['username']== $username) {
		$error = 'Maaf data sudah ada';
		$msg = base64_encode($error);
		header('location:../../index.php?mod=user&act=add&s=0&msg='.$msg);
	}else{
		$sql = "INSERT INTO user VALUES ('','$nama','$username','$password','$plh_kabalai')";
		if ($user = mysql_query($sql)) {
			$success ="Sukses menambahkan data baru";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=user&act=add&s=1&msg='.$msg);
		}else{
			$success ="Terjadi Kesalahan, Mohon ulangi";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=user&act=add&s=2&msg='.$msg);
		}
	}
}
 
?>