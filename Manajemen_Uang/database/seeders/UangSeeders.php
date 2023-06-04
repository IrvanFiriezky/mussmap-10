<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UangSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('uang_saku_user')->insert([
            'id_user' => '1',
            'bulan' => '1',
            'jumlah_uang_user' => '1000000',
            'created_at' =>date('Y-m-d H:i:s')
        ]);

    }
}
