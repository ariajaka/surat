<?php include('config/config.php') ?>
    <?php 
      include ('sql/cetak-disposisi.php');
     ?>
<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="assets/FORMLEMBARDISPOSISI/base.min.css"/>
<link rel="stylesheet" href="assets/FORMLEMBARDISPOSISI/fancy.min.css"/>
<link rel="stylesheet" href="assets/FORMLEMBARDISPOSISI/main.css"/>
<script src="assets/FORMLEMBARDISPOSISI/compatibility.min.js"></script>
<script src="assets/FORMLEMBARDISPOSISI/theViewer.min.js"></script>
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
	<div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="assets/FORMLEMBARDISPOSISI/bg1.png"/>
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
			<div class="t m0 x4 h6 y7 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $alamat_sm; ?></div>
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
			<div class="t m0 x4 h6 y7 ff2 fs1 fc0 sc0 ls0 ws0"><?php echo $perihal;?></div>
		</div>
		<div class="c x3 ye w9 h7">
			<div class="t m0 x4 h6 yf ff2 fs1 fc0 sc0 ls0 ws0">DITERUSKAN KEPADA YTH :</div>
		</div>
		<div class="c x9 ye wa h7">
			<div class="t m0 xa h6 yf ff2 fs1 fc0 sc0 ls0 ws0">DISPOSISI</div>
		</div>
		<div class="c x3 y10 wb h5">
			<div class="t m0 xb h6 y11 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y10 wc h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Kepala Balai</div>
		</div>
		<div class="c xd y10 wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y10 we h5">
			<div class="t m0 xe h6 y11 ff2 fs1 fc0 sc0 ls0 ws0">1</div>
		</div>
		<div class="c xf y10 wf h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Sebagai Bahan Informasi</div>
		</div>
		<div class="c x8 y10 w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y12 wb h5">
			<div class="t m0 xb h6 y11 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y12 wc h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Ka. Subbag TU</div>
		</div>
		<div class="c xd y12 wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"><?php 
              if ($diteruskan_pada == 'Ka. Subbag TU') {
                $sebut = '&#8730';
              }
              elseif ($diteruskan_pada !== 'Ka. Subbag TU') {
                $sebut = '';
              }
                  echo $sebut;?></div>
		</div>
		<div class="c xf y12 wf h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">dan Evaluasi</div>
		</div>
		<div class="c x3 y13 wb h8">
			<div class="t m0 xb h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y13 w10 h8">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0">Kasi Pemeriksaan</div>
		</div>
		<div class="c xd y13 wd h8">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y13 we h8">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">2</div>
		</div>
		<div class="c xf y13 wf h8">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0">Untuk Ditindak Lanjuti</div>
		</div>
		<div class="c x8 y13 w7 h8">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y16 wb h5">
			<div class="t m0 xb h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y16 w11 h5">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0">Kasi Penindakan</div>
		</div>
		<div class="c xd y16 wd h5">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y16 we h5">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">3</div>
		</div>
		<div class="c xf y16 wf h5">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0">Untuk Direspons</div>
		</div>
		<div class="c x8 y16 w7 h5">
			<div class="t m0 x4 h6 y15 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y17 wb h5">
			<div class="t m0 xb h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y17 w10 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Kasi Pengujian Kimia</div>
		</div>
		<div class="c xd y17 wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y17 we h5">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">4</div>
		</div>
		<div class="c xf y17 wf h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Untuk Dibahas Bersama</div>
		</div>
		<div class="c x8 y17 w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y18 wb h5">
			<div class="t m0 xb h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y18 w10 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Kasi Pengujian Mikrobiologi</div>
		</div>
		<div class="c xd y18 wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y18 we h5">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">5</div>
		</div>
		<div class="c xf y18 wf h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Untuk Ditelaah dan Usulan</div>
		</div>
		<div class="c x8 y18 w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y19 wb h5">
			<div class="t m0 xb h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y19 wc h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Kasi Infokom</div>
		</div>
		<div class="c xd y19 wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y19 we h5">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">6</div>
		</div>
		<div class="c xf y19 wf h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Disiapkan Konsep Jawaban</div>
		</div>
		<div class="c x8 y19 w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y1a wb h5">
			<div class="t m0 xb h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y1a w10 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Pejabat Pembuat Komitmen</div>
		</div>
		<div class="c xd y1a wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y1a we h5">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">7</div>
		</div>
		<div class="c xf y1a wf h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Foto kopi</div>
		</div>
		<div class="c x8 y1a w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y1b wb h5">
			<div class="t m0 xb h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">-</div>
		</div>
		<div class="c xc y1b wc h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Manajer Mutu</div>
		</div>
		<div class="c xd y1b wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y1b we h5">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">8</div>
		</div>
		<div class="c xf y1b wf h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">Arsip</div>
		</div>
		<div class="c x8 y1b w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c xd y1c wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y1c we h5">
			<div class="t m0 xe h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">9</div>
		</div>
		<div class="c x8 y1c w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c xd y1d wd h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x7 y1d we h5">
			<div class="t m0 x10 h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">10</div>
		</div>
		<div class="c x8 y1d w7 h5">
			<div class="t m0 x4 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c x3 y1e w3 h5">
			<div class="t m0 x4 h9 y6 ff1 fs1 fc0 sc0 ls0 ws0">CATATAN :</div>
		</div>
		<div class="c x5 y1f w12 ha">
			<div class="t m0 x4 h6 y20 ff2 fs1 fc0 sc0 ls0 ws0"></div>
		</div>
		<div class="c xf y22 wf h5">
			<div class="t m0 x11 h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">Terima Kasih</div>
		</div>
		<div class="c xf y25 wf h5">
			<div class="t m0 x12 h6 y14 ff2 fs1 fc0 sc0 ls0 ws0">Ka. BALAI POM</div>
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
