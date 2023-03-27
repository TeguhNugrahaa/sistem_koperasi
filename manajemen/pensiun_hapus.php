<?php
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "update pensiun set id_pensiun='1' where id_pensiun='$id'");

mysqli_query($koneksi, "delete from pensiun where id_pensiun='$id'");
header("location:datapensiun.php");
