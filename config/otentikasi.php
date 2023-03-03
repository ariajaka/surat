<?php
include('config.php');
session_start();
if (isset($_POST['login'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);
	$cari = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
	$data = mysql_fetch_assoc($cari);
	if ($data['username'] == $username and $data['password'] == $pass) {
		$_SESSION['id'] = $data['id_user'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['status'] = $data['status'];
		if ($data['status'] == 1) {
			$_SESSION['tamu'] = 'TRUE' ;
			$eror = base64_encode('SUCCESS');
			$info = base64_encode('Login Berhasil');
			header('location:../login.php?msg='.$eror.'&info='.$info.'');
		}
		else if ($data['status'] == 2) {
			$_SESSION['admin'] = 'TRUE' ;
			$eror = base64_encode('SUCCESS');
			$info = base64_encode('Login Berhasil');
			header('location:../admin/index.php');
		}
		else if ($data['status'] == 3) {
			$_SESSION['bukanadmin'] = 'TRUE' ;
			$eror = base64_encode('SUCCESS');
			$info = base64_encode('Login Berhasil');
			header('location:../login.php');
		}
	}
	else {
		$eror = base64_encode('ERROR');
		$info = base64_encode("Maaf, username dan password yang anda masukkan salah/tidak terdaftar");
		header('location:../login.php?msg='.$eror.'&info='.$info.'');
		}
}
else{
	//header('location:../../daftar.php');
}
?>