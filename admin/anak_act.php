<?php
include '../koneksi.php';
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



mysqli_query($koneksi, "insert into anak values (NULL,'$sekarang','$tingkat', '$sisa', '$asumsi', '$inflasi', '$biaya', '$biayakuliah', '$hidup', '$biayahidup', '$bukusemester', '$masukpt', '$uangkuliah', '$hidupkuliah', '$buku', '$penelitian', '$total', '$return', '$dana')") or die(mysqli_error($koneksi));
header("location:dataanak.php");
