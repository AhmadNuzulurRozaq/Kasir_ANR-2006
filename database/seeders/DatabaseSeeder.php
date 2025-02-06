<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Penjualan;
use App\Models\Detailpenjualan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Pelanggan::create([
            'PelangganID' => 01,
            'NamaPelanggan' => 'Ahmad Nuzulur Rozaq',
            'Alamat' => 'Balung Lor',
            'NomorTelepon' => '0882-3064-1097',
        ]);

        Produk::create([
            'ProdukID' => 01,
            'NamaProduk' => 'Pensil 2B',
            'Harga' => 2.000,
            'Stok' => 100,
        ]);

        Penjualan::create([
            'PenjualanID' => 01,
            'TanggalPenjualan' => 20250201,
            'TotalHarga' => 2.000,
            'PelangganID' => 01,
        ]);

        Detailpenjualan::create([
            'DetailID' => 01,
            'PenjualanID' => 01,
            'ProdukID' => 01,
            'JumlahProduk' => 01,
            'Subtotal' => 2.000,
        ]);
    }
}
