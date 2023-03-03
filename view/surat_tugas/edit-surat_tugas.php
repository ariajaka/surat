
<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editsql = "SELECT * FROM surat_tugas WHERE id_sk = '$id'";
        $dataedit = mysql_query($editsql);
        $edit = mysql_fetch_assoc($dataedit);
    }
 ?>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Edit Surat Tugas &nbsp;
            <a href="index.php?mod=surat_tugas&act=view" class="btn btn-primary">Lihat Daftar Surat Tugas</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/surat_tugas/edit.php" method="POST">
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
                            <input type="text" class="form-control" id="formfield1" name="id_sk" value="<?php echo $edit['id_sk'] ?>" readonly="readonly">
                        </div>
                    </div> 
                     <!-- ID in Hidden-->
                        <input type="text" name="id" value="<?php echo $edit['id_sk'] ?>" hidden>
                    <!-- ID in Hidden -->  
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Nomor Awal Surat</label>
                        <span class="desc">e.g. "KU.01.04.08.88.01.19."</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="kepala_st" value="<?php echo $edit['kepala_st'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="formfield3">Jenis Surat Tugas</label>
                      <select name="cmb_jenis_st" id="cmb_jenis_st" class="form-control" onchange="changeValue(this.value)">
                        <option value="<?php echo $edit['jenis_st'];?>"><?php echo $edit['jenis_st'];?>
                        <?php 
                          $result = mysql_query("select * from jenis_st");   
                          if(mysql_num_rows($result) != 0)
                          {
                            $jsArray = "var dtBrg = new Array();\n"; 

                            while ($row = mysql_fetch_array($result)) {    
                            echo '<option value="' . $row['jenis_st'] . '">' . $row['jenis_st'] . '</option>';    
                            $jsArray .= "dtBrg['" . $row['jenis_st'] . "'] = {status_sppd:'" . addslashes($row['status_st']) . "'};\n";}      
                          }
                        ?>
                          </option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Tujuan Tugas</label>
                        <span class="desc">e.g. "Jakarta"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="tujuan_tugas" value="<?php echo $edit['tujuan_st'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield3">Tempat Tugas</label>
                        <span class="desc">e.g. "Hotel Dakota"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="tempat_tugas" value="<?php echo $edit['tempat_st'] ?>">
                        </div>
                    </div>     
                    <div class="form-group">
                        <label class="form-label" for="formfield3">Kegiatan</label>
                        <span class="desc">e.g. "Pengawasan Sarana"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="kegiatan" value="<?php echo $edit['kegiatan'] ?>">
                        </div>
                    </div>
                           
                    <div class="form-group">
                        <label class="form-label" for="formfield5">Tanggal Surat Tugas</label>
                        <div class="controls">
                            <input type="text" class="form-control tanggalsurtu" id="tanggal_surat_tugas" name="tanggal_surat_tugas" value="<?php echo $edit['tgl_st'] ?>">
                        </div>
                    </div>     
                   
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Nama Petugas</label>
                        <span class="desc pull-right">
                            <a class="btn btn-default btn-sm" onClick="addRow('Nama Petugas')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Petugas')"><i class="fa fa-trash"></i></a>
                        </span>
                        <table width="100%">
                            <?php 
                              $nomor =0;
                              $sql = "SELECT a.nama, a.nip from pegawai a INNER JOIN detail_st b ON a.nip = b.petugas_nip WHERE id_sk='$id'";
                              $query = mysql_query($sql);
                                while($data = mysql_fetch_array($query)) {     
                                    $dataDasar = $data['nama'] ;
                                $nomor++;
                            ?>
                                   <tr>
                                     <td width="95%" border="1" scope="col">
                                        <div align="left"><b><?php echo $dataDasar ;?> </b></div>
                                     </td>
                                     <td width="5%">
                                        <a  class="btn btn-default" href='sql/surat_tugas/delete-petugas.php?id=<?php echo $id; ?>&nip=<?php echo $data['nip'];?>' target='_self' alt='Delete Data'>
                                        <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    </tr>
                             <?php } ?>
                        </table>
                        <table id="Nama Petugas" width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td width="5%"><input type="checkbox" name="chk"></td>
                                    <td width="95%">
                                    <select name="cmbPetugas[]" id="cmbPetugas" class="form-control">
                                        <option disabled="disabled" selected="selected"  value="0">Pilih Petugas
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
                        <label class="form-label" for="formfield6">Penandatangan</label>
                        <?php  
                            $pustak= "select * FROM surat_tugas a INNER JOIN pegawai b ON a.penandatangan=b.nip WHERE id_sk='$id'";
                            $query = mysql_query($pustak)or die("Query failed with error: ".mysql_error());
                            $pustaka = mysql_fetch_assoc($query)
                        ?>
                        <select name="cmbpenandatangan" id="cmbpenandatangan" class="form-control">
                            <option value="<?php echo $pustaka['nip'];?>"><?php echo $pustaka['nama'];?></option>
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
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Status Surat Tugas</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="status_sppd" name="status_sppd" value="<?php echo $edit['status'] ?>">
                        </div>   
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
<script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(cmb_jenis_st){  
    document.getElementById('status_sppd').value = dtBrg[cmb_jenis_st].status_sppd;
    };  
</script> 