<?php
include "../config/koneksi.php";
include "../templates/header.php";

$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<div class="container mt-4">
<h3>Data Produk</h3>
<a href="tambah.php" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $row['id_produk'] ?></td>
    <td><?= $row['nama_produk'] ?></td>
    <td><?= $row['harga'] ?></td>
    <td><?= $row['stok'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id_produk'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $row['id_produk'] ?>" class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</div>

<?php include "../templates/footer.php"; ?>