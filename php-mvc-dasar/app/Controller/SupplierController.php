<?php
require_once 'SupplierModel.php';

class SupplierController {
    private $model;

    public function __construct() {
        $this->model = new SupplierModel();
    }

    public function index() {
        $suppliers = $this->model->getAllSuppliers();
        include 'supplier_view.php';
    }

    public function addSupplier($name, $contact) {
        $newSupplier = $this->model->addSupplier($name, $contact);
        // Redirect atau tampilkan pesan sukses
    }

    public function deleteSupplier($id) {
        $result = $this->model->deleteSupplier($id);
        // Redirect atau tampilkan pesan sukses/gagal
    }

    public function editSupplier($id, $name, $contact) {
        $result = $this->model->editSupplier($id, $name, $contact);
        // Redirect atau tampilkan pesan sukses/gagal
    }
}

// Contoh penggunaan:
$controller = new SupplierController();
$controller->index(); // Menampilkan daftar supplier
// Untuk menambah supplier: $controller->addSupplier('Nama Supplier Baru', '08123456789');
// Untuk menghapus supplier: $controller->deleteSupplier($supplierId);
// Untuk mengedit supplier: $controller->editSupplier($supplierId, 'Nama Supplier Baru', '08234567890');
?>
