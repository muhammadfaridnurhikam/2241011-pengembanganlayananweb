<!-- Contoh tampilan daftar supplier -->
<h1>Daftar Supplier</h1>
<ul>
    <?php foreach ($suppliers as $supplier): ?>
        <li><?php echo $supplier['name']; ?> - <?php echo $supplier['contact']; ?></li>
    <?php endforeach; ?>
</ul>

<!-- Form untuk menambah supplier -->
<form action="add_supplier.php" method="post">
    <input type="text" name="supplier_name" placeholder="Nama Supplier Baru">
    <input type="text" name="supplier_contact" placeholder="Kontak Supplier">
    <button type="submit">Tambah Supplier</button>
</form>

<!-- Form untuk menghapus supplier -->
<form action="delete_supplier.php" method="post">
    <input type="hidden" name="supplier_id" value="<?php echo $supplier['id']; ?>">
    <button type="submit">Hapus Supplier</button>
</form>

<!-- Form untuk mengedit supplier -->
<form action="edit_supplier.php" method="post">
    <input type="hidden" name="supplier_id" value="<?php echo $supplier['id']; ?>">
    <input type="text" name="supplier_name" placeholder="Nama Supplier Baru">
    <input type="text" name="supplier_contact" placeholder="Kontak Supplier Baru">
    <button type="submit">Edit Supplier</button>
</form>
