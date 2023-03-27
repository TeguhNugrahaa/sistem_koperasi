<?php
include '../koneksi.php';
$id  = $_POST['id'];
$sekarang  = $_POST['umur_sekarang'];
$tingkat  = $_POST['tingkat_sekolah'];
$sekolah  = $_POST['sisa_sekolah'];
$asumsi  = $_POST['asumsi_kuliah'];
$semester  = $_POST['biaya_semester'];
$kuliah  = $_POST['biaya_kuliah'];
$hidup  = $_POST['biaya_hidup'];
$hidup_kuliah  = $_POST['hidup_kuliah'];
$biaya_buku  = $_POST['biaya_buku'];
$biaya_pt  = $_POST['biaya_pt'];
$biaya_seluruhnya  = $_POST['biaya_seluruhnya'];
$kuliah_hidup  = $_POST['kuliah_hidup'];
$buku_biaya  = $_POST['buku_biaya'];
$biaya_penelitian  = $_POST['biaya_penelitian'];
$total_biaya  = $_POST['total_biaya'];
$return_investasi  = $_POST['return_investasi'];
$dana_investasi  = $_POST['dana_investasi'];


$tingkat = mysqli_query($koneksi, "select * from tingkat where tingkat_id='$id'");
$t = mysqli_fetch_assoc($tingkat);
$tingkat = $t['tingkat_id'];


mysqli_query($koneksi, "update anak set umur_sekarang='$umur_sekarang', tingkat_sekolah='$tingkat_sekolah', sisa_sekolah='$sisa_sekolah', asumsi_kuliah='$asumsi_kuliah', biaya_semester='$biaya_semester', biaya_kuliah ='$biaya_kuliah', biaya_hidup ='$biaya_hidup', hidup_kuliah = '$hidup_kuliah', biaya_buku = '$biaya_buku', biaya_pt = '$biaya_pt', biaya_seluruhnya = '$biaya_seluruhnya', kuliah_hidup ='$kuliah_hidup', buku_biaya = '$buku_biaya', biaya_penelitian = '$biaya_penelitian', total_biaya = '$total_biaya', return_investasi = '$return_investasi', dana_investasi = '$dana_investasi', where anak_id='$id'") or die(mysqli_error($koneksi));
header("location:anak.php");
