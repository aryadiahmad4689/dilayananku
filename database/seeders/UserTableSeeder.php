<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'  => 'Ariadi Ahmad',
            'email' => "ariadiahmad".'@dilayananku.com',
            'role' => "Admin",
            'alamat' => "Makassar",
            'password'  => bcrypt('secret')
        ]);

        \App\Models\User::create([
            'name'  => "Syamsul",
            'email' => "syamsul".'@dilayananku.com',
            'role' => "SuperAdmin",
            'alamat' => 'Makassar',
            'password'  => bcrypt('secret')
        ]);
    }
}
