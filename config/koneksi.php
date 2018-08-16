<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "belajar_ajax";

$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn) {
    die("Connection failed :" .mysqli_connect_error());
}