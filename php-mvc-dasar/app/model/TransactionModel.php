<?php
class TransactionModel {
    // Fungsi untuk mengambil semua transaksi dari database
    public function getAllTransactions() {
        // Kode untuk mengambil data transaksi dari database
        // Contoh sederhana:
        $transactions = array(
            array('id' => 1, 'product' => 'Laptop', 'quantity' => 2, 'total' => 2000),
            array('id' => 2, 'product' => 'T-shirt', 'quantity' => 5, 'total' => 100),
            array('id' => 3, 'product' => 'Pensil', 'quantity' => 10, 'total' => 20)
        );
        return $transactions;
    }

    // Fungsi untuk menambah transaksi ke database
    public function addTransaction($product, $quantity, $total) {
        // Kode untuk menambah transaksi ke database
        // Contoh sederhana:
        $newTransaction = array('id' => 4, 'product' => $product, 'quantity' => $quantity, 'total' => $total);
        return $newTransaction;
    }

    // Fungsi untuk menghapus transaksi dari database
    public function deleteTransaction($id) {
        // Kode untuk menghapus transaksi dari database
        // Contoh sederhana:
        return true; // Berhasil dihapus
    }

    // Fungsi untuk mengedit transaksi di database
    public function editTransaction($id, $product, $quantity, $total) {
        // Kode untuk mengedit transaksi di database
        // Contoh sederhana:
        return true; // Berhasil diedit
    }
}
?>
