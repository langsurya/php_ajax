<?php

include '../config/koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$sql = "UPDATE orang SET nama='$nama',alamat='$alamat' WHERE id=".$_GET['id'];

$result = mysqli_query($conn,$sql);
