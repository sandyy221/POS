<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'FNB', 'kategori_nama' => 'Food & Beverage'],
            ['kategori_kode' => 'BTH', 'kategori_nama' => 'Beauty & Health'],
            ['kategori_kode' => 'HMC', 'kategori_nama' => 'Home Care'],
            ['kategori_kode' => 'BYK', 'kategori_nama' => 'Baby & Kid'],
            ['kategori_kode' => 'ELE', 'kategori_nama' => 'Elektronik'],
        ];
        
        DB::table('m_kategori')->insert($data);
    }
}