<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $produk = htmlspecialchars($_POST["produk"]);
    $merk = htmlspecialchars($_POST["merk"]);
    $price = htmlspecialchars($_POST["price"]);
    $stok = htmlspecialchars($_POST["stok"]);
    $tgl = htmlspecialchars($_POST["tgl"]);

    $query = "INSERT INTO products (nama_produk, merek, harga, stok, experied) VALUES ('$produk','$merk','$price','$stok','$tgl')";

    $result = mysqli_query($connect, $query);

    if ($result){
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }else{
        echo mysqli_error($connect);
    }

    mysqli_close($connect);
}
?>