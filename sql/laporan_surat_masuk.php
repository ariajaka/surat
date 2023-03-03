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
 			<h1>LAPORAN SURAT MASUK</h1>
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
             <th>ID SM</th>
             <th>Tgl. Catat Surat</th>
              <th>Nomor Surat <br>Tgl. Surat</th>
                <th>Asal Surat</th>
                <th>Perihal</th>
                <th>Status</th>
                <th>ID DISPOSISI <br> Tgl. Disposisi</th>
                <th>Pejabat Penerima</th>
                <th>Pegawai Penerima</th>
                <th>Penandatangan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
       $no = 0;
        if (isset($_POST['cetak'])) {
            $tanggalawal = $_POST['tanggalawal'];
            $tanggalakhir = $_POST['tanggalakhir'];
            $status_disposisi = $_POST['status_disposisi'];
            
            if($status_disposisi == 'ALL'){
            $sql = "SELECT * FROM surat_masuk WHERE tgl_catat_sm BETWEEN '$tanggalawal' AND '$tanggalakhir'  ORDER BY id_sm ";
            $laporan = mysql_query($sql);
            }
            if($status_disposisi != 'ALL'){
            $sql = "SELECT * FROM surat_masuk WHERE tgl_catat_sm BETWEEN '$tanggalawal' AND '$tanggalakhir' AND status='$status_disposisi'  ORDER BY id_sm ";
            $laporan = mysql_query($sql);
            }

            if (mysql_num_rows($laporan) == 0) {
                echo '<center><h1>Mohon maaf laporan tidak tersedia untuk tanggal terpilih</h1></center>';
            }else{
                while ($data_surat_masuk = mysql_fetch_assoc($laporan)) {
                $id_sm = $data_surat_masuk['id_sm'];
                $no++;
    ?>
        <tr>
           <td><?php echo $no; ?></td>
                            <td><?php echo $data_surat_masuk['id_sm']; ?></td>
                            <td><?php 
                                $tgl_catat_sm = $data_surat_masuk['tgl_catat_sm'];
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
                                echo substr($tgl_catat_sm, 3,2).' '.$sebut.' '.substr($tgl_catat_sm, 6,4).''; ?></td>
                            <td><?php echo $data_surat_masuk['nomor_sm']; ?> <br> 
                                <?php 
                                $tgl_sm = $data_surat_masuk['tgl_sm'];
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
                                echo substr($tgl_sm, 3,2).' '.$sebut.' '.substr($tgl_sm, 6,4).''; ?>
                            </td>
                            <td><?php echo $data_surat_masuk['alamat_sm']; ?></td>
                            <td><?php echo $data_surat_masuk['perihal']; ?></td>
                            <td><?php echo $data_surat_masuk['status']; ?></td>
                            <td><?php 
                                    $sql="SELECT a.id_disposisi, a.tgl_disposisi from disposisi a INNER JOIN surat_masuk b ON a.id_sm=b.id_sm WHERE a.id_sm='$id_sm'";  
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    $data1= mysql_fetch_array($query);
                                    $tgl_disposisi = $data1['tgl_disposisi'];
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
                                    echo $data1['id_disposisi']; echo '<br>'; echo substr($tgl_disposisi, 3,2).' '.$sebut.' '.substr($tgl_disposisi, 6,4).'';
                                ?></td>
                            <td><?php 
                                    $sql="SELECT a.diteruskan_pada from detail_disposisi_diteruskan_pada a INNER JOIN disposisi b ON b.id_disposisi=a.id_disposisi where b.id_sm='$id_sm'"; 
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){echo '<br>'; 
                                        echo $data1['diteruskan_pada'];
                                    }
                                ?></td>
                            <td><?php 
                                    $sql="SELECT detail_disposisi_pegawai_penerima.nip_penerima, pegawai.nama from detail_disposisi_pegawai_penerima INNER JOIN disposisi ON disposisi.id_disposisi=detail_disposisi_pegawai_penerima.id_disposisi INNER JOIN pegawai ON detail_disposisi_pegawai_penerima.nip_penerima=pegawai.nip where disposisi.id_sm='$id_sm'";  
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama'];echo '<br>'; 
                                    }
                                ?>
                            </td>
                            <td><?php 
                                    $sql="SELECT disposisi.disposisi_nip, pegawai.nama from disposisi INNER JOIN pegawai ON disposisi.disposisi_nip=pegawai.nip where disposisi.id_sm='$id_sm'";  
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama'];echo '<br>'; 
                                    }
                                ?>
                            </td>
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