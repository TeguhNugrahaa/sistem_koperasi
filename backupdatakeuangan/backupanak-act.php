<?php
include '../koneksi.php';
$umur_sekarang  = $_POST['umur_sekarang'];
$tingkat_sekolah  = $_POST['tingkat_sekolah'];
$sisa_sekolah  = $_POST['sisa_sekolah'];
$asumsi_kuliah  = $_POST['asumsi_kuliah'];
$biaya_semester  = $_POST['biaya_semester'];
$biaya_kuliah  = $_POST['biaya_kuliah'];
$biaya_hidup  = $_POST['biaya_hidup'];
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



mysqli_query($koneksi, "insert into anak values (NULL,'$umur_sekarang','$tingkat_sekolah', '$sisa_sekolah', $asumsi_kuliah', '$biaya_semester', '$biaya_kuliah', '$biaya_hidup', '$hidup_kuliah', '$biaya_buku', '$biaya_pt', '$biaya_seluruhnya', '$kuliah_hidup', '$buku_biaya', '$biaya_penelitian', '$total_biaya', '$return_investasi', '$dana_investasi')") or die(mysqli_error($koneksi));
header("location:anak.php");
