<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['level_id' => 1, 'level-kode' => 'ADM', 'level-nama' => 'Administrator'],
            ['level_id' => 2, 'level-kode' => 'MNG', 'level-nama' => 'Manager'],
            ['level_id' => 3, 'level-kode' => 'STF', 'level-nama' => 'Staff/Kasir'],
        ];
        DB::table('m_level')->insert($data);
    }
}
