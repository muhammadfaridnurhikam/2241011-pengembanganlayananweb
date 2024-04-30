<?php
class SupplierModel {
    // Fungsi untuk mengambil semua supplier dari database
    public function getAllSuppliers() {
        // Kode untuk mengambil data supplier dari database
        // Contoh sederhana:
        $suppliers = array(
            array('id' => 1, 'name' => 'Supplier A', 'contact' => '08123456789'),
            array('id' => 2, 'name' => 'Supplier B', 'contact' => '08234567890'),
            array('id' => 3, 'name' => 'Supplier C', 'contact' => '08345678901')
        );
        return $suppliers;
    }

    // Fungsi untuk menambah supplier ke database
    public function addSupplier($name, $contact) {
        // Kode untuk menambah supplier ke database
        // Contoh sederhana:
        $newSupplier = array('id' => 4, 'name' => $name, 'contact' => $contact);
        return $newSupplier;
    }

    // Fungsi untuk menghapus supplier dari database
    public function deleteSupplier($id) {
        // Kode untuk menghapus supplier dari database
        // Contoh sederhana:
        return true; // Berhasil dihapus
    }

    // Fungsi untuk mengedit supplier di database
    public function editSupplier($id, $name, $contact) {
        // Kode untuk mengedit supplier di database
        // Contoh sederhana:
        return true; // Berhasil diedit
    }
}
?>
