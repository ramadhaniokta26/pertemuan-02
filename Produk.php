<?php

declare(strict_types=1);

class Produk
{
    public string $nama;
    public int $harga;
    public int $stok;

    public function __construct(string $nama, int $harga, int $stok)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function totalNilai(): int
    {
        return $this->harga * $this->stok;
    }
}
