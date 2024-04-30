<?php
class ProductModel {
    // Fungsi untuk mengambil semua produk dari database
    public function getAllProducts() {
        // Kode untuk mengambil data produk dari database
        // Contoh sederhana:
        $products = array(
            array('id' => 1, 'name' => 'Laptop', 'price' => 1000),
            array('id' => 2, 'name' => 'T-shirt', 'price' => 20),
            array('id' => 3, 'name' => 'Pensil', 'price' => 2)
        );
        return $products;
    }

    // Fungsi untuk menambah produk ke database
    public function addProduct($name, $price) {
        // Kode untuk menambah produk ke database
        // Contoh sederhana:
        $newProduct = array('id' => 4, 'name' => $name, 'price' => $price);
        return $newProduct;
    }

    // Fungsi untuk menghapus produk dari database
    public function deleteProduct($id) {
        // Kode untuk menghapus produk dari database
        // Contoh sederhana:
        return true; // Berhasil dihapus
    }

    // Fungsi untuk mengedit produk di database
    public function editProduct($id, $name, $price) {
        // Kode untuk mengedit produk di database
        // Contoh sederhana:
        return true; // Berhasil diedit
    }
}
?>
