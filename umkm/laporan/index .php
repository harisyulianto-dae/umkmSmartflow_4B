<?php
include "../config/koneksi.php";
include "../templates/header.php";

$data = mysqli_query($conn,"
SELECT t.tanggal,p.nama_produk,d.jumlah,d.subtotal
FROM transaksi t
JOIN detail_transaksi d ON t.id_transaksi=d.id_transaksi
JOIN produk p ON d.id_produk=p.id_produk
");
?>

<div class="container mt-4">
<h3>Laporan</h3>

<table class="table table-bordered">
<tr>
    <th>Tanggal</th>
    <th>Produk</th>
    <th>Jumlah</th>
    <th>Total</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $row['tanggal'] ?></td>
    <td><?= $row['nama_produk'] ?></td>
    <td><?= $row['jumlah'] ?></td>
    <td><?= $row['subtotal'] ?></td>
</tr>
<?php } ?>
</table>
</div>

<?php include "../templates/footer.php"; ?>