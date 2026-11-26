<?php

declare(strict_types=1);

class Mahasiswa
{
    public string $nim;
    public string $nama;
    public string $prodi;
    public float $ipk;

    public function __construct(string $nim, string $nama, string $prodi, float $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function info(): string
    {
        return "{$this->nim} - {$this->nama} ({$this->prodi}) | IPK: " . number_format($this->ipk, 2);
    }

    public function predikat(): string
    {
        if ($this->ipk >= 3.51) {
            return 'Cumlaude';
        }

        if ($this->ipk >= 3.01) {
            return 'Sangat Memuaskan';
        }

        return 'Memuaskan';
    }
}
