<?php
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "update simpanan set simpanan_id='1' where simpanan_id='$id'");

mysqli_query($koneksi, "delete from simpanan where simpanan_id='$id'");
header("location:simpanan.php");
