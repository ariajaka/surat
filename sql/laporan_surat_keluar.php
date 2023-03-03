<?php 
	include('../config/config.php');
	include('../part/header.php');
 ?>
 <style type="text/css" media="print">
 	#cetak_laporan{
		display: none;
 	}

 </style>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 		<center>	
 			<h1>LAPORAN SURAT KELUAR</h1>
 			<h2>Balai Pengawas Obat dan Makanan di Jambi</h2>
            <h2>Dari tgl. <?php 
                    $tanggalawal = $_POST['tanggalawal'];
                    $tanggalakhir = $_POST['tanggalakhir'];
        			$bulan =  substr ($tanggalawal, 0,2);
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
        			
        			echo substr($tanggalawal, 3,2).' '.$sebut.' '.substr($tanggalawal, 6,4).'';
        		?> s.d <?php  
        			$bulan =  substr ($tanggalakhir, 0,2);
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
        			
        			echo substr($tanggalakhir, 3,2).' '.$sebut.' '.substr($tanggalakhir, 6,4).''; ?></h2>
 			</center>
 		</div>
 	</div>
 </div>
 <br>
	<table border="1px" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
    <thead>
        <tr>
             <th>No</th>
                            <th>Nomor Awal Surat</th>
                            <th>ID SK<br>Tgl. Surat Keluar</th>
                            <th>Jenis Surat</th>
                            <th>Perihal</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th>Pegawai yang tugas</th>
                            <th>Nomor SPPD</th>
                            <th>Penandatangan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
       $no = 0;
        if (isset($_POST['cetak'])) {
            $tanggalawal = $_POST['tanggalawal'];
            $tanggalakhir = $_POST['tanggalakhir'];
            $sql = "SELECT * FROM surat_keluar WHERE tgl_sk BETWEEN '$tanggalawal' AND '$tanggalakhir'  ORDER BY id_sk ";
            $laporan = mysql_query($sql);

            if (mysql_num_rows($laporan) == 0) {
                echo '<center><h1>Mohon maaf laporan tidak tersedia untuk tanggal terpilih</h1></center>';
            }else{
                while ($data_surat_keluar = mysql_fetch_assoc($laporan)) {
                $id_sk = $data_surat_keluar['id_sk'];
                $no++;
    ?>
        <tr>
           <td><?php echo $no; ?></td>
                            <td><?php echo $data_surat_keluar['kepala_sk']; ?></td>
                            <td><?php echo $data_surat_keluar['id_sk']; ?><br>
                                <?php $tgl_sk = $data_surat_keluar['tgl_sk'];
                                $bulan =  substr ($tgl_sk, 0,2);
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
                                echo substr($tgl_sk, 3,2).' '.$sebut.' '.substr($tgl_sk, 6,4).''; ?>
                            </td>
                            <td><?php echo $data_surat_keluar['jenis']; ?></td>
                            <td><?php echo $data_surat_keluar['perihal']; ?></td>
                            <td><?php echo $data_surat_keluar['tujuan']; ?></td>
                            <td><?php
                                $sql="SELECT * from surat_tugas a INNER JOIN surat_keluar b ON a.id_sk=b.id_sk where b.id_sk='$id_sk'"; 
                                $query = mysql_query($sql);
                                $data1= mysql_fetch_array($query);
                                echo $data1['status']; ?></td>
                            <td><?php 
                                    $sql="SELECT * from surat_tugas a INNER JOIN detail_st b ON a.id_sk=b.id_sk INNER JOIN pegawai c ON b.petugas_nip=c.nip where a.id_sk='$id_sk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama']; echo '<br>';
                                    }
                                ?>
                            </td>
                            <td><?php 
                                    $sql="SELECT * from surat_tugas a INNER JOIN detail_st_sppd b ON a.id_sk=b.id_sk INNER JOIN pegawai c ON b.petugas_nip_sppd=c.nip where a.id_sk='$id_sk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['no_sppd']; echo '<br>';
                                    }
                                ?>
                            </td> 
                            <td><?php 
                                    $sql="SELECT a.penandatangan_nip, b.nama from surat_keluar a INNER JOIN pegawai b ON a.penandatangan_nip=b.nip where a.id_sk='$id_sk'";  
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama'];echo '<br>'; 
                                    }
                                ?></td>

        </tr>
        <?php
        }
            }

        		}
        ?>

    </tbody>
</table>
       <table width="100%" border="0" align="center">
        <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
    			<td width="70%" >&nbsp;</td>
    			<td width="35%" >Kepala Sub Bag Tata Usaha</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;;font-size:14px">
				
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" >&nbsp;</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;;font-size:14px">
				
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" >&nbsp;</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" ><?php 
                                    // $sql = "SELECT `pegawai`.`nama`, `pegawai_st`.`nip` WHERE `pegawai`.`nip` = `pegawai_st`.`nip` and `pegawai_st`.`no_st` = '$no_st' ";
                                    $sql="SELECT * from pegawai where jabatan='KEPALA SUB BAGIAN TATA USAHA'";  
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama']; echo '<br>'; echo 'NIP. '; echo $data1['nip'];
                                    }
                                ?></td>
			</tr>
       </table>

<br><br>
<button class="btn btn-primary" onclick="window.print()" id="cetak_laporan">CETAK</button>

<?php include('../part/footer.php') ?>