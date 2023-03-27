<?php
include '../koneksi.php';
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




mysqli_query($koneksi, "insert into pensiun values (NULL,'$sekarang','$pensiun', '$sisa', '$berdua', '$asumsi', '$biaya', '$bunga', '$total', '$return','$simpan')") or die(mysqli_error($koneksi));
header("location:datapensiun.php");




//mysqli_query($koneksi, "insert into pensiun ('umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('$sekarang','$pensiun', '$sisa', '$berdua', '$inflasi', '$pensiun', '$deposito', '$dana', '$investasi', '$simpan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");


//$qry = "insert into pensiun ('id_pensiun','umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('[$id_pensiun]', '[$umur_sekarang]', '[$umur_pensiun]', '[$jumlah_sisa]', '[$biaya_berdua]', '[$asumsi_inflasi]', '[$biaya_pensiun]', '[$bunga_deposito]', '[$total_dana]', '[$return_investasi]', '[$simpanan]')";


//if (!mysqli_query($koneksi, $qry)) {
//printf("Error message: %s<br>", mysqli_error($koneksi));
//}


















//mysqli_query($koneksi, "insert into 'pensiun' values ('$umur_sekarang','$umur_pensiun', '$jumlah_sisa', '$biaya_berdua', '$asumsi_inflasi', '$biaya_pensiun', $bunga_deposito', '$total_dana', '$return_investasi', '$simpanan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");
