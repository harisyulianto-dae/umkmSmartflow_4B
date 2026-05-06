<?php
include "../config/koneksi.php";
include "../templates/header.php";

$produk = mysqli_query($conn,"SELECT * FROM produk");
?>

<div class="container mt-4">
<h3>Transaksi</h3>

<form method="POST" action="proses.php">
<select name="id_produk" class="form-control mb-2">
<?php while($p = mysqli_fetch_assoc($produk)) { ?>
<option value="<?= $p['id_produk'] ?>">
<?= $p['nama_produk'] ?> - Stok: <?= $p['stok'] ?>
</option>
<?php } ?>
</select>

<input type="number" name="jumlah" class="form-control mb-2" placeholder="Jumlah">

<button class="btn btn-success">Proses</button>
</form>
</div>

<?php include "../templates/footer.php"; ?>