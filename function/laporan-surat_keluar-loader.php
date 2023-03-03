<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/laporan_surat_keluar/view-surat_keluar.php');
    }
}else{
    include ('view/laporan_surat_keluar/view-surat_keluar.php');
}
?>