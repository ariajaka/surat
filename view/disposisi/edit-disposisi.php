<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editsql = "SELECT * FROM disposisi INNER JOIN surat_masuk ON disposisi.id_sm=surat_masuk.id_sm WHERE id_disposisi = '$id'";
        $dataedit = mysql_query($editsql);
        $edit = mysql_fetch_assoc($dataedit);
    }
 ?>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Edit Disposisi &nbsp;
            <a href="index.php?mod=disposisi" class="btn btn-primary">Lihat Daftar Disposisi</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form role="form" action="sql/disposisi/edit.php" method="POST">
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
                            <input type="text" class="form-control" id="formfield1" name="id_disposisi" value="<?php echo $edit['id_disposisi'] ?>" readonly="readonly">
                        </div>
                    </div>   
                     <!-- ID in Hidden-->
                        <input type="text" name="id" value="<?php echo $edit['id_disposisi'] ?>" hidden>
                    <!-- ID in Hidden -->
                    <div class="form-group">No Surat</label>
                        <select name="cmbnosurat" id="cmbnosurat" class="form-control">
                           <option value="<?php echo $edit['id_sm'] ?>"><?php echo $edit['nomor_sm'] ?></option>
                            <?php
                                $sql = mysql_query("SELECT * FROM surat_masuk WHERE status = 'Belum di Disposisi' ORDER BY tgl_catat_sm DESC");
                                if(mysql_num_rows($sql) != 0){
                                    while($row = mysql_fetch_assoc($sql)) {
                                        echo "<option value='$row[id_sm]'>$row[nomor_sm]</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>        
                    <div class="form-group">
                        <label class="form-label" for="formfield2">Tanggal Disposisi</label>
                        <div class="controls">
                            <input type="text" class="form-control tanggalsurtu" id="tanggal_disposisi" name="tanggal_disposisi" value="<?php echo $edit['tgl_disposisi'] ?>">
                        </div>
                    </div>     
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Diteruskan Kepada</label>
                            <span class="desc pull-right">
                                <a class="btn btn-default btn-sm" onClick="addRow('Nama Diteruskan')"><i class="fa fa-plus"></i></a>
                                <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Diteruskan')"><i class="fa fa-trash"></i></a>
                            </span>
                                <table width="100%">
                                    <?php 
                                      $nomor =0;
                                      $sql = "SELECT a.id, a.diteruskan_pada, a.id_disposisi from detail_disposisi_diteruskan_pada a INNER JOIN disposisi b ON b.id_disposisi = a.id_disposisi WHERE b.id_disposisi='$id' AND a.diteruskan_pada != ''";
                                      $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                        while($data = mysql_fetch_array($query)) {     
                                            $dataDiteruskanPada = $data['diteruskan_pada'] ;
                                            $dataDiteruskanPadaid = $data['id'] ;
                                        $nomor++;
                                    ?>
                                    <tr>
                                        <td width="95%" border="1" scope="col">
                                            <div align="left"><b><?php if($dataDiteruskanPada !== ''){echo $dataDiteruskanPada ;}?> </b></div>
                                        </td>
                                        <td width="5%">
                                            <a  class="btn btn-default" href='sql/disposisi/delete-diteruskanpada.php?id=<?php echo $id; ?>&id_auto=<?php echo $data['id'];?>' target='_self' alt='Delete Data'>
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
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
                                 <input type="text" class="form-control" id="pejabat_lain" name="pejabat_lain[]">   
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
                                <table width="100%">
                                    <?php 
                                      $nomor =0;
                                      $sql = "SELECT detail_disposisi_pegawai_penerima.nip_penerima, detail_disposisi_pegawai_penerima.id_disposisi, pegawai.nama from detail_disposisi_pegawai_penerima INNER JOIN disposisi ON disposisi.id_disposisi = detail_disposisi_pegawai_penerima.id_disposisi INNER JOIN pegawai ON pegawai.nip=detail_disposisi_pegawai_penerima.nip_penerima WHERE disposisi.id_disposisi='$id'";
                                      $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                        while($data = mysql_fetch_array($query)) {     
                                            $dataPegawaiPenerima = $data['nama'] ;
                                        $nomor++;
                                    ?>
                                    <tr>
                                        <td width="95%" border="1" scope="col">
                                            <div align="left"><b><?php echo $dataPegawaiPenerima ;?> </b></div>
                                        </td>
                                        <td width="5%">
                                            <a  class="btn btn-default" href='sql/disposisi/delete-pegawaipenerima.php?id=<?php echo $id; ?>&pegawaipenerima=<?php echo $data['nip_penerima'];?>' target='_self' alt='Delete Data'>
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
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
                                <table width="100%">
                                    <?php 
                                      $nomor =0;
                                      $sql = "SELECT a.keterangan_disposisi, a.id_disposisi, a.id from detail_disposisi_keterangan_disposisi a INNER JOIN disposisi b ON b.id_disposisi = a.id_disposisi WHERE b.id_disposisi='$id' AND a.keterangan_disposisi != ''";
                                      $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                        while($data = mysql_fetch_array($query)) {     
                                            $dataKetDisposisi = $data['keterangan_disposisi'] ;
                                            $dataKetDisposisi_id = $data['id'] ;
                                        $nomor++;
                                    ?>
                                    <tr>
                                        <td width="95%" border="1" scope="col">
                                            <div align="left"><b><?php if(@$dataKetDisposisi != ''){echo @$dataKetDisposisi; } ?> </b></div>
                                        </td>
                                        <td width="5%">
                                            <a  class="btn btn-default" href='sql/disposisi/delete-ketdisposisi.php?id=<?php echo $id; ?>&id_auto=<?php echo $data['id'];?>' target='_self' alt='Delete Data'>
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                <table id="Nama Ket_Disposisi" width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="5%"><input type="checkbox" name="chk"></td>
                                            <td width="95%">
                                                <select name="cmbket_disposisi[]" id="cmbket_disposisi" class="form-control">
                                                    <option disabled="disabled" selected="selected"  value="0">Pilih Keterangan Disposisi</option> 
                                                    <option value="Sebagai Bahan Informasi dan Evaluasi">Sebagai Bahan Informasi dan Evaluasi</option>
                                                    <option value="Untuk Ditindak Lanjuti<">Untuk Ditindak Lanjuti</option>
                                                    <option value="Untuk Direspons">Untuk Direspons</option>
                                                    <option value="Untuk Dibahas Bersama">Untuk Dibahas Bersama</option>
                                                    <option value="Untuk Ditelaah dan Usulan">Untuk Ditelaah dan Usulan</option>
                                                    <option value="Disiapkan Konsep Jawaban">Disiapkan Konsep Jawaban</option>
                                                    <option value="Foto kopi">Foto kopi</option>
                                                    <option value="Arsip">Arsip</option>
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
                                 <input type="text" class="form-control" id="ket_dispo_lain" name="ket_dispo_lain[]">      
                                </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>  
                    <div class="form-group">
                        <label class="form-label" for="formfield9">Catatan</label>
                        <span class="desc">e.g. "ok"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield9" name="catatan" value="<?php echo $edit['catatan'] ?>">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="form-label" for="formfield10">Pembuat Disposisi</label>
                            <?php  
                                $pustak= "select * FROM disposisi INNER JOIN pegawai ON disposisi.disposisi_nip=pegawai.nip WHERE id_disposisi='$id'";
                                $query = mysql_query($pustak);
                                $pustaka = mysql_fetch_assoc($query)
                            ?>
                                <select name="cmbpembuat_disposisi" id="cmbpembuat_disposisi" class="form-control">
                                    <option value="<?php echo $pustaka['nip'];?>"><?php echo $pustaka['nama'];?></option>
                                    <?php
                                        $sql = mysql_query("SELECT * FROM pegawai WHERE level != 3 AND level != 4 ORDER BY nama");
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
</section>
</div>