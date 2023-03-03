<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	/*Select Disposisi*/
	$sql1 = "SELECT * FROM disposisi WHERE id_disposisi='$id'";
	$query1 = mysql_query($sql1)or die("Query failed with error: ".mysql_error());
	$data1 = mysql_fetch_assoc($query1);

	$id_disposisi = $data1['id_disposisi'];
	$tgl_disposisi = $data1['tgl_disposisi'];
	$catatan = $data1['catatan'];
	
	/*disposisi join pegawai*/
		
	$sql3 = "SELECT * from disposisi a INNER JOIN pegawai b ON a.disposisi_nip=b.nip where a.id_disposisi='$id'";
	$query3 = mysql_query($sql3);
	$data3 = mysql_fetch_assoc($query3);
	
	$id_disposisi = $data3['id_disposisi'];
	$nama = $data3['nama'];

	/*detail_disposisi_pegawai_penerima join pegawai*/
		
	$sql2 = "SELECT * from detail_disposisi_pegawai_penerima a INNER JOIN pegawai b ON a.nip_penerima=b.nip where a.id_disposisi='$id'";
	$query2 = mysql_query($sql2);
	$data2 = mysql_fetch_assoc($query2);
	
	$id_disposisi = $data2['id_disposisi'];
	$nama = $data2['nama'];

	/*surat masuk join disposisi*/
		
	$sql4 = "SELECT * from surat_masuk INNER JOIN disposisi ON disposisi.id_sm=surat_masuk.id_sm where id_disposisi='$id'";
	$query4 = mysql_query($sql4);
	$data4 = mysql_fetch_assoc($query4);
	
	$id_sm = $data4['id_sm'];
	$tgl_catat_sm = $data4['tgl_catat_sm'];
	$nomor_sm = $data4['nomor_sm'];
	$alamat_sm = $data4['alamat_sm'];
	$tgl_sm = $data4['tgl_sm'];
	$perihal = $data4['perihal'];
	$sifat_surat = $data4['sifat_surat'];
	$catatan = $data4['catatan'];

	/*detail_disposisi_diteruskan_pada join disposisi*/
		
	$sql5 = "SELECT * from detail_disposisi_diteruskan_pada a INNER JOIN disposisi b ON a.id_disposisi=b.id_disposisi where a.id_disposisi='$id'";
	$query5 = mysql_query($sql5);
	$data5 = mysql_fetch_array($query5);
       	
   	$id_disposisi5 = $data5['id_disposisi'];
	$diteruskan_pada = $data5['diteruskan_pada']; 
   
}
 ?>