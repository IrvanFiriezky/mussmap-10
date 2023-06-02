<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Uang_saku_Seeders extends Seeder
{
    

    public function run(): void
    {
        
        DB::table('uang_saku')->insert([
            'nama' => 'irvan',
            'email' => 'irvan.firiezky@student.umn.ac.id',
            'jumlah_uang' => '1000000',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
        DB::table('uang_saku')->insert([
            'nama' => 'bahri',
            'email' => 'bahri.firiezky@student.umn.ac.id',
            'jumlah_uang' => '3000000',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
        DB::table('uang_saku')->insert([
            'nama' => 'kiki',
            'email' => 'kiki.firiezky@student.umn.ac.id',
            'jumlah_uang' => '2000000',
            'created_at' =>date('Y-m-d H:i:s')
        ]);


    }
}
