<?php
include "../config/koneksi.php";
include "../templates/header.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM produk WHERE id_produk='$id'"));
?>

<div class="container mt-4">
<h3>Edit Produk</h3>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $data['id_produk'] ?>">
    <input type="text" name="nama" class="form-control mb-2" value="<?= $data['nama_produk'] ?>">
    <input type="number" name="harga" class="form-control mb-2" value="<?= $data['harga'] ?>">
    <input type="number" name="stok" class="form-control mb-2" value="<?= $data['stok'] ?>">
    <button class="btn btn-warning">Update</button>
</form>
</div>

<?php include "../templates/footer.php"; ?>