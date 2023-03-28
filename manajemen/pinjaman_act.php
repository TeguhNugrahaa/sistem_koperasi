<?php
include '../koneksi.php';


$kode_pinjam  = $_POST['kode_pinjam'];
$nama  = $_POST['nama'];
$tanggal_pinjam  = $_POST['tanggal_pinjam'];
$tanggal_tempo  = $_POST['tanggal_tempo'];
$jenis  = $_POST['jenis'];
$besar  = $_POST['besar'];
$lama  = $_POST['lama'];
$status_pinjaman  = $_POST['status_pinjaman'];

mysqli_query($koneksi, "insert into pinjaman values (NULL,'$kode_pinjam', '$nama', '$tanggal_pinjam', '$tanggal_tempo', '$jenis', '$besar', '$lama', '$status_pinjaman')") or die(mysqli_error($koneksi));
header("location:pinjaman.php");




//mysqli_query($koneksi, "insert into pensiun ('umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('$sekarang','$pensiun', '$sisa', '$berdua', '$inflasi', '$pensiun', '$deposito', '$dana', '$investasi', '$simpan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");


//$qry = "insert into pensiun ('id_pensiun','umur_sekarang', 'umur_pensiun', 'jumlah_sisa', 'biaya_berdua', 'asumsi_inflasi', 'biaya_pensiun', 'bunga_deposito', 'total_dana', 'return_investasi', 'simpanan') values ('[$id_pensiun]', '[$umur_sekarang]', '[$umur_pensiun]', '[$jumlah_sisa]', '[$biaya_berdua]', '[$asumsi_inflasi]', '[$biaya_pensiun]', '[$bunga_deposito]', '[$total_dana]', '[$return_investasi]', '[$simpanan]')";


//if (!mysqli_query($koneksi, $qry)) {
//printf("Error message: %s<br>", mysqli_error($koneksi));
//}


















//mysqli_query($koneksi, "insert into 'pensiun' values ('$umur_sekarang','$umur_pensiun', '$jumlah_sisa', '$biaya_berdua', '$asumsi_inflasi', '$biaya_pensiun', $bunga_deposito', '$total_dana', '$return_investasi', '$simpanan')") or die(mysqli_error($koneksi));
//header("location:pensiun.php");
