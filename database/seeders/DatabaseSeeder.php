<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

         \App\Models\User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('indonesia'),
            'level' => 'admin'
         ]);

         \App\Models\User::create([
            'name' => 'Petugas',
            'username' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('indonesia'),
            'level' => 'petugas'
         ]);

         // \App\Models\User::create([
         //    'nama' => 'rafa',
         //    'nis' => '86291257',
         //    'nisn' => '0098712456',
         //    'nama' => 'rafa',
         //    'alamat' => 'joyotakan',
         //    'id_kelas' => '1',
         //    'id_spp' => '1',
         //    'no_telp' => '085803030303',
         //    'password' => Hash::make('qwertyui'),
         //    'level' => 'user'
         // ]);
}
}
