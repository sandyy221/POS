<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Stok untuk 10 barang (user_id = 1 admin yang input)
            ['barang_id' => 11, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 100],
            ['barang_id' => 12, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 75],
            ['barang_id' => 13, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 150],
            ['barang_id' => 14, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 50],
            ['barang_id' => 15, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 60],
            ['barang_id' => 16, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 40],
            ['barang_id' => 17, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 80],
            ['barang_id' => 18, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 30],
            ['barang_id' => 19, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 45],
            ['barang_id' => 20, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 55],
        ];
        
        DB::table('t_stok')->insert($data);
    }
}