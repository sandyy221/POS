<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'user_id' => rand(1, 3), // random kasir (1=admin, 2=manager, 3=kasir)
                'pembeli' => 'Pembeli ' . $i,
                'penjualan_kode' => 'TRX' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => now()->subDays(rand(1, 30)), // random tanggal dalam 30 hari terakhir
            ];
        }
        
        DB::table('t_penjualan')->insert($data);
    }
}