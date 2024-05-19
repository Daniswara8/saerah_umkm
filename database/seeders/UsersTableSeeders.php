<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama'=> 'yuhair',
            'kontak'=>'081243536478',
            'alamat'=>'rumah',
            'email'=>'irsyad.jaa123@gmail.com',
            'password'=>Hash::make('12345678'),
            'status_publish'=>'publish',
            'status_aktif'=>'aktif',
            'slug_link'=>'yuhair',
        ]);
    }
}
