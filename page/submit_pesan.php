<?php
// save_order.php

// Tambahkan ini untuk melihat pesan error secara langsung
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mengambil data JSON dari request body
$request_data = json_decode(file_get_contents('php://input'), true);

if ($request_data) {
    $file = '../database/pemesanan.json';

    // Pastikan direktori database ada
    if (!file_exists('../database')) {
        mkdir('../database', 0777, true);
    }

    // Mengambil data yang ada di file JSON
    if (file_exists($file)) {
        $current_data = json_decode(file_get_contents($file), true);
    } else {
        $current_data = [];
    }

    // Menambahkan data baru ke dalam array
    $current_data[] = $request_data;

    // Menyimpan data kembali ke file JSON
    if (file_put_contents($file, json_encode($current_data, JSON_PRETTY_PRINT))) {
        echo json_encode(['message' => 'Data berhasil disimpan']);
    } else {
        echo json_encode(['message' => 'Gagal menyimpan data']);
    }
} else {
    echo json_encode(['message' => 'Data tidak valid']);
}
?>
