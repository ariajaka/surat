 <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  
  <!-- Load File javascript config.js -->
  <script src="assets/js/config.js" type="text/javascript"></script>

  <?php 
  // membuat query max untuk kode barang
  $carikode = mysql_query("select max(no_sppd) from detail_st_sppd") or die (mysql_error());
  // menjadikannya array
  $datakode = mysql_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($datakode[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $hasilkode = str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $hasilkode = "0001";
  }

 ?>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Tambah SPPD &nbsp;
            <a href="index.php?mod=sppd&act=view" class="btn btn-primary">Lihat Daftar SPPD</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/sppd/add.php" method="POST">
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
                    <div class="form-group">
                        <label class="form-label" for="formfield1">No SPPD</label>
                        <span class="desc">e.g. "0001"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="no_sppd" value="<?php echo $hasilkode; ?>">
                        </div>
                    </div>   
                    <div class="form-group">
                       <label class="form-label" for="formfield3">Id SK</label>
                       <select name="provinsi" id="provinsi" class="form-control">
                            <option value="">Pilih Surat Keluar</option>
                            <?php
                            // Load file koneksi.php
                            include "config/koneksi.php";
                            
                            // Buat query untuk menampilkan semua data siswa
                            $sql = $pdo->prepare("SELECT * FROM surat_tugas WHERE status='belum_sppd' ORDER BY id_sk");
                            $sql->execute(); // Eksekusi querynya
                            
                            while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
                              echo "<option value='".$data['id_sk']."'>".$data['id_sk']."</option>";
                            }
                            ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="petugas">Petugas</label>
                        <select name="kota" id="kota" class="form-control">
                          <option value="">Pilih Petugas</option>
                        </select>
                        <div id="loading" style="margin-top: 15px;">
                          <img src="assets/images/loading.gif"> <small>Loading...</small>
                        </div>   
                    </div> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="pull-right ">
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                        <button type="submit" name="update_st" class="btn btn-success">Save & Update Status Surat Tugas</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section></div>