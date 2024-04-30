<?php

// Memuat kelas Router
require_once 'Router.php';

use WebLanjutan\PHP\MVC\DASAR\App\Router;
use WebLanjutan\PHP\MVC\DASAR\Controller\CategoryController;
use WebLanjutan\PHP\MVC\DASAR\Controller\ProductController;
use WebLanjutan\PHP\MVC\DASAR\Controller\SupplierController;
use WebLanjutan\PHP\MVC\DASAR\Controller\TransactionController;

// Mendaftarkan route untuk halaman-halaman yang diinginkan
Router::add('GET', '/', function () {
    // Halaman utama (misalnya halaman dashboard)
    echo "Halaman Utama";
});

Router::add('GET', '/kategori', [CategoryController::class, 'index']);
Router::add('POST', '/kategori/tambah', [CategoryController::class, 'add']);
Router::add('GET', '/kategori/edit/{id}', [CategoryController::class, 'edit']);
Router::add('POST', '/kategori/edit/{id}', [CategoryController::class, 'update']);
Router::add('POST', '/kategori/hapus/{id}', [CategoryController::class, 'delete']);

Router::add('GET', '/produk', [ProductController::class, 'index']);
Router::add('POST', '/produk/tambah', [ProductController::class, 'add']);
Router::add('GET', '/produk/edit/{id}', [ProductController::class, 'edit']);
Router::add('POST', '/produk/edit/{id}', [ProductController::class, 'update']);
Router::add('POST', '/produk/hapus/{id}', [ProductController::class, 'delete']);

Router::add('GET', '/supplier', [SupplierController::class, 'index']);
Router::add('POST', '/supplier/tambah', [SupplierController::class, 'add']);
Router::add('GET', '/supplier/edit/{id}', [SupplierController::class, 'edit']);
Router::add('POST', '/supplier/edit/{id}', [SupplierController::class, 'update']);
Router::add('POST', '/supplier/hapus/{id}', [SupplierController::class, 'delete']);

Router::add('GET', '/transaksi', [TransactionController::class, 'index']);
Router::add('POST', '/transaksi/tambah', [TransactionController::class, 'add']);
Router::add('GET', '/transaksi/edit/{id}', [TransactionController::class, 'edit']);
Router::add('POST', '/transaksi/edit/{id}', [TransactionController::class, 'update']);
Router::add('POST', '/transaksi/hapus/{id}', [TransactionController::class, 'delete']);

// Mengembalikan instance Router yang sudah diatur
return Router::getInstance();
