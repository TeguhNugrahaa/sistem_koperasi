<?php
include '../koneksi.php';
$id  = $_GET['id'];

//mysqli_query($koneksi, "update pinjaman set pinjaman_id='1' where pinjaman_id='$id'");

mysqli_query($koneksi, "DELETE from pinjaman where pinjaman_id='$id'");
header("location:pinjaman.php");
