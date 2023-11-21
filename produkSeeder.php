<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_bunga' => 'Mawar',
            'jenis' => 'Bunga Hias',
            'stok' => 10,
            'harga' => 50000,
            'status' => 'Tersedia',
        ]);

        Produk::create([
            'nama_bunga' => 'Anggrek',
            'jenis' => 'Bunga Hias',
            'stok' => 15,
            'harga' => 75000,
            'status' => 'Tersedia',
        ]);

        Produk::create([
            'nama_bunga' => 'Krisan',
            'jenis' => 'Bunga Potong',
            'stok' => 20,
            'harga' => 30000,
            'status' => 'Tersedia',
        ]);

        // Tambahkan seeder lainnya sesuai kebutuhan
    }
}
