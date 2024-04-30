<!-- Contoh tampilan daftar kategori -->
<h1>Daftar Kategori</h1>
<ul>
    <?php foreach ($categories as $category): ?>
        <li><?php echo $category['name']; ?></li>
    <?php endforeach; ?>
</ul>

<!-- Form untuk menambah kategori -->
<form action="add_category.php" method="post">
    <input type="text" name="category_name" placeholder="Nama Kategori Baru">
    <button type="submit">Tambah Kategori</button>
</form>

<!-- Form untuk menghapus kategori -->
<form action="delete_category.php" method="post">
    <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
    <button type="submit">Hapus Kategori</button>
</form>

<!-- Form untuk mengedit kategori -->
<form action="edit_category.php" method="post">
    <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
    <input type="text" name="category_name" placeholder="Nama Kategori Baru">
    <button type="submit">Edit Kategori</button>
</form>
