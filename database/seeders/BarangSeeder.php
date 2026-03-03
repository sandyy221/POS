<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Food & Beverage (kategori_id = 1)
            ['kategori_id' => 1, 'barang_kode' => 'FNB01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['kategori_id' => 1, 'barang_kode' => 'FNB02', 'barang_nama' => 'Kop Kapal Api', 'harga_beli' => 4500, 'harga_jual' => 5500],
            ['kategori_id' => 1, 'barang_kode' => 'FNB03', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 3000, 'harga_jual' => 4000],
            
            // Beauty & Health (kategori_id = 2)
            ['kategori_id' => 2, 'barang_kode' => 'BTH01', 'barang_nama' => 'Sabun Lifebuoy', 'harga_beli' => 4000, 'harga_jual' => 5500],
            ['kategori_id' => 2, 'barang_kode' => 'BTH02', 'barang_nama' => 'Pasta Gigi Pepsodent', 'harga_beli' => 6000, 'harga_jual' => 8000],
            
            // Home Care (kategori_id = 3)
            ['kategori_id' => 3, 'barang_kode' => 'HMC01', 'barang_nama' => 'So Klin Pewangi', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['kategori_id' => 3, 'barang_kode' => 'HMC02', 'barang_nama' => 'Sunlight Pencuci Piring', 'harga_beli' => 8000, 'harga_jual' => 11000],
            
            // Baby & Kid (kategori_id = 4)
            ['kategori_id' => 4, 'barang_kode' => 'BYK01', 'barang_nama' => 'Popok Bayi', 'harga_beli' => 45000, 'harga_jual' => 55000],
            ['kategori_id' => 4, 'barang_kode' => 'BYK02', 'barang_nama' => 'Susu Formula', 'harga_beli' => 35000, 'harga_jual' => 42000],
            
            // Elektronik (kategori_id = 5)
            ['kategori_id' => 5, 'barang_kode' => 'ELE01', 'barang_nama' => 'Kabel USB', 'harga_beli' => 15000, 'harga_jual' => 25000],
        ];
        
        DB::table('m_barang')->insert($data);
    }
}