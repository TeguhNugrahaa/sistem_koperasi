<?php
include '../koneksi.php';

$kode_simpanan  = $_POST['kode_simpanan'];
$jenis  = $_POST['jenis'];
$besar  = $_POST['besar'];
$kode  = $_POST['kode'];
$tanggal  = $_POST['tanggal'];

mysqli_query($koneksi, "insert into simpanan values (NULL,'$kode_simpanan', '$jenis', '$besar', '$kode', '$tanggal')") or die(mysqli_error($koneksi));
header("location:simpanan.php");




//mysqli_query($koneksi, "insert into pensiun ('umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('$sekarang','$pensiun', '$sisa', '$berdua', '$inflasi', '$pensiun', '$deposito', '$dana', '$investasi', '$simpan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");


//$qry = "insert into pensiun ('id_pensiun','umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('[$id_pensiun]', '[$umur_sekarang]', '[$umur_pensiun]', '[$jumlah_sisa]', '[$biaya_berdua]', '[$asumsi_inflasi]', '[$biaya_pensiun]', '[$bunga_deposito]', '[$total_dana]', '[$return_investasi]', '[$simpanan]')";


//if (!mysqli_query($koneksi, $qry)) {
//printf("Error message: %s<br>", mysqli_error($koneksi));
//}


















//mysqli_query($koneksi, "insert into 'pensiun' values ('$umur_sekarang','$umur_pensiun', '$jumlah_sisa', '$biaya_berdua', '$asumsi_inflasi', '$biaya_pensiun', $bunga_deposito', '$total_dana', '$return_investasi', '$simpanan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");
