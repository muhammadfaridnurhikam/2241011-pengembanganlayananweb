<?php

// Memuat autoload Composer untuk memuat kelas-kelas dari vendor
require_once __DIR__ . '/vendor/autoload.php';

// Memuat router
$router = require_once __DIR__ . '/router.php';

// Menjalankan router untuk menangani permintaan
$router->run();
