<?php
include '../koneksi.php';
$id  = $_POST['id'];
$sekarang  = $_POST['sekarang'];
$pensiun  = $_POST['pensiun'];
$sisa  = $_POST['sisa'];
$berdua  = $_POST['berdua'];
$asumsi  = $_POST['asumsi'];
$biaya  = $_POST['biaya'];
$bunga  = $_POST['bunga'];
$total  = $_POST['total'];
$return  = $_POST['return'];
$simpan  = $_POST['simpan'];






//mysqli_query($koneksi, "UPDATE pensiun SET umur_sekarang='$sekarang', umur_pensiun='$pensiun', jumlah_sisa ='$sisa', biaya_berdua = '$berdua', asumsi_inflasi = '$asumsi', bunga_deposito = '$bunga', total_dana = '$total', return_investasi = '$return', simpanan = '$simpan', where id ='$id'") or die(mysqli_error($koneksi)); 
//header("location:datapensiun.php"); 





$qry = "UPDATE pensiun SET umur_sekarang='$sekarang', umur_pensiun='$pensiun', jumlah_sisa='$sisa', biaya_berdua='$berdua', asumsi_inflasi='$asumsi', biaya_pensiun='$biaya', bunga_deposito='$bunga', total_dana='$total', return_investasi='$return', simpanan='$simpan' WHERE id_pensiun='$id'";

$execute = mysqli_query($koneksi, $qry);
header("location:datapensiun.php");

if (!$execute) {
    printf("Error message: %s<br>", mysqli_error($koneksi));
}
