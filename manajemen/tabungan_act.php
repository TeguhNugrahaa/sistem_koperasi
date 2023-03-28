<?php
include '../koneksi.php';
$kode_tabungan  = $_POST['kode_tabungan'];
$nama  = $_POST['nama'];
$tanggal  = $_POST['tanggal'];
$saldo  = $_POST['saldo'];
$bank  = $_POST['bank'];




mysqli_query($koneksi, "insert into tabungan values (NULL,'$kode_tabungan', '$nama', '$tanggal', '$saldo', '$bank')") or die(mysqli_error($koneksi));
header("location:tabungan.php");




//mysqli_query($koneksi, "insert into pensiun ('umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('$sekarang','$pensiun', '$sisa', '$berdua', '$inflasi', '$pensiun', '$deposito', '$dana', '$investasi', '$simpan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");


//$qry = "insert into pensiun ('id_pensiun','umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('[$id_pensiun]', '[$umur_sekarang]', '[$umur_pensiun]', '[$jumlah_sisa]', '[$biaya_berdua]', '[$asumsi_inflasi]', '[$biaya_pensiun]', '[$bunga_deposito]', '[$total_dana]', '[$return_investasi]', '[$simpanan]')";


//if (!mysqli_query($koneksi, $qry)) {
//printf("Error message: %s<br>", mysqli_error($koneksi));
//}


















//mysqli_query($koneksi, "insert into 'pensiun' values ('$umur_sekarang','$umur_pensiun', '$jumlah_sisa', '$biaya_berdua', '$asumsi_inflasi', '$biaya_pensiun', $bunga_deposito', '$total_dana', '$return_investasi', '$simpanan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");
