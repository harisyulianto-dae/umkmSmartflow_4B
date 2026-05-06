<?php
include "../config/koneksi.php";

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($conn,"INSERT INTO produk (nama_produk,harga,stok)
VALUES ('$nama','$harga','$stok')");

header("Location: index.php");
?>