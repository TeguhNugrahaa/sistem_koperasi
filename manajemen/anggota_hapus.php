<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from anggota where anggota_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['anggota_foto'];
unlink("../gambar/user/$foto");
mysqli_query($koneksi, "delete from anggota where anggota_id='$id'");
header("location:anggota.php");
