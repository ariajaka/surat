 <?php 
  // membuat query max untuk kode barang
  $carikode = mysql_query("select max(id_disposisi) from disposisi") or die (mysql_error());
  // menjadikannya array
  $datakode = mysql_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($datakode[0], 3);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $hasilkode = "DSP".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $hasilkode = "DSP0001";
  }

 ?>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Tambah Disposisi &nbsp;
            <a href="index.php?mod=disposisi&act=view" class="btn btn-primary">Lihat Daftar Disposisi</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/disposisi/add.php" method="POST">
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
                        <label class="form-label" for="formfield1">Id Disposisi</label>
                        <span class="desc">e.g. "DSP001"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="id_disposisi" value="<?php echo $hasilkode; ?>">
                        </div>
                    </div>   
                     <div class="form-group">No Surat</label>
                        <select name="cmbnosurat" id="cmbnosurat" class="form-control">
                            <option disabled="disabled" selected="selected"  value="0">Pilih No Surat
                            <?php
                                $sql = mysql_query("SELECT * FROM surat_masuk WHERE status='Belum di Disposisi' ORDER BY tgl_catat_sm DESC");
                                if(mysql_num_rows($sql) != 0){
                                    while($row = mysql_fetch_assoc($sql)) {
                                        echo "<option value='$row[id_sm]'>$row[nomor_sm]</option>";
                                    }
                                }
                            ?>
                            </option> 
                        </select>
                    </div>           
                     <div class="form-group">
                        <label class="form-label" for="formfield2">Tanggal Disposisi</label>
                        <div class="controls">
                            <input type="text" class="form-control tanggalsurtu" id="tanggal_disposisi" name="tanggal_disposisi" required>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Diteruskan Kepada</label>
                          <span class="desc pull-right">
                            <a class="btn btn-default btn-sm" onClick="addRow('Nama Diteruskan')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Diteruskan')"><i class="fa fa-trash"></i></a>
                          </span>
                            <table id="Nama Diteruskan" width="100%" border="0">
                              <tbody>
                                <tr>
                                    <td width="5%"><input type="checkbox" name="chk"></td>
                                    <td width="95%">
                                      <select name="cmbditeruskan[]" id="cmbditeruskan" class="form-control">
          									                 <option disabled="disabled" selected="selected"  value="0">Pilih Diteruskan Kepada</option> 
                                             <option value="Kepala Balai">Kepala Balai</option>
                                       		   <option value="Ka. Subbag TU">Ka. Subbag TU</option>
                                         		 <option value="Kasie Pemeriksaan">Kasie Pemeriksaan</option>
                                          	 <option value="Kasie Penindakan">Kasie Penindakan</option>
                                             <option value="Kasie Pengujian Kimia">Kasie Pengujian Kimia</option>
                                             <option value="Kasie Pengujian Mikrobiologi">Kasie Pengujian Mikrobiologi</option>
                                             <option value="Kasie Infokom">Kasie Infokom</option>
                                             <option value="Pejabat Pembuat Komitmen">Pejabat Pembuat Komitmen</option>
                                             <option value="Manajer Mutu">Manajer Mutu</option>
                              		    </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>                           
                    </div>         
                    <div class="form-group">
                        <label class="form-label" for="formfield5">Diteruskan ke Pejabat Lain selain diatas</label>
                        <span class="desc pull-right">
                            <a class="btn btn-default btn-sm" onClick="addRow('Nama Pejabat_Lain')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Pejabat_Lain')"><i class="fa fa-trash"></i></a>
                        </span>
                        <table id="Nama Pejabat_Lain" width="100%" border="0">
                          <tbody>
                            <tr>
                                <td width="5%"><input type="checkbox" name="chk"></td>
                                <td width="95%">
                                 <input type="text" class="form-control" id="formfield5" name="pejabat_lain[]">      
                                </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>     
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Diterima oleh Pegawai dengan nama</label>
                        <span class="desc pull-right">
                            <a class="btn btn-default btn-sm" onClick="addRow('Nama Pegawai_Penerima')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Pegawai_Penerima')"><i class="fa fa-trash"></i></a>
                        </span>
                        <table id="Nama Pegawai_Penerima" width="100%" border="0">
                          <tbody>
                            <tr>
                                <td width="5%"><input type="checkbox" name="chk"></td>
                                <td width="95%">
                                <select name="cmbpegawaipenerima[]" id="cmbpegawaipenerima" class="form-control">
									               <option disabled="disabled" selected="selected"  value="0">Pilih Pegawai yang menerima
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
                                </td>
                            </tr>
                          </tbody>
                        </table>                           
                    </div>      
                    <div class="form-group">
                        <label class="form-label" for="formfield7">Keterangan Disposisi</label>
                        <span class="desc pull-right">
                            <a class="btn btn-default btn-sm" onClick="addRow('Nama Ket_Disposisi')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Ket_Disposisi')"><i class="fa fa-trash"></i></a>
                        </span>
                        <table id="Nama Ket_Disposisi" width="100%" border="0">
                          <tbody>
                            <tr>
                                <td width="5%"><input type="checkbox" name="chk"></td>
                                <td width="95%">
                                <select name="cmbket_disposisi[]" id="cmbket_disposisi" class="form-control">
									<option disabled="disabled" selected="selected"  value="0">Pilih Keterangan Disposisi</option> 
                         		   <option value="Sebagai bahan informasi dan evaluasi">Sebagai bahan informasi dan evaluasi</option>
                           		   <option value="Untuk ditindaklanjuti">Untuk ditindaklanjuti</option>
                            	   <option value="Untuk direspons">Untuk direspons</option>
                                   <option value="Untuk dibahas bersama">Untuk dibahas bersama</option>
                                   <option value="Untuk ditelaah dan usulan">Untuk ditelaah dan usulan</option>
                                   <option value="Disiapkan konsep jawaban">Disiapkan konsep jawaban</option>
                                   <option value="Fotokopi">Fotokopi</option>
                                   <option value="Arsipkan">Arsipkan</option>
                        		</select>
                                </td>
                            </tr>
                          </tbody>
                        </table>                           
                    </div>  
       				 <div class="form-group">
                        <label class="form-label" for="formfield8">Keterangan Disposisi selain diatas</label>
                        <span class="desc pull-right">
                            <a class="btn btn-default btn-sm" onClick="addRow('Nama Ket_Dispo_Lain')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Ket_Dispo_Lain')"><i class="fa fa-trash"></i></a>
                        </span>
                        <table id="Nama Ket_Dispo_Lain" width="100%" border="0">
                          <tbody>
                            <tr>
                                <td width="5%"><input type="checkbox" name="chk"></td>
                                <td width="95%">
                                 <input type="text" class="form-control" id="formfield8" name="ket_dispo_lain[]" required>      
                                </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>     
                    <div class="form-group">
                        <label class="form-label" for="formfield9">Catatan</label>
                        <span class="desc">e.g. "ok"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield9" name="catatan" required>
                        </div>
                    </div>   
                      <div class="form-group">
                        <label class="form-label" for="formfield10">Pembuat Disposisi</label>
                        <select name="cmbpembuat_disposisi" id="cmbpembuat_disposisi" class="form-control">
                            <option disabled="disabled" selected="selected"  value="0">Pilih Pembuat Disposisi
                            <?php
                                $sql = mysql_query("SELECT * FROM pegawai WHERE level != 3 AND level != 4 ORDER BY level");
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