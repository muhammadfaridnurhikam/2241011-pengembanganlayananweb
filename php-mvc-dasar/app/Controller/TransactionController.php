<?php
require_once 'TransactionModel.php';

class TransactionController {
    private $model;

    public function __construct() {
        $this->model = new TransactionModel();
    }

    public function index() {
        $transactions = $this->model->getAllTransactions();
        include 'transaction_view.php';
    }

    public function addTransaction($product, $quantity, $total) {
        $newTransaction = $this->model->addTransaction($product, $quantity, $total);
        // Redirect atau tampilkan pesan sukses
    }

    public function deleteTransaction($id) {
        $result = $this->model->deleteTransaction($id);
        // Redirect atau tampilkan pesan sukses/gagal
    }

    public function editTransaction($id, $product, $quantity, $total) {
        $result = $this->model->editTransaction($id, $product, $quantity, $total);
        // Redirect atau tampilkan pesan sukses/gagal
    }
}

// Contoh penggunaan:
$controller = new TransactionController();
$controller->index(); // Menampilkan daftar transaksi
// Untuk menambah transaksi: $controller->addTransaction('Nama Produk', 5, 100);
// Untuk menghapus transaksi: $controller->deleteTransaction($transactionId);
// Untuk mengedit transaksi: $controller->editTransaction($transactionId, 'Nama Produk Baru', 10, 200);
?>
