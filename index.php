<?php

declare(strict_types=1);

require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Produk.php';

// Nama: Okta Ramadhani | NIM: 24.24.032095

$mahasiswaList = [
    new Mahasiswa('24.24.032095', 'Okta Ramadhani', 'Pendidikan Teknologi Informasi', 3.80),
    new Mahasiswa('24.24.032096', 'Rina Kartika', 'Pendidikan Teknologi Informasi', 3.20),
    new Mahasiswa('24.24.032097', 'Budi Santoso', 'Pendidikan Teknologi Informasi', 2.90),
];

echo "=== DATA MAHASISWA ===\n";
foreach ($mahasiswaList as $mhs) {
    echo $mhs->info() . " | Predikat: " . $mhs->predikat() . "\n";
}

$produkList = [
    new Produk('Buku Pemrograman PHP', 5000, 3),
    new Produk('Flashdisk 32GB', 75000, 4),
];

echo "\n=== DATA PRODUK ===\n";
foreach ($produkList as $produk) {
    echo "{$produk->nama} (Rp{$produk->harga} x {$produk->stok}) -> Total Nilai: {$produk->totalNilai()}\n";
}
