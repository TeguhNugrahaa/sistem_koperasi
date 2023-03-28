<?php
include '../koneksi.php';
session_start();
$id  = $_POST['id'];
$kode_tabungan  = $_POST['kode_tabungan'];
$nama  = $_POST['nama'];
$tanggal  = $_POST['tanggal'];
$saldo  = $_POST['saldo'];
$bank  = $_POST['bank'];








//$qry = "UPDATE tabungan SET kode_tabungan='$kode_tabungan', anggota_tabungan='$nama', tabungan_tanggal='$tanggal', saldo='$saldo', bank='$bank' WHERE tabungan_id='$id'";

$qry = "UPDATE tabungan SET kode_tabungan='$kode_tabungan', anggota_tabungan='$nama', tabungan_tanggal='$tanggal', saldo='$saldo', rekening_bank='$bank' WHERE tabungan_id='$id'";

$execute = mysqli_query($koneksi, $qry);

$execute = mysqli_query($koneksi, $qry);
if (!$execute) {
    printf("Error message: %s<br>", mysqli_error($koneksi));
} else {
    $_SESSION["success"] = 'Data Berhasil Diupdate';
    header("location:tabungan.php");

    //header("location:../admin/tabungan.php");
}






//$execute = mysqli_query($koneksi, $qry);
//header("location:tabungan.php");

//if (!$execute) {
//printf("Error message: %s<br>", mysqli_error($koneksi));
//}
