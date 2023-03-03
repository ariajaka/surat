<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	/*surat masuk*/
		
	$sql4 = "SELECT * from surat_masuk where id_sm='$id'";
	$query4 = mysql_query($sql4);
	$data4 = mysql_fetch_assoc($query4);
	
	$id_sm = $data4['id_sm'];
	$tgl_catat_sm = $data4['tgl_catat_sm'];
	$nomor_sm = $data4['nomor_sm'];
	$alamat_sm = $data4['alamat_sm'];
	$tgl_sm = $data4['tgl_sm'];
	$perihal = $data4['perihal'];
	$sifat_surat = $data4['sifat_surat'];

	
}
 ?>