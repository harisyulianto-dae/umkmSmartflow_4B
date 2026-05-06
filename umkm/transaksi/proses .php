<?php
include "../config/koneksi.php";

$id_produk = $_POST['id_produk'];
$jumlah = $_POST['jumlah'];

$p = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM produk WHERE id_produk='$id_produk'"));

$subtotal = $p['harga'] * $jumlah;
$total = ($subtotal > 100000) ? $subtotal * 0.9 : $subtotal;

// simpan transaksi
mysqli_query($conn,"INSERT INTO transaksi (tanggal,total,id_user)
VALUES (NOW(),'$total',1)");

$id_transaksi = mysqli_insert_id($conn);

// detail
mysqli_query($conn,"INSERT INTO detail_transaksi
(id_transaksi,id_produk,jumlah,subtotal)
VALUES ('$id_transaksi','$id_produk','$jumlah','$subtotal')");

// update stok
$stok = $p['stok'] - $jumlah;
mysqli_query($conn,"UPDATE produk SET stok='$stok' WHERE id_produk='$id_produk'");

header("Location: ../laporan/index.php");
?>