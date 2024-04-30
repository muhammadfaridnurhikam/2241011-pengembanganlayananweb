<!-- Contoh tampilan daftar produk -->
<h1>Daftar Produk</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></li>
    <?php endforeach; ?>
</ul>

<!-- Form untuk menambah produk -->
<form action="add_product.php" method="post">
    <input type="text" name="product_name" placeholder="Nama Produk Baru">
    <input type="number" name="product_price" placeholder="Harga">
    <button type="submit">Tambah Produk</button>
</form>

<!-- Form untuk menghapus produk -->
<form action="delete_product.php" method="post">
    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
    <button type="submit">Hapus Produk</button>
</form>

<!-- Form untuk mengedit produk -->
<form action="edit_product.php" method="post">
    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
    <input type="text" name="product_name" placeholder="Nama Produk Baru">
    <input type="number" name="product_price" placeholder="Harga Baru">
    <button type="submit">Edit Produk</button>
</form>
