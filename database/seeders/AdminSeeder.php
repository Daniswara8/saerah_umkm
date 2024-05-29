<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'nama' => 'Daniswara Zavier',
            'alamat' => 'Pondok Indah',
            'jeniskelamin' => 'cowo',
            'notelepon' => '089898989',
        ]);
    }
}
