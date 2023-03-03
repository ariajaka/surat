    <?php include('config/config.php') ?>
    <?php 
      include ('sql/cetak-disposisi1.php');
     ?>
<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="assets/FORMLEMBARDISPOSISI1/base.min.css"/>
<link rel="stylesheet" href="assets/FORMLEMBARDISPOSISI1/fancy.min.css"/>
<link rel="stylesheet" href="assets/FORMLEMBARDISPOSISI1/main.css"/>
<script src="assets/FORMLEMBARDISPOSISI1/compatibility.min.js"></script>
<script src="assets/FORMLEMBARDISPOSISI1/theViewer.min.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1">
	<div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="assets/FORMLEMBARDISPOSISI1/bg1.png"/>
		<div class="c x0 y1 w2 h2">
			<div class="t m0 x1 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">LEMBAR DISPOSISI</div>
		</div>
		<div class="c x0 y3 w2 h4">
			<div class="t m0 x2 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">BALAI PENGAWAS OBAT DAN MAKANAN DI JAMBI</div>
		</div>
		<div class="c x3 y5 w3 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">No. Agenda</div>
		</div>
		<div class="c x5 y5 w4 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">:</div>
		</div>
		<div class="c x6 y5 w5 h5">
			<div class="t m0 x4 h6 y7 ff2 fs1 fc0 sc0 ls0 ws0"><?php 
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
                  echo $id_sm.'/BPOM/TU/'.$sebut.'/'.substr($tgl_catat_sm, 6,4).'';?></div>
		</div>
		<div class="c x7 y5 w6 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">RAHASIA</div>
		</div>
		<div class="c x8 y5 w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"><?php 
              if ($sifat_surat == 'Rahasia') {
                $sebut = '&#8730';
              }
              elseif ($sifat_surat !== 'Rahasia') {
                $sebut = '';
              }
                  echo $sebut;?></div>
		</div>
		<div class="c x7 y8 w6 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">PENTING</div>
		</div>
		<div class="c x8 y8 w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"><?php 
              if ($sifat_surat == 'Penting') {
                $sebut = '&#8730';
              }
              elseif ($sifat_surat !== 'Penting') {
                $sebut = '';
              }
                  echo $sebut;?></div>
		</div>
		<div class="c x3 y9 w3 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Diterima Tanggal</div>
		</div>
		<div class="c x5 y9 w4 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">:</div>
		</div>
		<div class="c x6 y9 w5 h5">
			<div class="t m0 x4 h6 y7 ff2 fs1 fc0 sc0 ls0 ws0"><?php 
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
            ?></div>
		</div>
		<div class="c x7 y9 w6 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">BIASA</div>
		</div>
		<div class="c x8 y9 w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"><?php 
              if ($sifat_surat == 'Biasa') {
                $sebut = '&#8730';
              }
              elseif ($sifat_surat !== 'Biasa') {
                $sebut = '';
              }
                  echo $sebut;?></div>
		</div>
		<div class="c x3 ya w3 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Asal Surat</div>
		</div>
		<div class="c x5 ya w4 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">:</div>
		</div>
		<div class="c x6 ya w8 h5">
			<div class="t m0 x4 h6 y7 ff2 fs1 fc0 sc0 ls0 ws0"> <?php echo $alamat_sm; ?></div>
		</div>
		<div class="c x3 yb w3 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">No. &amp; Tgl. Surat</div>
		</div>
		<div class="c x5 yb w4 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">:</div>
		</div>
		<div class="c x6 yb w8 h5">
			<div class="t m0 x4 h6 y7 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $nomor_sm;?> Tgl. <?php 
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
            ?></div>
		</div>
		<div class="c x3 yd w3 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Isi Ringkas</div>
		</div>
		<div class="c x5 yd w4 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">:</div>
		</div>
		<div class="c x6 yd w8 h5">
			<div class="t m0 x4 h6 y7 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $perihal; ?></div>
		</div>
		<div class="c x3 ye w9 h7">
			<div class="t m0 x4 h6 yf ff2 fs1 fc0 sc0 ls0 ws0">DITERUSKAN KEPADA YTH :</div>
		</div>
		<div class="c x9 ye wa h7">
			<div class="t m0 xa h6 yf ff2 fs1 fc0 sc0 ls0 ws0">DISPOSISI</div>
		</div>
		<div class="c x3 y10 wb h8">
			<?php 
            $sql="SELECT * from detail_disposisi_diteruskan_pada a INNER JOIN disposisi b ON b.id_disposisi=a.id_disposisi where b.id_disposisi='$id_disposisi'";  
            $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
            while($data1= mysql_fetch_array($query))
                {
                    if ($data1['diteruskan_pada'] != ''){
                    echo $data1['diteruskan_pada'];echo '<br>';
                    } 
                }
        ?>        
		</div>
		<div class="c x7 y10 wc h8">
			<?php 
            $sql="SELECT * from detail_disposisi_keterangan_disposisi a INNER JOIN disposisi b ON b.id_disposisi=a.id_disposisi where b.id_disposisi='$id_disposisi'";  
            $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
            while($data1= mysql_fetch_array($query))
                {
                    if ($data1['keterangan_disposisi'] != ''){
                    echo $data1['keterangan_disposisi'];echo '<br>'; 
                    }
                }
        ?>
		</div>
		<div class="c x3 y12 w3 h5">
			    <div class="t m0 x4 h9 y6 ff1 fs1 fc0 sc0 ls0 ws0">CATATAN : </div>
		</div>
    <div class="c x5 y13 wd ha">
      <div class="t m0 x4 h6 y14 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $catatan; ?></div>
    </div>
		<div class="c xd y16 we h5">
  			<div class="t m0 xe h6 y17 ff2 fs1 fc0 sc0 ls0 ws0">Tgl. <?php 
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
            ?></div>
		</div>
		<div class="c x3 y18 w3 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Penerima :</div>
		</div>
		<div class="c x6 y19 wf hb">
			<div class="t m0 x4 h6 y1a ff2 fs1 fc0 sc0 ls0 ws0"> <?php 
            $sql="SELECT detail_disposisi_pegawai_penerima.nip_penerima, pegawai.nama from detail_disposisi_pegawai_penerima INNER JOIN disposisi ON disposisi.id_disposisi=detail_disposisi_pegawai_penerima.id_disposisi INNER JOIN pegawai ON detail_disposisi_pegawai_penerima.nip_penerima=pegawai.nip where disposisi.id_disposisi='$id_disposisi'";   
            $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
            while($data1= mysql_fetch_array($query))
                {
                    echo $data1['nama'];echo '<br>'; 
                }
        ?></div>
		</div>
		<div class="c xd y1b we h5"><div class="t m0 xf h6 y17 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $data3['nama']; ?></div>
	</div>
</div>
<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
</div>
</div>
<div class="loading-indicator">

</div>
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
