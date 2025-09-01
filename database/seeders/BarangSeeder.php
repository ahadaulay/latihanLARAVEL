<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Laptop ASUS VivoBook',
            'harga'       => 8500000,
            'stok'        => 10,
            'tanggal'     => now(),
        ]);
        
        Barang::create([
            'nama_barang' => 'Laptop ACER VivoBook',
            'harga'       => 8500000,
            'stok'        => 10,
            'tanggal'     => now(),
        ]);
    }
}
