<?php
include '../koneksi.php';
$tingkat  = $_POST['tingkat'];

mysqli_query($koneksi, "insert into tingkat values (NULL,'$tingkat')");
header("location:tingkat.php");
