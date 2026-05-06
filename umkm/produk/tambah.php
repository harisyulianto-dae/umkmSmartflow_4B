<?php include "../templates/header.php"; ?>

<div class="container mt-4">
<h3>Tambah Produk</h3>

<form method="POST" action="simpan.php">
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Produk">
    <input type="number" name="harga" class="form-control mb-2" placeholder="Harga">
    <input type="number" name="stok" class="form-control mb-2" placeholder="Stok">
    <button class="btn btn-success">Simpan</button>
</form>
</div>

<?php include "../templates/footer.php"; ?>