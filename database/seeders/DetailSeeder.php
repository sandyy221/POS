<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        
        // Cek dulu jumlah barang yang ADA (harusnya 10)
        $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray();
        $penjualanIds = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();
        
        $this->command->info('Barang ID yang tersedia: ' . implode(', ', $barangIds));
        $this->command->info('Penjualan ID yang tersedia: ' . implode(', ', $penjualanIds));
        
        // Pastikan cuma pake barang_id yang beneran ada
        foreach ($penjualanIds as $penjualan_id) {
            for ($j = 1; $j <= 3; $j++) {
                // Pilih random dari barang_id yang ADA aja
                $barang_id = $barangIds[array_rand($barangIds)];
                
                // Ambil harga jual dari database (lebih akurat)
                $barang = DB::table('m_barang')->where('barang_id', $barang_id)->first();
                $harga = $barang->harga_jual ?? 10000;
                
                $data[] = [
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => rand(1, 5),
                ];
            }
        }
        
        DB::table('t_penjualan_detail')->insert($data);
        $this->command->info('Berhasil insert ' . count($data) . ' data penjualan detail');
    }
}