<?php
class CategoryModel {
    // Fungsi untuk mengambil semua kategori dari database
    public function getAllCategories() {
        // Kode untuk mengambil data kategori dari database
        // Contoh sederhana:
        $categories = array(
            array('id' => 1, 'name' => 'Elektronik'),
            array('id' => 2, 'name' => 'Pakaian'),
            array('id' => 3, 'name' => 'Alat Tulis')
        );
        return $categories;
    }

    // Fungsi untuk menambah kategori ke database
    public function addCategory($name) {
        // Kode untuk menambah kategori ke database
        // Contoh sederhana:
        $newCategory = array('id' => 4, 'name' => $name);
        return $newCategory;
    }

    // Fungsi untuk menghapus kategori dari database
    public function deleteCategory($id) {
        // Kode untuk menghapus kategori dari database
        // Contoh sederhana:
        return true; // Berhasil dihapus
    }

    // Fungsi untuk mengedit kategori di database
    public function editCategory($id, $name) {
        // Kode untuk mengedit kategori di database
        // Contoh sederhana:
        return true; // Berhasil diedit
    }
}
?>
