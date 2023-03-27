<?php
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "update anak set anak_id='1' where anak_id='$id'");

mysqli_query($koneksi, "delete from anak where anak_id='$id'");
header("location:dataanak.php");
