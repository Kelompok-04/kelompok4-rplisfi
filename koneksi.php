<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "kelompok4_toko";

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect){
    die("koneksi gagal" . mysqli_connect_error());
}





?>