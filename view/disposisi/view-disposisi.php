<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">DISPOSISI</h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <?php 
                if (isset($_GET['msg'])) {
                    $msg = base64_decode($_GET['msg']);
                    $s = $_GET['s'];
                    if ($s == 1) {
                        echo '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success! </strong>'.$msg.'
                        </div>';   
                    }elseif ($s == 0) {
                        echo '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Failed! </strong>'.$msg.'
                        </div>'; 
                    }elseif ($s == 2) {
                        echo '<div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Oops! </strong>'.$msg.'
                        </div>'; 
                    }
                }
             ?>
            <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Disposisi</th>
                            <th>Tanggal Disposisi</th>
                          	<th>Asal Surat</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Pegawai Yang Menerima</th>
                            <th>Pembuat Disposisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID Disposisi</th>
                            <th>Tanggal Disposisi</th>
                          	<th>Asal Surat</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Pegawai Yang Menerima</th>
                             <th>Pembuat Disposisi</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/disposisi/view.php');
						$no = 0;
                        while ($data_disposisi = mysql_fetch_assoc($disposisi)) {
							$id_disposisi = $data_disposisi['id_disposisi'];
							$id_sm = $data_disposisi['id_disposisi'];
							$nip = $data_disposisi['id_disposisi'];
							$no++;
                    ?>
                        <tr>
                        	<td><?php echo $no; ?></td>
                            <td><?php echo $data_disposisi['id_disposisi']; ?></td>
                            <td><?php $tgl_disposisi = $data_disposisi['tgl_disposisi'];
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
                                echo substr($tgl_disposisi, 3,2).' '.$sebut.' '.substr($tgl_disposisi, 6,4).''; ?></td>
                            <td><?php 
                                    $sql="SELECT * from surat_masuk INNER JOIN disposisi ON surat_masuk.id_sm=disposisi.id_sm where id_disposisi='$id_disposisi'";  
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['alamat_sm']; 
                                    }
                                ?></td>
                            <td><?php 
                                    $sql="SELECT * from surat_masuk INNER JOIN disposisi ON surat_masuk.id_sm=disposisi.id_sm where id_disposisi='$id_disposisi'";  
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nomor_sm']; 
                                    }
                                ?> <br>Tgl.
                                <?php 
                                    $sql="SELECT * from surat_masuk INNER JOIN disposisi ON surat_masuk.id_sm=disposisi.id_sm where id_disposisi='$id_disposisi'";  
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                    $tgl_sm = $data1['tgl_sm'];
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
                                    }
                                ?></td>
                                <td><?php 
                                    $sql="SELECT * from surat_masuk INNER JOIN disposisi ON surat_masuk.id_sm=disposisi.id_sm where id_disposisi='$id_disposisi'";  
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['perihal']; 
                                    }
                                ?></td>
                                <td><?php 
                                    $sql="SELECT detail_disposisi_pegawai_penerima.nip_penerima, pegawai.nama from detail_disposisi_pegawai_penerima INNER JOIN disposisi ON disposisi.id_disposisi=detail_disposisi_pegawai_penerima.id_disposisi INNER JOIN pegawai ON detail_disposisi_pegawai_penerima.nip_penerima=pegawai.nip where disposisi.id_disposisi='$id_disposisi'";  
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama'];echo '<br>'; 
                                    }
                                ?></td>
                                <td><?php 
                                    $sql="SELECT disposisi.disposisi_nip, pegawai.nama from disposisi INNER JOIN pegawai ON disposisi.disposisi_nip=pegawai.nip where disposisi.id_disposisi='$id_disposisi'";  
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama'];echo '<br>'; 
                                    }
                                ?></td>
                            <td>
                                <a href="detail.php?id_prov=<?php echo $data_disposisi['id_disposisi'];?>" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-th-list"></i></a>
                                <a href="FORMLEMBAR_DISPOSISI1.php?id=<?php echo $data_disposisi['id_disposisi']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i></a>
                                <a href="index.php?mod=disposisi&act=edit&id=<?php echo $data_disposisi['id_disposisi']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="index.php?mod=disposisi&act=hapus&id=<?php echo $data_disposisi['id_disposisi']; ?>&idsm=<?php echo $data_disposisi['id_sm']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        
                        <?php
                            }
                        ?>

                    </tbody>
                </table>




            </div>
        </div>
    </div>
</section></div>
