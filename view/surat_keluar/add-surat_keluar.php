 <?php 
  // membuat query max untuk kode barang
  $carikode = mysql_query("select max(id_sk) from surat_keluar") or die (mysql_error());
  // menjadikannya array
  $datakode = mysql_fetch_array($carikode);
  $tahunSekarang = new DateTime();
  $tahunSekarangIni= $tahunSekarang->format('Y');
  // jika $datakode
  if ($datakode) 
  {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($datakode[0], 6);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $hasilkode = "SK".$tahunSekarangIni.str_pad($kode, 4, "0", STR_PAD_LEFT);
  }
  else 
  {
   $hasilkode = "SK".$tahunSekarangIni."0001";
  }

 ?>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Tambah Surat Keluar &nbsp;
            <a href="index.php?mod=surat_keluar&act=view" class="btn btn-primary">Lihat Daftar Surat Keluar</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/surat_keluar/add.php" method="POST">
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
                        <label class="form-label" for="formfield1">Id Surat Keluar</label>
                        <span class="desc">e.g. "SK0001"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="id_sk" value="<?php echo $hasilkode; ?>">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Nomor Awal Surat</label>
                        <span class="desc">e.g. "KU.01.04.08.88.01.19."</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="kepala_sk" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield3">Perihal</label>
                        <span class="desc">e.g. "Permintaan LRA"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="perihal" required>
                        </div>
                    </div>     
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Tujuan</label>
                        <span class="desc">e.g. "Dinkes Provinsi"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="tujuan" required>
                        </div>
                    </div>       
                    <div class="form-group">
                        <label class="form-label" for="formfield5">Tanggal Surat Keluar</label>
                        <div class="controls">
                            <input type="text" class="form-control tanggalsurtu" id="tanggalsurtu" name="tanggal_surat_keluar" required>
                        </div>
                    </div>        
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Penandatangan</label>
                        <select name="cmbpenandatangan" id="cmbpenandatangan" class="form-control">
                            <option disabled="disabled" selected="selected"  value="0">Pilih Penandatangan
                            <?php
                                $sql = mysql_query("SELECT * FROM pegawai ORDER BY nama");
                                if(mysql_num_rows($sql) != 0){
                                    while($row = mysql_fetch_assoc($sql)) {
                                        echo "<option value='$row[nip]'>$row[nama]</option>";
                                    }
                                }
                            ?>
                            </option> 
                        </select>
                    </div>       
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="pull-right ">
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section></div>