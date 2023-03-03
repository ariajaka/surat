   
    <?php include('config/config.php') ?>
    <?php 
      include ('sql/cetak-disposisi.php');
     ?>

<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Disposisi</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <style type="text/css">
          body{
            font-family: times, roman, calibri;
            font-size: 12pt;
          }

            table{
                border-collapse:collapse;
            }
        </style>
   
    </head>
<body>
  
<table width="701" border="1">
  <tr>
    <td colspan="5"><div align="center">LEMBAR DISPOSISI</div></td>
  </tr>
  <tr>
    <td colspan="5"><div align="center">BALAI PENGAWAS OBAT DAN MAKANAN DI JAMBI</div></td>
  </tr>
  <tr>
    <td width="120">No. Agenda</td>
    <td width="36"><div align="center">:</div></td>
    <td width="190"><?php 
            $bulan =  substr ($tgl_catat_sm, 0,2);
              if ($bulan == '1' or $bulan == '01') {
                $sebut = '01';
              }elseif ($bulan == '2' or $bulan == '02') {
                $sebut = '02';
              }elseif ($bulan == '3' or $bulan == '03') {
                $sebut = '03';
              }elseif ($bulan == '4' or $bulan == '04') {
                $sebut = '04';
              }elseif ($bulan == '5' or $bulan == '05') {
                $sebut = '05';
              }elseif ($bulan == '6' or $bulan == '06') {
                $sebut = '06';
              }elseif ($bulan == '7' or $bulan == '07') {
                $sebut = '07';
              }elseif ($bulan == '8' or $bulan == '08') {
                $sebut = '08';
              }elseif ($bulan == '9' or $bulan == '09') {
                $sebut = '09';
              }elseif ($bulan == '10' or $bulan == '10') {
                $sebut = '10';
              }elseif ($bulan == '11' or $bulan == '11') {
                $sebut = '11';
              }elseif ($bulan == '12' or $bulan == '12') {
                $sebut = '12';
              };
                  echo $id_sm.'/BPOM/TU/'.$sebut.'/'.substr($tgl_catat_sm, 6,4).'';?></td>
    <td width="321" colspan="2" rowspan="3"><?php echo $data4['sifat_surat'];  ?></td>
  </tr>
  <tr>
    <td>Diterima Tanggal</td>
    <td><div align="center">:</div></td>
    <td><?php 
              $bulan =  substr ($tgl_catat_sm, 0,2);
              if ($bulan == '1' or $bulan == '01') {
                $sebut = 'Januari';
              }elseif ($bulan == '2' or $bulan == '02') {
                $sebut = 'Februari';
              }elseif ($bulan == '3' or $bulan == '03') {
                $sebut = 'Maret';
              }elseif ($bulan == '4' or $bulan == '04') {
                $sebut = 'April';
              }elseif ($bulan == '5' or $bulan == '05') {
                $sebut = 'Mei';
              }elseif ($bulan == '6' or $bulan == '06') {
                $sebut = 'Juni';
              }elseif ($bulan == '7' or $bulan == '07') {
                $sebut = 'Juli';
              }elseif ($bulan == '8' or $bulan == '08') {
                $sebut = 'Agustus';
              }elseif ($bulan == '9' or $bulan == '09') {
                $sebut = 'September';
              }elseif ($bulan == '10' or $bulan == '10') {
                $sebut = 'Oktober';
              }elseif ($bulan == '11' or $bulan == '11') {
                $sebut = 'November';
              }elseif ($bulan == '12' or $bulan == '12') {
                $sebut = 'Desember';
              };
              echo substr($tgl_catat_sm, 3,2).' '.$sebut.' '.substr($tgl_catat_sm, 6,4).'';
            ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td>Asal Surat</td>
    <td><div align="center">:</div></td>
    <td colspan="3"><?php echo $data4['alamat_sm']; ?></td>
  </tr>
  <tr>
    <td>No &amp; Tgl. Surat</td>
    <td><div align="center">:</div></td>
    <td colspan="3"><?php 
              $bulan =  substr ($tgl_sm, 0,2);
              if ($bulan == '1' or $bulan == '01') {
                $sebut = 'Januari';
              }elseif ($bulan == '2' or $bulan == '02') {
                $sebut = 'Februari';
              }elseif ($bulan == '3' or $bulan == '03') {
                $sebut = 'Maret';
              }elseif ($bulan == '4' or $bulan == '04') {
                $sebut = 'April';
              }elseif ($bulan == '5' or $bulan == '05') {
                $sebut = 'Mei';
              }elseif ($bulan == '6' or $bulan == '06') {
                $sebut = 'Juni';
              }elseif ($bulan == '7' or $bulan == '07') {
                $sebut = 'Juli';
              }elseif ($bulan == '8' or $bulan == '08') {
                $sebut = 'Agustus';
              }elseif ($bulan == '9' or $bulan == '09') {
                $sebut = 'September';
              }elseif ($bulan == '10' or $bulan == '10') {
                $sebut = 'Oktober';
              }elseif ($bulan == '11' or $bulan == '11') {
                $sebut = 'November';
              }elseif ($bulan == '12' or $bulan == '12') {
                $sebut = 'Desember';
              };
              
              echo substr($tgl_sm, 3,2).' '.$sebut.' '.substr($tgl_sm, 6,4).'';
            ?></td>
  </tr>
  <tr>
    <td>Isi Ringkas</td>
    <td><div align="center">:</div></td>
    <td colspan="3"><?php echo $perihal; ?></td>
  </tr>
  <tr>
    <td colspan="3">DITERUSKAN KEPADA YTH :</td>
    <td colspan="2"><div align="center">DISPOSISI</div></td>
  </tr>
  <tr>
    <td height="110" colspan="3">
        <?php 
            $sql="SELECT * from detail_disposisi_diteruskan_pada a INNER JOIN disposisi b ON b.id_disposisi=a.id_disposisi where b.id_disposisi='$id_disposisi'";  
            $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
            while($data1= mysql_fetch_array($query))
                {
                    echo $data1['diteruskan_pada'];echo '<br>'; 
                }
        ?>        
    </td>
    <td colspan="2">
        <?php 
            $sql="SELECT * from detail_disposisi_keterangan_disposisi a INNER JOIN disposisi b ON b.id_disposisi=a.id_disposisi where b.id_disposisi='$id_disposisi'";  
            $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
            while($data1= mysql_fetch_array($query))
                {
                    echo $data1['keterangan_disposisi'];echo '<br>'; 
                }
        ?>
    </td>
  </tr>
  <tr>
    <td>CATATAN</td>
    <td><div align="center">:</div></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="156" colspan="5"><?php echo $catatan; ?></td>
  </tr>
  <tr>
    <td height="52" colspan="4">
        Pegawai Penerima : <br>
        <?php 
            $sql="SELECT detail_disposisi_pegawai_penerima.nip_penerima, pegawai.nama from detail_disposisi_pegawai_penerima INNER JOIN disposisi ON disposisi.id_disposisi=detail_disposisi_pegawai_penerima.id_disposisi INNER JOIN pegawai ON detail_disposisi_pegawai_penerima.nip_penerima=pegawai.nip where disposisi.id_disposisi='$id_disposisi'";   
            $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
            while($data1= mysql_fetch_array($query))
                {
                    echo $data1['nama'];echo '<br>'; 
                }
        ?></td>
    <td width="320" height="52">
        Tgl. <?php 
              $bulan =  substr ($tgl_disposisi, 0,2);
              if ($bulan == '1' or $bulan == '01') {
                $sebut = 'Januari';
              }elseif ($bulan == '2' or $bulan == '02') {
                $sebut = 'Februari';
              }elseif ($bulan == '3' or $bulan == '03') {
                $sebut = 'Maret';
              }elseif ($bulan == '4' or $bulan == '04') {
                $sebut = 'April';
              }elseif ($bulan == '5' or $bulan == '05') {
                $sebut = 'Mei';
              }elseif ($bulan == '6' or $bulan == '06') {
                $sebut = 'Juni';
              }elseif ($bulan == '7' or $bulan == '07') {
                $sebut = 'Juli';
              }elseif ($bulan == '8' or $bulan == '08') {
                $sebut = 'Agustus';
              }elseif ($bulan == '9' or $bulan == '09') {
                $sebut = 'September';
              }elseif ($bulan == '10' or $bulan == '10') {
                $sebut = 'Oktober';
              }elseif ($bulan == '11' or $bulan == '11') {
                $sebut = 'November';
              }elseif ($bulan == '12' or $bulan == '12') {
                $sebut = 'Desember';
              };
              
              echo substr($tgl_disposisi, 3,2).' '.$sebut.' '.substr($tgl_disposisi, 6,4).'';
            ?> <br>
        Pembuat Disposisi : <br><br><br><br>
        <?php echo $data3['nama']; ?>
    </td>
  </tr>
</table>


        
<!-- CORE JS FRAMEWORK - START --> 
<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
<script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
<!-- CORE JS FRAMEWORK - END --> 

<script type="text/javascript">
         $(document).ready(function(){
            $("#cetak").hide();
            window.print();
            //$("#cetak").show();
        });
        function cetak(){
            $("#cetak").hide();
            window.print();
        }
</script>
</body>
</html>
