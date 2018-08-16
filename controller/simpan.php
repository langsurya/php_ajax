<?php

include '../config/koneksi.php';

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO orang (nama, alamat) VALUES ('$nama','$alamat')";
    if (mysqli_query($conn,$sql)) {
        echo "Berhasil Memasukan Data";
    } else {
        echo "Error Memasukan Data <br/>".mysqli_error($conn);
    }
    
}