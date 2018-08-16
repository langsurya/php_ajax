<?php

include '../config/koneksi.php';

$sql = "SELECT * FROM orang";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['nama'].", Alamat:".$row['alamat'] . "<br/>";
    }
}