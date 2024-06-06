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
            'name' => 'Jose Vides Baron',
            'email' => 'jose.videsbaron@gmail.com',
            'password' => Hash::make('12345678'),
            'rol_id' => 1,
        ]);
    }
}

