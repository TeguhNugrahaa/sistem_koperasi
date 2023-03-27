<?php
include '../koneksi.php';
$id  = $_POST['id'];
$sekarang  = $_POST['sekarang'];
$tingkat  = $_POST['tingkat'];
$sisa  = $_POST['sisa'];
$asumsi  = $_POST['asumsi'];
$inflasi  = $_POST['inflasi'];
$biaya  = $_POST['biaya'];
$biayakuliah  = $_POST['biayakuliah'];
$hidup = $_POST['hidup'];
$biayahidup  = $_POST['biayahidup'];
$bukusemester  = $_POST['bukusemester'];
$masukpt  = $_POST['masukpt'];
$uangkuliah  = $_POST['uangkuliah'];
$hidupkuliah  = $_POST['hidupkuliah'];
$buku  = $_POST['buku'];
$penelitian  = $_POST['penelitian'];
$total  = $_POST['total'];
$return  = $_POST['return'];
$dana  = $_POST['dana'];


$qry = "UPDATE anak SET umur_sekarang='$sekarang', tingkat_sekolah='$tingkat', sisa_sekolah='$sisa', asumsi_kuliah='$asumsi', inflasi_kuliah='$inflasi', biaya_semester='$biaya', biaya_kuliah='$biayakuliah', biaya_hidup='$hidup', hidup_kuliah='$biayahidup', biaya_buku='$bukusemester', biaya_pt='$masukpt', biaya_seluruhnya='$uangkuliah', kuliah_hidup='$hidupkuliah', buku_biaya='$buku', biaya_penelitian='$penelitian', total_biaya='$total', return_investasi='$return', dana_investasi='$dana' WHERE anak_id='$id'";

$execute = mysqli_query($koneksi, $qry);
header("location:dataanak.php");

if (!$execute) {
    printf("Error message: %s<br>", mysqli_error($koneksi));
}
