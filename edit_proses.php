<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $produk = $_POST['produk'];
    $merk = $_POST['merk'];
    $price = $_POST['price'];
    $stok = $_POST['stok'];
    $tgl = $_POST['tgl'];

    $query = "UPDATE products SET nama_produk='$produk',merek='$merk',harga='$price',stok='$stok',experied='$tgl' WHERE id=$id";

    if (mysqli_query($connect, $query)) {
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }else{
        echo mysqli_error($connect);
        echo "<meta http-equiv='refresh' content='5;url=edit.php?id=$id'>";
    }
}
mysqli_close($connect);
?>