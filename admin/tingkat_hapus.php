<?php
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "update tingkat set tingkat_sekolah='1' where tingkat_sekolah='$id'");

mysqli_query($koneksi, "delete from tingkat where tingkat_id='$id'");
header("location:tingkat.php");
