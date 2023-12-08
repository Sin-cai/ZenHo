<?php
include '../koneksi.php';

$id_RS = $_POST['id_RS'];

mysqli_query($koneksi, "INSERT INTO checkout(id_rs) values ('$id_RS') ");
header("location:../admin/login.php");
?>