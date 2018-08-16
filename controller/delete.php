<?php

include '../config/koneksi.php';

$sql = "DELETE FROM orang WHERE id=".$_GET['id'];

$result = mysqli_query($conn,$sql);
