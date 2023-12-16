<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data')->insert([
            'nama' => 'Mochamad Ayi Lutfi',
            'nim' => '2225230062',
            'jk' => 'Laki-Laki',
            'ttl' => 'Lebak, 29 April 2005',
            'alamat' => 'Lebak',
        ]);
    }
}
