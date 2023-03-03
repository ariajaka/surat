<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/laporan_surat_masuk/view-surat_masuk.php');
    }
}else{
    include ('view/laporan_surat_masuk/view-surat_masuk.php');
}
?>