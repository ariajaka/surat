<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Surat Keluar</h2>
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
                            <th>Nomor Awal Surat</th>
                            <th>ID SK</th>
                            <th width="300px">Perihal</th>
                            <th>Tujuan</th>
                            <th>Tgl. Surat Keluar</th>
                            <th width="300px">Penandatangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                           <th>No</th>
                            <th>Nomor Awal Surat</th>
                            <th>ID SK</th>
                            <th width="300px">Perihal</th>
                            <th>Tujuan</th>
                            <th>Tgl. Surat Keluar</th>
                            <th width="300px">Penandatangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/surat_keluar/view.php');
						$no = 0;
                        while ($data_surat_keluar = mysql_fetch_assoc($surat_keluar)) {
							$id_sk = $data_surat_keluar['id_sk'];
							$no++;
                    ?>
                        <tr>
                        	<td><?php echo $no; ?></td>
                            <td><?php echo $data_surat_keluar['kepala_sk']; ?></td>
                            <td><?php echo $data_surat_keluar['id_sk']; ?></td>
                            <td><?php echo $data_surat_keluar['perihal']; ?></td>
                            <td><?php echo $data_surat_keluar['tujuan']; ?></td>
                            <td><?php $tgl_sk = $data_surat_keluar['tgl_sk'];
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
                                echo substr($tgl_sk, 3,2).' '.$sebut.' '.substr($tgl_sk, 6,4).''; ?></td>
                            <td><?php 
                                    $sql="SELECT a.penandatangan_nip, b.nama from surat_keluar a INNER JOIN pegawai b ON a.penandatangan_nip=b.nip where a.id_sk='$id_sk'";  
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama'];echo '<br>'; 
                                    }
                                ?></td>
                            <td>
                                <a href="index.php?mod=surat_keluar&act=edit&id=<?php echo $data_surat_keluar['id_sk']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="index.php?mod=surat_keluar&act=hapus&id=<?php echo $data_surat_keluar['id_sk']; ?>&idsk=<?php echo $data_surat_keluar['id_sk']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
