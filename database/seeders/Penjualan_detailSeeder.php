<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        
        // Untuk setiap transaksi (1-10), buat 3 item barang
        for ($penjualan_id = 1; $penjualan_id <= 10; $penjualan_id++) {
            for ($j = 1; $j <= 3; $j++) {
                $barang_id = rand(1, 10); // random barang dari 1-10
                
                // Ambil harga jual dari tabel barang (contoh: kita set manual sesuai range)
                $harga = 0;
                switch($barang_id) {
                    case 1: $harga = 3500; break;
                    case 2: $harga = 5500; break;
                    case 3: $harga = 4000; break;
                    case 4: $harga = 5500; break;
                    case 5: $harga = 8000; break;
                    case 6: $harga = 15000; break;
                    case 7: $harga = 11000; break;
                    case 8: $harga = 55000; break;
                    case 9: $harga = 42000; break;
                    case 10: $harga = 25000; break;
                    default: $harga = 10000;
                }
                
                $data[] = [
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => rand(1, 5), // jumlah barang 1-5
                ];
            }
        }
        
        DB::table('t_penjualan_detail')->insert($data);
    }
}