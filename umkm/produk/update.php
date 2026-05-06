<?php
include "../config/koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($conn,"UPDATE produk SET 
nama_produk='$nama',
harga='$harga',
stok='$stok'
WHERE id_produk='$id'");

header("Location: index.php");
?>