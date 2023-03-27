<?php
include '../koneksi.php';
$id  = $_POST['id'];
$tingkat  = $_POST['tingkat'];

mysqli_query($koneksi, "update tingkat set tingkat='$tingkat' where tingkat_id='$id'");
header("location:tingkat.php");
