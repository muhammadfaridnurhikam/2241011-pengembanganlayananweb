<!-- Contoh tampilan daftar transaksi -->
<h1>Daftar Transaksi</h1>
<ul>
    <?php foreach ($transactions as $transaction): ?>
        <li><?php echo $transaction['product']; ?> - Quantity: <?php echo $transaction['quantity']; ?> - Total: $<?php echo $transaction['total']; ?></li>
    <?php endforeach; ?>
</ul>

<!-- Form untuk menambah transaksi -->
<form action="add_transaction.php" method="post">
    <input type="text" name="product_name" placeholder="Nama Produk">
    <input type="number" name="quantity" placeholder="Jumlah">
    <input type="number" name="total" placeholder="Total Harga">
    <button type="submit">Tambah Transaksi</button>
</form>

<!-- Form untuk menghapus transaksi -->
<form action="delete_transaction.php" method="post">
    <input type="hidden" name="transaction_id" value="<?php echo $transaction['id']; ?>">
    <button type="submit">Hapus Transaksi</button>
</form>

<!-- Form untuk mengedit transaksi -->
<form action="edit_transaction.php" method="post">
    <input type="hidden" name="transaction_id" value="<?php echo $transaction['id']; ?>">
    <input type="text" name="product_name" placeholder="Nama Produk Baru">
    <input type="number" name="quantity" placeholder="Jumlah Baru">
    <input type="number" name="total" placeholder="Total Harga Baru">
    <button type="submit">Edit Transaksi</button>
</form>
