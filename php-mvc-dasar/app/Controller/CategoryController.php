<?php
require_once 'CategoryModel.php';

class CategoryController {
    private $model;

    public function __construct() {
        $this->model = new CategoryModel();
    }

    public function index() {
        $categories = $this->model->getAllCategories();
        include 'category_view.php';
    }

    public function addCategory($name) {
        $newCategory = $this->model->addCategory($name);
        // Redirect atau tampilkan pesan sukses
    }

    public function deleteCategory($id) {
        $result = $this->model->deleteCategory($id);
        // Redirect atau tampilkan pesan sukses/gagal
    }

    public function editCategory($id, $name) {
        $result = $this->model->editCategory($id, $name);
        // Redirect atau tampilkan pesan sukses/gagal
    }
}

// Contoh penggunaan:
$controller = new CategoryController();
$controller->index(); // Menampilkan daftar kategori
//Untuk menambah kategori: $controller->addCategory('Nama Kategori Baru');
// Untuk menghapus kategori: $controller->deleteCategory($categoryId);
// Untuk mengedit kategori: $controller->editCategory($categoryId, 'Nama Kategori Baru');
?>
