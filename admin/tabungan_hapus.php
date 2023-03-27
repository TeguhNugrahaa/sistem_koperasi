<?php
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "update tabungan set tabungan_id='1' where tabungan_id='$id'");

mysqli_query($koneksi, "delete from tabungan where tabungan_id='$id'");
header("location:tabungan.php");
