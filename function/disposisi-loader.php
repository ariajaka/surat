<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/disposisi/view-disposisi.php');
    }elseif ($act == 'add') {
        include ('view/disposisi/add-disposisi.php');
    }elseif ($act == 'edit') {
        include ('view/disposisi/edit-disposisi.php');
    }elseif ($act == 'hapus') {
        $hapus = true;
        if ($hapus == true) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $idsm = $_GET['idsm'];
                $query = mysql_query("SELECT * FROM disposisi INNER JOIN surat_masuk ON disposisi.id_sm=surat_masuk.id_sm WHERE disposisi.id_disposisi = '$id'");
                $data = mysql_fetch_assoc($query);
            }
                echo '<div class="panel panel-danger animated fadeInDownBig" id="notif" style="z-index:9999;position:absolute;margin:auto;background:rgb(42,42,42);color:white;margin-left:10%;margin-top:8%;">
                      <div class="panel-heading"><i class="fa fa-warning"><strong> Warning</strong></i></div>
                      <center><div class="panel-body">
                        <p>Yakin ingin menghapus surat dengan id Disposisi '.$data['id_disposisi'].' ?</p>
                        <p style="font-style:italic;font-size:12px;color:red"><i class="fa fa-warning"></i> Data yang dihapus tidak dapat dikembalikan lagi</p>
                        <a class="btn btn-danger" href="sql/disposisi/delete.php?id='.$id.'&idsm='.$idsm.'" id="ya" id="hapus">YA</a>
                        <button class="btn btn-success" id="tidak" onclick="$("#notif").hide();">TIDAK</button>
                      </div></center>
                    </div>';
            }
            include ('view/disposisi/view-disposisi.php');
    }else{
        include ('view/disposisi/view-disposisi.php');
    }
}else{
    include ('view/disposisi/view-disposisi.php');
}
?>