<?php
require_once 'ProductModel.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function index() {
        $products = $this->model->getAllProducts();
        include 'product_view.php';
    }

    public function addProduct($name, $price) {
        $newProduct = $this->model->addProduct($name, $price);
        // Redirect atau tampilkan pesan sukses
    }

    public function deleteProduct($id) {
        $result = $this->model->deleteProduct($id);
        // Redirect atau tampilkan pesan sukses/gagal
    }

    public function editProduct($id, $name, $price) {
        $result = $this->model->editProduct($id, $name, $price);
        // Redirect atau tampilkan pesan sukses/gagal
    }
}

// Contoh penggunaan:
$controller = new ProductController();
$controller->index(); // Menampilkan daftar produk
// Untuk menambah produk: $controller->addProduct('Nama Produk Baru', 100);
// Untuk menghapus produk: $controller->deleteProduct($productId);
// Untuk mengedit produk: $controller->editProduct($productId, 'Nama Produk Baru', 200);
?>
