<?php

include '../config/koneksi.php';

$sql = "SELECT * FROM orang";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $link_delete = "<a class='hapusData' href='controller/delete.php?id=".$row['id']."'>Delete</a>";
        $link_update = "<a class='updateData' href='controller/update.php?id=".$row['id']."' nama='".$row['nama']."' alamat='".$row['alamat']."'>Update</a>";
        echo $row['nama'].", Alamat: ".$row['alamat'] . ". $link_update | $link_delete<br/>";
    }
}