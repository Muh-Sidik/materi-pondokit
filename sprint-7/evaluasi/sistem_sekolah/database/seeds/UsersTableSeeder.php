<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Waka Humas",
            'email' => "wakaHumas@gmail.com",
            'password' => bcrypt("masukaja")
        ]);
    }
}
