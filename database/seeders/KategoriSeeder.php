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
            ['kategori-kode' => 'FNB', 'kategori-nama' => 'Food & Beverage'],
            ['kategori-kode' => 'BTH', 'kategori-nama' => 'Beauty & Health'],
            ['kategori-kode' => 'HMC', 'kategori-nama' => 'Home Care'],
            ['kategori-kode' => 'BYK', 'kategori-nama' => 'Baby & Kid'],
            ['kategori-kode' => 'ELE', 'kategori-nama' => 'Elektronik'],
        ];
        
        DB::table('m_kategori')->insert($data);
    }
}