<?php
include '../koneksi.php';
session_start();
$id  = $_POST['id'];
$kode_pinjam  = $_POST['kode_pinjam'];
$nama  = $_POST['nama'];
$tanggal_pinjam  = $_POST['tanggal_pinjam'];
$tanggal_tempo  = $_POST['tanggal_tempo'];
$jenis  = $_POST['jenis'];
$besar  = $_POST['besar'];
$lama  = $_POST['lama'];
$status_pinjaman  = $_POST['status_pinjaman'];




// Versi 1 

$qry = "UPDATE pinjaman SET kode_pinjam='$kode_pinjam', nama_anggota='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis_pinjam='$jenis', besar_pinjam='$besar', lama_angsuran='$lama', status_pinjaman='$status_pinjaman' WHERE pinjaman_id='$id'";


$execute = mysqli_query($koneksi, $qry);


//header('location:http://localhost/belajarkoperasi/admin/pinjaman.php');

if (!$execute) {
    printf("Error message: %s<br>", mysqli_error($koneksi));
} else {
    $_SESSION["success"] = 'Data Berhasil Diupdate';
    header("location:../pinjaman.php");
}




// Versi 2
//$query = "UPDATE pinjaman SET(kode_pinjam, nama, tanggal_pinjam, tanggal_tempo, jenis, besar, lama, status_pinjaman)VALUES('$kode_pinjam', '$nama','$tanggal_pinjam','$tanggal_tempo','$jenis', '$besar', '$lama', '$status_pinjaman')";
//header("location:pinjaman.php");

// Versi 3
//mysqli_query($koneksi, "UPDATE pinjaman SET kode_pinjam='$kode_pinjam', nama_anggota='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis_pinjam='$jenis', besar_pinjam='$besar', lama_angsuran='$lama', status_pinjaman='$status_pinjaman' WHERE pinjaman_id='$id'") or die(mysqli_error($koneksi));
//header("location:pinjaman.php"); 

// Versi 4


//$qry = "UPDATE pinjaman SET kode_pinjam='$kode_pinjam', nama_anggota='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis_pinjam='$jenis', besar_pinjam='$besar', lama_angsuran='$lama', status_pinjaman='$status_pinjaman' WHERE pinjaman_id='$id'";

//$execute = mysqli_query($koneksi, $qry);
//header("location:pinjaman.php");

//if (!$execute) {
    //printf("Error message: %s<br>", mysqli_error($koneksi));
//}



// Versi 5
//$qry = "UPDATE pinjaman SET kode_pinjam='$kode_pinjam', nama_anggota='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_tempo='$tanggal_tempo', jenis_pinjam='$jenis', besar_pinjam='$besar', lama_angsuran='$lama', status_pinjaman='$status_pinjaman', WHERE pinjaman_id='$id'";
//header("location:pinjaman.php");
