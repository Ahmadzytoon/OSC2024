<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Ahmad.Orange',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('orange@123'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Ammar Mesmar',
            'email' => 'ammar.mismar@orange.com',
            'password' => Hash::make('oarnge@123'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Omar Al Mashini',
            'email' => 'omar.almashini@orange.com',
            'password' => Hash::make('orange@123'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Muhannad Abu Maizer',
            'email' => 'muhannad.abumaizar@orange.com',
            'password' => Hash::make('orange@123'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Salah Eddin Mahasneh',
            'email' => 'salaheddin.mahasneh@orange.com',
            'password' => Hash::make('orange@123'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);

    }
}
