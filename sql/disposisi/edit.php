<?php 
include('../../config/config.php');
    //Untuk mengecek apakah ini proses simpan atau update
    if(isset($_POST['save'])){
        $id = $_POST['id'];
        //mengmbil variabel yang dikirim oleh formulir
        
        $id_disposisi = $_POST['id_disposisi'];
        $cmbnosurat = $_POST['cmbnosurat'];
        $tanggal_disposisi = $_POST['tanggal_disposisi'];
        $catatan = $_POST['catatan'];
        $cmbpembuat_disposisi = $_POST['cmbpembuat_disposisi'];
          
        $sql="UPDATE disposisi SET id_disposisi='$id_disposisi', id_sm='$cmbnosurat', tgl_disposisi='$tanggal_disposisi', catatan='$catatan', disposisi_nip='$cmbpembuat_disposisi' WHERE id_disposisi ='$id'";
        $query=mysql_query($sql) or die(mysql_error().$sql);
  
        if ($_POST['cmbditeruskan'] == '') {
            //Lakukan Select Nantinya
            //Sementara
            $cmbditeruskan = '';
        }
        else{
            $cmbditeruskan=$_POST['cmbditeruskan'];    
        }
        if ($cmbditeruskan !== '') {
            $jlh = count($cmbditeruskan); 
            for($i=0;$i<$jlh;$i++){
                $sql1="INSERT INTO detail_disposisi_diteruskan_pada SET id_disposisi='$id_disposisi', diteruskan_pada='$cmbditeruskan[$i]'";
                $query1=mysql_query($sql1) or die(mysql_error());
            }
        }
        if ($_POST['pejabat_lain'] == '') {
            //Lakukan Select Nantinya
            //Sementara
            $pejabat_lain = '';
        }
        else{
            $pejabat_lain=$_POST['pejabat_lain'];
        }
        if ($pejabat_lain !== '') {
            $jlh = count($pejabat_lain); 
            for($i=0;$i<$jlh;$i++){
                $sql2="INSERT INTO detail_disposisi_diteruskan_pada SET id_disposisi='$id_disposisi', diteruskan_pada='$pejabat_lain[$i]'";
                $query2=mysql_query($sql2) or die(mysql_error());
            }
        }
        if ($_POST['cmbpegawaipenerima'] == '') {
            //Lakukan Select Nantinya
            //Sementara
            $cmbpegawaipenerima = '';
        }else{
            $cmbpegawaipenerima=$_POST['cmbpegawaipenerima'];    
        }
        if ($cmbpegawaipenerima !== '') {
            $jlh = count($cmbpegawaipenerima); 
            for($i=0;$i<$jlh;$i++){
                $sql4="INSERT INTO detail_disposisi_pegawai_penerima SET id_disposisi='$id_disposisi', nip_penerima='$cmbpegawaipenerima[$i]'";
                $query4=mysql_query($sql4) or die(mysql_error());
            }
        }
        if ($_POST['cmbket_disposisi'] == '') {
            //Lakukan Select Nantinya
            //Sementara
            $cmbket_disposisi = '';
        }
        else{
            $cmbket_disposisi=$_POST['cmbket_disposisi'];    
        }
        if ($cmbket_disposisi !== '') {
            $jlh = count($cmbket_disposisi); 
            for($i=0;$i<$jlh;$i++){
                $sql5="INSERT INTO detail_disposisi_keterangan_disposisi SET id_disposisi='$id_disposisi', keterangan_disposisi='$cmbket_disposisi[$i]'";
                $query5=mysql_query($sql5) or die(mysql_error());
            }
        }
        if ($_POST['ket_dispo_lain'] == '') {
            //Lakukan Select Nantinya
            //Sementara
            $ket_dispo_lain = '';
        }
        else{
            $ket_dispo_lain=$_POST['ket_dispo_lain'];
        }
        if ($ket_dispo_lain !== '') {
            $jlh = count($ket_dispo_lain); 
            for($i=0;$i<$jlh;$i++){
                $sql6="INSERT INTO detail_disposisi_keterangan_disposisi SET id_disposisi='$id_disposisi', keterangan_disposisi='$ket_dispo_lain[$i]'";
                $query6=mysql_query($sql6) or die(mysql_error());
            }
        }
        $success ="Sukses mengubah Disposisi";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=disposisi&act=view&s=1&msg='.$msg);
    }
?>